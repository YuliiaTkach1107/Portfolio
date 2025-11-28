<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formations')->insert([
    [
        'diplome'=>'Éducation générale',
        'etablissement'=>'École nationale de Kharkiv numéro 145',
        'lieu'=>'Ukraine',
        'date_debut' => '2011',
        'date_fin' => "2022",
        'description'=>'Formation académique complète',
       
    ]
]);
    }
}
