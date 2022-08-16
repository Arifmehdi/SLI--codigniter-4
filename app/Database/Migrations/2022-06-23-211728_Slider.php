<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Slider extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],

            'img' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],

            'subtitle' => [
                'type'=> 'VARCHAR',
                'constraint'=> 150
            ],

          'created_at datetime default current_timestamp',
          'updated_at datetime default current_timestamp on update current_timestamp', 

        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('slider');

    }

    public function down()
    {
        $this->forge->dropTable('slider');
    }
}
