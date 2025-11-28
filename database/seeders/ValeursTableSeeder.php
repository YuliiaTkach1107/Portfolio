<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValeursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('valeurs')->insert([
           'title'=>'Précision',
           'description'=>'Attention aux détails pour un code propre et des interfaces soignées',
        ]);
    }
}
