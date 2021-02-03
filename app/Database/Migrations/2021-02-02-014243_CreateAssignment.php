<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAssignment extends Migration
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
			
			'order_id'       => [
					'type'       => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					
			],
		   
			'employee_id'       => [
					'type'       => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
			],
			
			'position_id'       => [
					'type'       => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
			],
			
			'date'       => [
					'type'       => 'DATE',
					
			],
			
			'rate'       => [
					'type'       => 'DECIMAL',
					'constraint'     => 4,2,
					
			],
			
			'salary'       => [
					'type'       => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
			],
			
			'active'       => [
					'type'       => 'BOOLEAN',
					
			],
			
			
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('order_id','order','id');
		$this->forge->addForeignKey('employee_id','employee','id');
		$this->forge->addForeignKey('position_id','position','id');
        $this->forge->createTable('assignment');
	}

	public function down()
	{
		$this->forge->dropTable('assignment');
	}
}
