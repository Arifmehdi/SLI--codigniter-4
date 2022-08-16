<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AboutMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
    
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
    
            'subtitle' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

            'comment' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

            'details' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
    
          'created_at datetime default current_timestamp',
          'updated_at datetime default current_timestamp on update current_timestamp', 
           ]);
           $this->forge->addPrimaryKey('id');
           $this->forge->createTable('about');
    }

    public function down()
    {
        $this->forge->dropTable('about');
    }
}
