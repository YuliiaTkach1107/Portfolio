<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
        ExperienceTableSeeder::class,
        FormationTableSeeder::class,
        TechnologiesTableSeeder::class,
        ValeursTableSeeder::class,
        ProjectSeeder::class,
        ProjectTechnologySeeder::class,
        ]);

        /*User::factory()->withoutTwoFactor()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
