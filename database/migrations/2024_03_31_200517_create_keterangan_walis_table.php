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
        Schema::create('keterangan_walis', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('nomor_surat')->nullable();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('nama_anak');
            $table->string('tempat_lahir_anak');
            $table->string('tanggal_lahir_anak');
            $table->string('nama_bank');
            $table->string('no_telepon');
            $table->string('foto_ktp');
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keterangan_walis');
    }
};
