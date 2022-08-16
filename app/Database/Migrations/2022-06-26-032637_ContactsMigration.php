<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ContactsMigration extends Migration
{
    public function up()
    {
       $this->forge->addField([
        'id' => [
            'type' => 'INT',
            'auto_increment' => true
        ],

        'about_us' => [
            'type' => 'VARCHAR',
            'constraint' => 255
        ],

        'email' => [
            'type' => 'VARCHAR',
            'constraint' => 150
        ],

        'phone' => [
            'type' => 'VARCHAR',
            'constraint' => 15
        ],

        'address' => [
            'type' => 'VARCHAR',
            'constraint' => 200
        ],

        'map' => [
            'type'=> 'VARCHAR',
            'constraint'=> 255
        ],

      'created_at datetime default current_timestamp',
      'updated_at datetime default current_timestamp on update current_timestamp', 
       ]);
       $this->forge->addPrimaryKey('id');
       $this->forge->createTable('contacts');
    }

    public function down()
    {
        $this->forge->dropTable('contacts');
    }
}
