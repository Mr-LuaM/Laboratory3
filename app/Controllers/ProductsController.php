<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductsController extends BaseController
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
        ];
        return view('User_page/index', $data);
    }
    public function products()
    {
        //
    }
    public function viewProducts($productId)
    {
        $data = [
            'productDetails' => $this->products
                ->join('categories', 'products.CategoryID = categories.CategoryID')
                ->where('ProductID', $productId)
                ->first(),
        ];

        return view('User_page/product_details', $data);
    }
}