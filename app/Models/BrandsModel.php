<?php namespace App\Models;

use CodeIgniter\Model;

class BrandsModel extends Model {

        protected $table      = 'brands';
        protected $primaryKey = 'id_brand';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = [
          'brand_name',
          'brand_slug',
        ];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [
          'brand_name' => 'required|min_length[3]',
          'brand_slug' => 'required|min_length[3]',
        ];
        protected $validationMessages = [];
        protected $skipValidation     = false;




}
