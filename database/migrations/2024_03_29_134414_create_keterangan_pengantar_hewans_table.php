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
        Schema::create('keterangan_pengantar_hewans', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('nomor_surat')->nullable();
            $table->string('nama');
            $table->string('umur');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('jumlah_hewan');
            $table->json('data_hewan');
            $table->string('nama_pembeli');
            $table->string('umur_pembeli');
            $table->string('pekerjaan_pembeli');
            $table->string('alamat_pembeli');
            $table->string('foto_ktp');
            $table->string('status');
            $table->string('no_telepon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keterangan_pengantar_hewans');
    }
};
