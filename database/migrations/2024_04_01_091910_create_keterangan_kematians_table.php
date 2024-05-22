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
        Schema::create('keterangan_kematians', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('nomor_surat')->nullable();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('status_perkawinan');
            $table->string('kewarganegaran');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('hari_meninggal');
            $table->string('tanggal_meninggal');
            $table->string('jam_meninggal');
            $table->string('tempat_pemakaman');
            $table->string('no_telepon');
            $table->string('foto_ktp');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keterangan_kematians');
    }
};
