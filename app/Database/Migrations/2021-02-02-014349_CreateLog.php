<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLog extends Migration
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
			
			'created_at'       => [
					'type'       => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					
			],
		   
			'user_id'       => [
					'type'       => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
			],
			'message'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					
			],
			
			
		]);
		$this->forge->addKey('id', true);
	    $this->forge->createTable('log');
	}

	public function down()
	{
		$this->forge->dropTable('log');
	}
}
