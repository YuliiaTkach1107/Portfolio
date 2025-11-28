<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('technologies')->insert([
            [
                'name' => 'Vue.js',
                'category' => 'Frontend',
                'level' => 'Débutant',
                'logo' => '/images/homepage/vuedotjs.svg',
                'color' => 'rgba(255,0,150,0.4)',
                'display_order' => 1,
            ],
            
            [
                'name' => 'Laravel',
                'category' => 'Backend',
                'level' => 'Débutant',
                'logo' => '/images/homepage/laravel.svg',
                'color' => 'rgba(0,200,255,0.3)',
                'display_order' => 2,
            ],
            [
                'name' => 'PHP',
                'category' => 'Backend',
                'level' => 'Intermédiaire',
                'logo' => '/images/homepage/php.svg',
                'color' => 'rgba(150,0,255,0.2)',
                'display_order' => 3,
            ],
            
        ]);
}
}