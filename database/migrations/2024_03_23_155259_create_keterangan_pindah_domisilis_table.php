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
        Schema::create('keterangan_pindah_domisilis', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('nomor_surat')->nullable();
            $table->string('no_kk');
            $table->string('kepala_keluarga');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('alamat_pindah');
            $table->string('klarifikasi_pindah');
            $table->string('rencana_pindah');
            $table->string('keluarga_pindah');
            $table->string('no_telepon');
            $table->text('deskripsi');
            $table->string('foto_kk');
            $table->string('status');
            $table->json('data_pindah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keterangan_pindah_domisilis');
    }
};
