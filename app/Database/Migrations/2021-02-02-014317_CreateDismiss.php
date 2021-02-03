<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDismiss extends Migration
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
			'date'       => [
					'type'       => 'DATE',
					
			],
			'reason'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					
			],
			
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('order_id','order','id');
		$this->forge->addForeignKey('employee_id','employee','id');
        $this->forge->createTable('dismiss');
	}

	public function down()
	{
		$this->forge->dropTable('dismiss');
	}
}
