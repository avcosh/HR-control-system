<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrder extends Migration
{
	public function up()
	{
		$this->forge->addField([
		
			'id'              => [
			'type' => 'INT',
			'constraint' => 5,
			'unsigned'       => true,
			'auto_increment' => true
			],
			
			'date'       => [
					'type'       => 'DATE',
				
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('order');
	}

	public function down()
	{
		$this->forge->dropTable('order');
	}
}
