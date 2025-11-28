<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Models\Technology;
use App\Models\Experience;
use App\Models\Formation;
use App\Models\Valeur;
use App\Models\Project;


Route::get('/', function () {
    return Inertia::render('Home'); // Название Vue-компонента
});
Route::get('/about', function () {
    $technologies = Technology::all();
    $experiences = Experience::all();
    $formations = Formation::all();
    $valeurs = Valeur::all();

    return Inertia::render('About',[
        'technologies'=>$technologies,
        'experiences' => $experiences,
        'formations'=>$formations,
        'valeurs'=>$valeurs,
    ]); // Название Vue-компонента
});
Route::get('/projects', function () {
    $projects = Project::all();
    return Inertia::render('Projects',[
        'projects'=>$projects,
    ]); // Название Vue-компонента
});

Route::get('dashboard', function () {
    return view('dashboard'); // resources/views/dashboard.blade.php
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/settings.php';


/*
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';*/
?>