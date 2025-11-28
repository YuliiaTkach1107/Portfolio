<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('projects')->insert([
         [
            'title'=>'Planify',
            'slug'=>'planify',
            'short_description'=>'Gestion de planning et automatisation des tâches',
            'detailed_description'=>"Ce projet a été développé dans le but de faciliter l'organisation des petites et moyennes équipes. Il inclut un système de gestion des tâches, des notifications, des rôles utilisateurs et un tableau de bord dynamique.",
            'type'=>'App mobile',
            'status'=>'Publié',
            'date_realisation'=>'2023-05-20',
            'client'=>'Personnel',
            'context'=>'Personnel',
            'duration'=>'3 semaine',
            'role'=>'',
            'project_link' => 'https://portfolio.com',
            'github_link' => 'https://github.com/username/portfolio-uiux',
            'display_order' => 1,
         ],

         [
            'title'=>'Portfolio Personnel',
            'slug'=>'portfolio_personnel',
            'short_description'=>'Site portfolio moderne présentant mes compétences et réalisations professionnelles.',
            'detailed_description'=>"Portfolio personnel développé pour présenter mon parcours, mes compétences techniques et mes projets. Le site est entièrement responsive et optimisé pour les performances. Il utilise Vue.js 3 avec la Composition API, Laravel pour le backend et Tailwind CSS pour le design.",
            'type'=>'Site web',
            'status'=>'Publié',
            'date_realisation'=>'2025-11-27',
            'client'=>'Personnel',
            'context'=>'Personnel',
            'duration'=>'2 semaine',
            'role'=>'',
            'project_link' => 'https://portfolio.com',
            'github_link' => 'https://github.com/username/portfolio-uiux',
            'display_order' => 2,
         ],
         
         [
            'title'=>'Design System',
            'slug'=>'design_system',
            'short_description'=>'Bibliothèque de composants UI réutilisables.',
            'detailed_description'=>"Création d'un design system complet avec documentation interactive. Composants accessibles, personnalisables et optimisés pour la performance. Inclut des exemples d'utilisation et des guidelines de design.",
            'type'=>'Design',
            'status'=>'Publié',
            'date_realisation'=>'2024-10-27',
            'client'=>'Personnel',
            'context'=>'Personnel',
            'duration'=>'4 semaine',
            'role'=>'',
            'project_link' => 'https://portfolio.com',
            'github_link' => 'https://github.com/username/portfolio-uiux',
            'display_order' => 3,
         ],

         ]);
    }
}
