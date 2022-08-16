<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FounderMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
    
            'photo' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
    
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
    
            'designation' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
    
            'details' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
    
            
    
          'created_at datetime default current_timestamp',
          'updated_at datetime default current_timestamp on update current_timestamp', 
           ]);
           $this->forge->addPrimaryKey('id');
           $this->forge->createTable('founders');
    }

    public function down()
    {
        $this->forge->dropTable('founders');
    }
}
