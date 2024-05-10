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
        Schema::create('postal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('zip')->nulalble();
            $table->string('state')->nulalble();
            $table->string('county_id')->nulalble();
            $table->string('city')->nulalble();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postal_infos');
    }
};
