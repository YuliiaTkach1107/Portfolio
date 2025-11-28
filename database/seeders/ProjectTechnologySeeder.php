<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use App\Models\Project;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Находим проекты
        $planify = Project::where('slug', 'planify')->first();
        $portfolio = Project::where('slug', 'portfolio_personnel')->first();
        $designSystem = Project::where('slug', 'design_system')->first();

        // Находим технологии
        $vue = Technology::where('name', 'Vue.js')->first();
        $laravel = Technology::where('name', 'Laravel')->first();
        $php = Technology::where('name', 'PHP')->first();

        // Проверка, что все объекты существуют
        if (!$planify || !$portfolio || !$designSystem || !$vue || !$laravel || !$php) {
            dd("Проект или технология не найдены");
        }

        // Привязка технологий к проектам
        $planify->technologies()->syncWithoutDetaching([$vue->id, $laravel->id, $php->id]);
        $portfolio->technologies()->syncWithoutDetaching([$vue->id, $laravel->id, $php->id]);
        $designSystem->technologies()->syncWithoutDetaching([$php->id, $laravel->id]);
    }
}
