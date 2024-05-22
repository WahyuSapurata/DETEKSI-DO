<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class KeteranganWali extends Model
{
    use HasFactory;

    protected $table = 'keterangan_walis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'nomor_surat',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'nik',
        'jenis_kelamin',
        'pekerjaan',
        'agama',
        'alamat',
        'rt',
        'rw',
        'nama_anak',
        'tempat_lahir_anak',
        'tanggal_lahir_anak',
        'nama_bank',
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
