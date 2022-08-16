<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'img' => 'bg-1.jpg',
            'title' => 'Trucking Transportataion',
            'subtitle' => '6+ Years of excellence in',
        ];

        [
            'img' => 'bg-6.jpg',
            'title' => 'We believe sustainability',
            'subtitle' => 'We Deal With Clients\'s Requirements.'
        ];

        [
            'img' => 'bg-8.jpg',
            'title' => 'We Haul, You call',
            'subtitle' => 'In World Of Excellence.'
        ];
        $this->db->table('slider')->insert($data);
    }
}
