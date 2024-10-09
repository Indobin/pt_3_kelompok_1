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
        Schema::create('karbons', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->string('metode_pembuangan');
            $table->float('faktor_emisi'); // Faktor emisi (kg CO2 per kg sampah)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karbon');
    }
};
