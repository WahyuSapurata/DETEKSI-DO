<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class KeteranganPindahDomisili extends Model
{
    use HasFactory;

    protected $table = 'keterangan_pindah_domisilis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'nomor_surat',
        'no_kk',
        'kepala_keluarga',
        'alamat',
        'pekerjaan',
        'alamat_pindah',
        'klarifikasi_pindah',
        'rencana_pindah',
        'keluarga_pindah',
        'no_telepon',
        'deskripsi',
        'foto_kk',
        'status',
        'data_pindah',
    ];

    // Jika kolom yang diharapkan menyimpan array, tambahkan di sini:
    protected $casts = [
        'data_pindah' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        // Event listener untuk membuat UUID sebelum menyimpan
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
}
