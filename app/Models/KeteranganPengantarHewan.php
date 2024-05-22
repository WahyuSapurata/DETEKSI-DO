<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class KeteranganPengantarHewan extends Model
{
    use HasFactory;

    protected $table = 'keterangan_pengantar_hewans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'nomor_surat',
        'nama',
        'umur',
        'pekerjaan',
        'alamat',
        'jumlah_hewan',
        'data_hewan',
        'nama_pembeli',
        'umur_pembeli',
        'pekerjaan_pembeli',
        'alamat_pembeli',
        'foto_ktp',
        'status',
        'no_telepon',
    ];

    // Jika kolom yang diharapkan menyimpan array, tambahkan di sini:
    protected $casts = [
        'data_hewan' => 'array',
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
