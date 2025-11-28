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
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('category', ['Backend','Frontend','BDD','DevOps','Design'])->default('Frontend');
            $table->enum('level', ['Débutant','Intermédiaire','Avancé','Expert'])->default('Débutant');
            $table->string('logo')->nullable();
            $table->string('color')->nullable();
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technologies');
    }
};
