<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    private $user;
    // public function index()
    // {
    //     return view('index');
    // }
    public function __construct()
    {
        $this->user = new \App\Models\UsersModel();
    }
    public function showRegistrationForm()
    {
        return view('register');
    }
    public function register()
    {
        helper(['form']);

        // Define validation rules
        $rules = [
            'username' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]'
        ];

        // Check if the form data passes validation
        if ($this->validate($rules)) {

            // Prepare data for insertion into the database
            $data = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            // Insert the user data into the database
            $this->user->insert($data);

            // Redirect to the signin page on successful registration
            return redirect()->to('/signin');
        } else {
            // If validation fails, display errors and the registration form again
            $data['validation'] = $this->validator;
            echo view('signup', $data);
        }
    }

    public function login()
    {
        helper(['form']);
        echo view('signin'); // Display the login form view
    }

    public function loginAuth()
    {
        // Start a new session
        $session = session();

        // Create an instance of the UserModel
        $userModel = new UserModel();

        // Get the username and password from the request
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Attempt to retrieve a user record by username
        $data = $userModel->where('username', $username)->first();

        if ($data) {
            // If a user with the provided username exists

            $hashedPassword = $data['password'];

            // Verify the entered password against the hashed password
            $authenticatePassword = password_verify($password, $hashedPassword);

            if ($authenticatePassword) {
                // If the password is correct

                // Create session data
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'isLoggedIn' => true
                ];

                // Set session data
                $session->set($ses_data);

                // Redirect to the user's profile page
                return redirect()->to("/profile");
            } else {
                // If the password is incorrect, display an error message
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('signin');
            }
        } else {
            // If no user with the provided username exists, display an error message
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }
}