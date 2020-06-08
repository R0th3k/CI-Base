<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Brands extends Migration
{
	public function up()
	{
		$this->forge->addField([

			'id_brand' =>
			[
					'type' => 'INT',
					'constraint' => 5,
					'unsigned' => true,
					'auto_increment' => true,
			],

			'brand_name' =>
			[
					'type' => 'VARCHAR',
					'constraint' => '255',
			],

			'brand_slug' =>
			[
					'type' => 'VARCHAR',
					'constraint' => '255',
			],

	]);
	$this->forge->addKey('id_brand', true);
	$this->forge->createTable('brands');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('brands');
	}
}
