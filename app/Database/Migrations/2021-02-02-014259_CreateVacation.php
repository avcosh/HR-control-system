<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVacation extends Migration
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
			'date_from'       => [
					'type'       => 'DATE',
					
			],
			'date_to'       => [
					'type'       => 'DATE',
					
			],
			
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('order_id','order','id');
		$this->forge->addForeignKey('employee_id','employee','id');
        $this->forge->createTable('vacation');
	}

	public function down()
	{
		$this->forge->dropTable('vacation');
	}
}
