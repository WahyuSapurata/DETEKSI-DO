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
        Schema::create('keterangan_jual_belis', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('nama_penjual');
            $table->string('nik_penjual');
            $table->string('tempat_lahir_penjual');
            $table->string('tanggal_lahir_penjual');
            $table->string('pekerjaan_penjual');
            $table->string('alamat_penjual');
            $table->string('nama_pembeli');
            $table->string('nik_pembeli');
            $table->string('tempat_lahir_pembeli');
            $table->string('tanggal_lahir_pembeli');
            $table->string('pekerjaan_pembeli');
            $table->string('alamat_pembeli');
            $table->string('no_sppt');
            $table->string('nama_pemilik_tanah');
            $table->string('no_sertifikat');
            $table->string('luas_tanah');
            $table->string('harga_tanah');
            $table->string('lokasi_tanah');
            $table->string('batas_utara');
            $table->string('batas_timur');
            $table->string('batas_selatan');
            $table->string('batas_barat');
            $table->string('saksi1');
            $table->string('saksi2');
            $table->string('saksi3');
            $table->string('foto_ktp');
            $table->string('no_telepon');
            $table->string('status');
            $table->string('no_reg')->nullable();
            $table->string('nomor_surat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keterangan_jual_belis');
    }
};
