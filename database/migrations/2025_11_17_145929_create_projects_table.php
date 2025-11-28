<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('short_description')->nullable();
            $table->text('detailed_description')->nullable();
            $table->enum('type', ['Site web', 'App mobile', 'API', 'Design', 'Autre'])->default('Site web');
            $table->enum('status', ['Brouillon', 'Publié', 'Archivé'])->default('Brouillon');
            $table->date('date_realisation')->nullable();
            $table->string('client')->nullable();
            $table->enum('context', ['Scolaire','Stage','Freelance','Personnel'])->default('Personnel');
            $table->string('duration')->nullable();
            $table->string('role')->nullable();
            $table->string('project_link')->nullable();
            $table->string('github_link')->nullable();
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
