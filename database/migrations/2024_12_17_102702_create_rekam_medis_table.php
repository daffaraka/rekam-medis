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
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id();
            $table->string('keluhan');
            $table->string('diagnosis');
            $table->date('tanggal_tindakan')->nullable();
            $table->enum('status', ['Sehat', 'Dalam perawatan']);
            $table->foreignId('penghuni_id')->constrained('penghunis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};
