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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('occupation')->nullable();
            $table->string('degree')->nullable();
            $table->date('db')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('language')->nullable();
            $table->string('freelance')->nullable();
            $table->text('description')->nullable();
            $table->string('cv')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('image', 2048)->nullable();
            $table->string('services_image', 2048)->nullable();
            $table->text('skill_title')->nullable();
            $table->text('skill_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
    public $timestamps = false;
};
