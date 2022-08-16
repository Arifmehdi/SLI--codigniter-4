<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AboutSliderMigration extends Migration
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
                'constraint' => 255
            ],
    
          'created_at datetime default current_timestamp',
          'updated_at datetime default current_timestamp on update current_timestamp', 
           ]);
           $this->forge->addPrimaryKey('id');
           $this->forge->createTable('about_slider');
    }

    public function down()
    {
        $this->forge->dropTable('about_slider');
    }
}
