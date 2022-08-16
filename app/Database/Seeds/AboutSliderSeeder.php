<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AboutSliderSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'img' => 'R.jpg',
            'title' => 'performance',
            
        ];

        
        $this->db->table('about_slider')->insert($data);
    }
}
