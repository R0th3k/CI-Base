<?php namespace App\Database\Seeds;

class UsersSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
          $pass1 = password_hash('holamundo', PASSWORD_DEFAULT);
          $pass2 = password_hash('123789', PASSWORD_DEFAULT);


            $this->db->table('users')->where('id_user >', 0)->delete();
                //https://randomuser.me/photos

                $item1 = [
                        'user_name' => 'Héktor',
                        'user_lastname' => 'Peña',
                        'user_phone' => '0123456789',
                        'user_email'    => 'hola@mundo.com',
                        'user_password'    => $pass1,
                        'user_avatar'    => 'default.png',
                        'user_role'=> 'admin',
                        'user_permission'=> 'backend',
                ];

                $item2 = [
                        'user_name' => 'R2D2',
                        'user_lastname' => '015487',
                        'user_phone' => '0123456789',
                        'user_email'    => 'adios@mundo.com',
                        'user_password'    => $pass2,
                        'user_avatar'    => 'default.png',
                        'user_role'=> 'registered',
                        'user_permission'=> 'frontend',
                ];

                $this->db->table('users')->insert($item1);
                $this->db->table('users')->insert($item2);

        }
}