<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
	public function up()
	{
		$this->forge->addField([

			'id_category' =>
			[
					'type' => 'INT',
					'constraint' => 5,
					'unsigned' => true,
					'auto_increment' => true,
			],

			'category_name' =>
			[
					'type' => 'VARCHAR',
					'constraint' => '255',
			],

			'category_slug' =>
			[
					'type' => 'VARCHAR',
					'constraint' => '255',
			],

	]);
	$this->forge->addKey('id_category', true);
	$this->forge->createTable('categories');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('categories');
	}
}
