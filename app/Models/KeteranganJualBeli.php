<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class KeteranganJualBeli extends Model
{
    use HasFactory;

    protected $table = 'keterangan_jual_belis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'nomor_surat',
        'no_reg',
        'nama_penjual',
        'nik_penjual',
        'tempat_lahir_penjual',
        'tanggal_lahir_penjual',
        'pekerjaan_penjual',
        'alamat_penjual',
        'nama_pembeli',
        'nik_pembeli',
        'tempat_lahir_pembeli',
        'tanggal_lahir_pembeli',
        'pekerjaan_pembeli',
        'alamat_pembeli',
        'no_sppt',
        'nama_pemilik_tanah',
        'no_sertifikat',
        'luas_tanah',
        'harga_tanah',
        'lokasi_tanah',
        'batas_utara',
        'batas_timur',
        'batas_selatan',
        'batas_barat',
        'saksi1',
        'saksi2',
        'saksi3',
        'foto_ktp',
        'no_telepon',
        'status',
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
