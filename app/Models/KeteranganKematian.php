<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class KeteranganKematian extends Model
{
    use HasFactory;

    protected $table = 'keterangan_kematians';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'nomor_surat',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'status_perkawinan',
        'kewarganegaran',
        'agama',
        'pekerjaan',
        'alamat',
        'hari_meninggal',
        'tanggal_meninggal',
        'jam_meninggal',
        'tempat_pemakaman',
        'status',
        'no_telepon',
        'foto_ktp',
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
