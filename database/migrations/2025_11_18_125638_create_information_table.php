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
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('titre');
            $table->text('bio')->nullable(); // WYSIWYG
            $table->string('photo')->nullable();
            $table->string('email');
            $table->string('telephone')->nullable();
            $table->string('localisation')->nullable();
            $table->boolean('disponibilite')->default(true);
            $table->string('cv')->nullable(); // PDF
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('twitter')->nullable();
            $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
