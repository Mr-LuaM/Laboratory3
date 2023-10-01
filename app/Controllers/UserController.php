<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    private $products;
    private $productsCategories;

    public function __construct()
    {
        $this->productsCategories = new \App\Models\ProductsCategoriesModel();
        $this->products = new \App\Models\ProductsModel();
    }
    public function index()
    {
        $data = [
            'productsCategories' => $this->productsCategories->findAll(),
            'products' => $this->products->findAll(),
            'context' => 'Home',
        ];
        return view('User_page/index', $data);
    }
    public function product()
    {
        $data = [
            'productsCategories' => $this->productsCategories->findAll(),
            'products' => $this->products->findAll(),
            'context' => 'Products',
        ];
        return view('User_page/product', $data);
    }
    protected function getProductDetailsById($productId)
    {
        return $this->products
            ->join('categories', 'products.CategoryID = categories.CategoryID')
            ->where('ProductID', $productId)
            ->first();
    }

    public function viewProducts($productId)
    {
        $productDetails = $this->getProductDetailsById($productId);

        if (!$productDetails) {
            return redirect()->to('products');
        }

        $data = [
            'productDetails' => $productDetails,
            'context' => 'View',
        ];

        return view('User_page/product_details', $data);
    }

    public function about()
    {
        $data = [
            'context' => 'About',
        ];
        return view('User_page/about', $data);
    }
}