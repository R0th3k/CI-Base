<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id_product' =>
            [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'product_name' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'product_slug' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'product_description' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'default' => null,
            ],

            'product_image' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'default' => null,
            ],


            'product_price' =>
            [
                'type' => 'INT',
                'constraint' => 255,
                'default' => null,
            ],

            'product_price_discount' =>
            [
                'type' => 'INT',
                'constraint' => 255,
                'default' => null,
            ],

            'product_paypal_code' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'default' => null,
            ],

            'product_featured' =>
            [
                'type' => 'INT',
                'constraint' => 1,
                'default' => null,
            ],

            'product_status' =>
            [
                'type' => 'INT',
                'constraint' => 1,
                'default' => null,
            ],

            'category_id' =>
            [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],

            'brand_id' =>
            [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
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
        $this->forge->addKey('id_product', true);
        $this->forge->addForeignKey('category_id', 'categories', 'id_category', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('brand_id', 'brands', 'id_brand', 'CASCADE', 'CASCADE');
        $this->forge->createTable('products');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('products');
    }
}