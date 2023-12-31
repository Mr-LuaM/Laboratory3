<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'products';
    protected $primaryKey = 'ProductID';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['ProductName', 'Description', 'Price', 'CategoryID', 'StockQuantity', 'ImageURL'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function getProductsWithCategory()
    {
        return $this->select('products.ProductID, products.ProductName, products.Description, products.Price, categories.CategoryName,products.StockQuantity, products.ImageURL')
            ->join('categories', 'categories.CategoryID = products.CategoryID', 'left')
            ->findAll();
    }
}