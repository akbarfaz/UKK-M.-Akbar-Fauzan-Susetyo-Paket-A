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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('id_pengaduan')->nullable();
            $table->date('tgl_pengaduan')->nullable();
            $table->string('nik')->nullable();
            $table->string('nama')->nullable();
            $table->string('isi_laporan')->nullable();
            $table->string('foto')->nullable();
            $table->enum('status', ['0', 'proses', 'selesai'])->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};