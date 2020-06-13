<?php namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model {

        protected $table      = 'categories';
        protected $primaryKey = 'id_category';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = [
          'category_name',
          'category_slug',
        ];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [
          'category_name' => 'required|min_length[3]',
          'category_slug' => 'required|min_length[3]',
        ];
        protected $validationMessages = [];
        protected $skipValidation     = false;




}
