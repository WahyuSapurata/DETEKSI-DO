<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class KeteranganHilang extends Model
{
    use HasFactory;

    protected $table = 'keterangan_hilangs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'nomor_surat',
        'nama',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'status_perkawinan',
        'pekerjaan',
        'agama',
        'kewarganegaraan',
        'alamat',
        'nama_barang',
        'tanggal_hilang',
        'tempat_hilang',
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
