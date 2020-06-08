<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model {

        protected $table      = 'users';
        protected $primaryKey = 'id_user';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = [
          'user_name',
          'user_lastname',
          'user_phone',
          'user_email',
          'user_password',
          'user_password_recovery_token',
          'user_password_recovery_last_date',
          'user_avatar',
          'user_role',
          'user_permission',
        ];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [
          'user_name' => 'required|min_length[3]',
          'user_lastname' => 'required|min_length[3]',
          'user_phone' => 'required|numeric|min_length[10]',
          'user_email' => 'required|valid_email|is_unique[users.user_email]',
          'user_password' => 'required|min_length[6]',
        ];
        protected $validationMessages = [];
        protected $skipValidation     = false;




}
