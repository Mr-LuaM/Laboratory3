<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    private $products;
    private $productsCategories;
    private $users;

    public function __construct()
    {
        $this->productsCategories = new \App\Models\ProductsCategoriesModel();
        $this->products = new \App\Models\ProductsModel();
        $this->users = new \App\Models\UsersModel();
    }
    public function index()
    {
        $data = [
            'currentRoute' => 'home',
            'products' => $this->products->getProductsWithCategory(),
            //reusable function from modell na naka join na query
            'users' => $this->users->findAll(),
        ];
        return view('Admin_page/index', $data);
    }

    public function manageProduct()
    {
        $data = [
            'currentRoute' => 'products',
            'products' => $this->products->getProductsWithCategory(),
            'categories' => $this->productsCategories->findAll(),
        ];
        // return $this->response->setJSON($data);
        return view('Admin_page/manage_products', $data);
    }

    public function delete($id)
    {
        // Check if the product with the given ID exists
        $product = $this->products->find($id);

        if (!$product) {
            // Product not found, error message
            return redirect()->to(base_url('manageProduct'))->with('error', 'Product not found');
        }

        // If the product exists, delete it
        $this->products->delete($id);

        // Redirect to the product listing page with a success message
        return redirect()->to(base_url('manageProduct'))->with('success', 'Product deleted successfully');
    }
    public function addProduct()
    {
        // Validation rules for adding a new product
        $addValidationRules = [
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'stock_quantity' => 'required|integer',
            'image' => 'max_size[image,1024]|ext_in[image,png,jpg,jpeg,gif]',
        ];

        // Validation rules for updating a product (without requiring an image)
        $updateValidationRules = [
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'stock_quantity' => 'required|integer',
            'image' => 'max_size[image,1024]|ext_in[image,png,jpg,jpeg,gif]',
        ];

        $editProductId = $this->request->getVar('editProductId');

        if ($this->request->getMethod() === 'post') {
            if (!empty($editProductId)) {
                // Editing an existing product pag may nahanap sa hidden text
                // Perform validation and update the existing product
                // ...
                if (!$this->validate($updateValidationRules)) {
                    // Validation failed, return to the form with errors
                    return redirect()->to(base_url('manageProduct'))->withInput()->with('success', $this->validator->getErrors());
                }

                // Handle form submission and update product here
                // Retrieve and update the product based on $editProductId
                $productName = $this->request->getVar('product_name');
                $description = $this->request->getVar('description');
                $price = $this->request->getVar('price');
                $categoryId = $this->request->getVar('category');
                $stockQuantity = $this->request->getVar('stock_quantity');

                // Default value for image path
                $imagePath = '';

                // Check if a new image file is uploaded
                $image = $this->request->getFile('image');
                if ($image->isValid() && !$image->hasMoved()) {
                    $newName = $image->getRandomName();
                    $image->move(ROOTPATH . 'public/Userpage/assets/img/gallery', $newName);
                    $imagePath = $newName;
                }

                // Update the product in the database based on $editProductId
                $productData = [
                    'ProductName' => $productName,
                    'Description' => $description,
                    'Price' => $price,
                    'CategoryID' => $categoryId,
                    'StockQuantity' => $stockQuantity,
                ];

                // mag update lang ang image path kapag hindinull, kapag null stay the same
                if (!empty($imagePath)) {
                    $productData['ImageURL'] = $imagePath;
                }

                $this->products->update($editProductId, $productData);

                // Redirect to a success page or show a success message
                return redirect()->to(base_url('manageProduct'))->with('success', 'Product updated successfully');

            } else {
                // Adding a new product
                // Perform validation and insert a new product
                if (!$this->validate($addValidationRules)) {
                    // Validation failed, return to the form with errors
                    return view('Admin_page/manage_products', [
                        'validation' => $this->validator,
                    ]);
                }

                $productName = $this->request->getVar('product_name');
                $description = $this->request->getVar('description');
                $price = $this->request->getVar('price');
                $categoryId = $this->request->getVar('category');
                $stockQuantity = $this->request->getVar('stock_quantity');

                // Handle file upload for image (if needed)
                $imagePath = ''; // Default value
                $image = $this->request->getFile('image');
                if ($image->isValid() && !$image->hasMoved()) {
                    $newName = $image->getRandomName();
                    $image->move(ROOTPATH . 'public/Userpage/assets/img/gallery', $newName);
                    $imagePath = $newName;
                }

                // Insert the new product into the database
                $this->products->insert([
                    'ProductName' => $productName,
                    'Description' => $description,
                    'Price' => $price,
                    'CategoryID' => $categoryId,
                    'StockQuantity' => $stockQuantity,
                    'ImageURL' => $imagePath,
                ]);

                // Redirect to a success page or show a success message
                return redirect()->to(base_url('manageProduct'))->with('success', 'Product added successfully');
            }
        }
        return view('Admin_page/manage_products');
    }

    public function manageUser()
    {
        $data = [
            'users' => $this->users->findAll(),
            'currentRoute' => 'users',
        ];
        return view('Admin_page/manage_users', $data);
    }

    public function editUserRole()
    {
        // echo 'has access';

        $userid = $this->request->getPost('userid');
        $newUserRole = $this->request->getPost('userrole');


        $user = $this->users->find($userid);

        if (!$user) {
            return redirect()->to(base_url('manageUser'))->with('error', 'User not found');
        }

        $this->users->update($userid, ['Role' => $newUserRole]);

        return redirect()->to(base_url('manageUser'))->with('success', 'User role updated successfully');
    }
    public function delete_user($id)
    {
        $user = $this->users->find($id);

        if (!$user) {
            return redirect()->to(base_url('manageUser'))->with('error', 'User not found');
        }

        $this->users->delete($id);

        return redirect()->to(base_url('manageUser'))->with('success', 'User deleted successfully');
    }





}