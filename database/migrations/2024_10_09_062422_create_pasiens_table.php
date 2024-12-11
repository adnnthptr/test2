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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pasien', 10); // Batasi panjang sesuai kebutuhan
            $table->string('nama_pasien', 30);           // Sesuaikan panjang kolom
            $table->string('jenis_kelamin', 20);
            $table->string('status', 30);
            $table->string('alamat', 20);                // Sesuaikan panjang kolom
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
