<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
   DB::table('experiences')->insert([
    [
        'poste'=>'Vendeuse',
        'entreprise'=>'Zara',
        'lieu'=>'Louvain-la-Neuve',
        'date_debut'=> '2024',
        'date_fin' => '2024',
        'description' => "Accueil des clients, mise en rayon",
        'type'=>'CDD',
        'competence'=>'Communication|Service client'
    ]
]);

    }
}
