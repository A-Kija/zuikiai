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
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            // person name column
            $table->string('name');
            // person age column
            $table->unsignedTinyInteger('age');
            // person social column one of: 'fb', 'tt', 'ig'
            $table->enum('social', ['fb', 'tt', 'ig']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};
