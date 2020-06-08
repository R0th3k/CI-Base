<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' =>
            [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'user_name' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'user_lastname' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'user_phone' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'user_email' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'user_password' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'user_password_recovery_token' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
                'default' => NULL,
            ],

            'user_password_recovery_last_date' =>
            [
              'type' => 'DATETIME',
              'constraint' => '6',
              'null' => false,
              'ON UPDATE CURRENT_TIMESTAMP' => true,
            ],


            'user_avatar' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
                'default' => null,
            ],

            'user_role' =>
            [
                'type' => "ENUM('root','admin','registered')",
                'default' => 'registered',
                'null' => false,
            ],

            'user_permission' =>
            [
                'type' => "ENUM('backend','frontend')",
                'default' => 'frontend',
                'null' => false,
            ],

            

            'created_at' => [
                'type' => 'DATETIME',
                'constraint' => '6',
                'null' => false,
                'ON UPDATE CURRENT_TIMESTAMP' => true,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'constraint' => '6',
                'null' => false,
                'ON UPDATE CURRENT_TIMESTAMP' => true,
            ],

            'deleted_at' => [
                'type' => 'INT',
                'null' => true,
                'default' => null,
            ],

        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('users');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('users');
    }
}