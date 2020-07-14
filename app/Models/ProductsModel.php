<?php namespace App\Models;

use CodeIgniter\Model;


class ProductsModel extends Model {

        protected $table      = 'products';
        protected $primaryKey = 'id_product';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = [
          'product_name',
          'product_model',
          'product_slug',
          'product_description',
          'product_image',
          'product_price',
          'product_price_discount',
          'product_paypal_code',
          'product_featured',
          'category_id',
          'brand_id',
        ];


        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [
          'product_name' => 'required|min_length[3]',
          'product_model' => 'required|min_length[3]',
          'product_slug' => 'required|min_length[3]',
          'product_description' => 'required|min_length[3]',
          // 'product_image' => 'min_length[3]',
          'product_price' => 'min_length[0]',
          'product_price_discount' => 'min_length[0]',
          // 'product_paypal_code' => 'min_length[3]',
          // 'product_featured' => '',
          'category_id' => 'required',
          'brand_id' => 'required',
        ];
        protected $validationMessages = [];
        protected $skipValidation     = false;




}
