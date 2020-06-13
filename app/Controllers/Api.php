<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriesModel;
use App\Models\BrandsModel;

class Api extends BaseController
{
    public function index()
    {
    }

    public function categories()
    {
        $categoriesModel = new CategoriesModel();
        $categories = $categoriesModel->select('id_category, category_name, category_slug')->findAll();

        echo json_encode($categories, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function brands()
    {
        $brandsModel = new BrandsModel();
        $brands = $brandsModel->select('id_brand, brand_name, brand_slug')->findAll();

        echo json_encode($brands, JSON_UNESCAPED_UNICODE);
        die();
    }



}
