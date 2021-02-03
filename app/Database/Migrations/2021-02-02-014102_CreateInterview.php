<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInterview extends Migration
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
					
			],
		   
			'first_name'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'last_name'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			
			'email'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			 'status'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
				  
			],
			'reject_reason'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'employee_id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
				  
			],
			
        ]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('employee_id','employee','id');
        $this->forge->createTable('interview');

    }

	public function down()
	{
		$this->forge->dropTable('interview');
	}
}
