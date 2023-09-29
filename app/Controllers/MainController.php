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
    public function register()
    {
        return view('register');
    }
    public function registration()
    {
        helper(['form']);

        // Define validation rules
        $rules = [
            'username' => 'required|min_length[4]|max_length[100]|is_unique[users.Username]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]'
        ];

        // Check if the form data passes validation
        if ($this->validate($rules)) {

            // Prepare data for insertion into the database
            $data = [
                'Username' => $this->request->getVar('username'),
                'Email' => $this->request->getVar('email'),
                'Password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            // Insert the user data into the database
            $this->user->insert($data);

            // Redirect to the signin page on successful registration
            return redirect()->to('login');
        } else {
            // If validation fails, display errors and the registration form again
            $data['validation'] = $this->validator;
            return view('register', $data);
        }
    }

    public function login()
    {
        helper(['form']);
        return view('login'); // Display the login form view
    }

    public function loginAuth()
    {
        // Start a new session
        $session = session();

        // Get the username or email and password from the request
        $usernameOrEmail = $this->request->getVar('usernameOrEmail');
        $password = $this->request->getVar('password');

        // Attempt to retrieve a user record by username or email
        $data = $this->user
            ->where('Username', $usernameOrEmail) // Check if Username matches
            ->orWhere('Email', $usernameOrEmail) // OR check if Email matches
            ->first();

        if ($data) {
            // If a user with the provided username or email exists

            $hashedPassword = $data['Password'];

            // Verify the entered password against the hashed password
            $authenticatePassword = password_verify($password, $hashedPassword);

            if ($authenticatePassword) {
                // If the password is correct

                // Create session data
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['Username'],
                    // Make sure 'Username' matches your database column name
                    'isLoggedIn' => true
                ];

                // Set session data
                $session->set($ses_data);
                return redirect()->to(""); // Change the URL accordingly
            } else {
                // If the password is incorrect, display an error message
                $session->setFlashdata('msg', 'Email or Password is incorrect.');
                return redirect()->to('login');
            }
        } else {
            // If no user with the provided username or email exists, display an error message
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('login');
        }
    }
    protected function isLoggedIn()
    {
        // Check if the user is authenticated based on your authentication logic
        // For example, you can check if a user session variable exists
        return session()->has('UserID'); // Adjust this logic based on your implementation
    }
    public function logout()
    {
        // Destroy all session data
        session()->destroy();

        // Redirect the user to the desired page (e.g., the login page)
        return redirect()->to('login'); // Adjust the URL as needed
    }


}