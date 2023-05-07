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
        Schema::create('geodatas', function (Blueprint $table) {
            $table->id();
        
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('productCategory')->nullable();
            $table->string('location')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('geodatas');
    }
};
