<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployee extends Migration
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
                       
                        'first_name'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '100',
                        ],
						'last_name'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '100',
                        ],
						'address'       => [
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
                        
                ]);
		$this->forge->addKey('id', true);
        $this->forge->createTable('employee');

    }

	public function down()
	{
		$this->forge->dropTable('employee');
	}
}
