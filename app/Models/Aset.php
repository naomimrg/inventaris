<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\Lokasi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kode_aset',
        'golongan',
        'bidang',
        'kelompok',
        'sub_kelompok',
        'sub_sub_kelompok',
        'nomor_register',
        'tanggal_pembelian',
        'kategori',
        'lokasi',
        'kampuses',
        'harga',
        'merk',
        'luas',
        'status_kepemilikan',
        'kondisi',
        'deskripsi',
        'user_id',
        'kategoris_id',
        'lokasis_id',
        'kampuses_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }

    public function lokasis()
    {
        return $this->belongsTo(Lokasi::class, 'lokasis_id');
    }

    public function kampuses()
    {
        return $this->belongsTo(Kampus::class, 'kampuses_id');
    }
}
