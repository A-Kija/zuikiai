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
        // color rate 1-10 author
        
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('color', 7);
            $table->unsignedTinyInteger('rate')->default(1);
            $table->string('author', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colors');
    }
};
