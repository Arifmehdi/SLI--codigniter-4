<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FounderSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'photo' => 'rs.jpg',
            'name' => 'RAHUL SIMIC',
            'designation' => '6+ Years of excellence in',
            'details' => 'Initially Started work as a trucker 6 years back and now registered own company. Simic Logitics Inc provide state wise services. Providing Best services To Its Clients & Co-Operate Wih Everyone.',
        ];

        
        $this->db->table('founders')->insert($data);
    }
}
