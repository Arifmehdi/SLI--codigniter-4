<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TeamMigration extends Migration
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

            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
    
            'designation' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],

            'details' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

            'facebook' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

            'instragam' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

            'linkedin' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
    
    
          'created_at datetime default current_timestamp',
          'updated_at datetime default current_timestamp on update current_timestamp', 
           ]);
           $this->forge->addPrimaryKey('id');
           $this->forge->createTable('team');
    }

    public function down()
    {
        $this->forge->dropTable('team');
    }
}
