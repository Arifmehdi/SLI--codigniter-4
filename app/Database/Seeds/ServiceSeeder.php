<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'photo' => 'R.jpg',
            'logo' => 'loading.png',
            'title' => 'LOADING SERVICES',
            'details' => 'We provide dry van and reefer load services.there\'s ease for truckrs always .',
        ];

        
        $this->db->table('services')->insert($data);
    }
}
