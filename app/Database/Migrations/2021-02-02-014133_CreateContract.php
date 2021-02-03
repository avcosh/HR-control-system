<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContract extends Migration
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
			
			'employee_id'       => [
					'type'       => 'INT',
					
			],
		   
			'first_name'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'last_name'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			
			'date_open'       => [
					'type'       => 'DATE',
					
			],
			 'date_close'          => [
					'type'           => 'DATE',
			
				  
			],
			'close_reason'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			
			
        ]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('contract');
	}

	public function down()
	{
		$this->forge->dropTable('contract');
	}
}
