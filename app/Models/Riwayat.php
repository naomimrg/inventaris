<?php

namespace App\Models;

use App\Models\Aset;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    use HasFactory;

    protected $table = 'riwayat';

    protected $fillable = [
        'asets_id',
        'kode_aset',
        'kategoris_id',
        'lokasis_id',
        'tanggal',
        'jenis_perubahan',
        'deskripsi',
        'status',
        'catatan_tambahan',
    ];

    // Daftar nilai yang diperbolehkan untuk kolom 'jenis_perubahan' dan 'status'.
    protected $enumColumns = ['jenis_perubahan', 'status'];

    // Getter untuk mengambil nilai 'jenis_perubahan' dalam huruf kapital.
    public function getJenisPerubahanAttribute($value)
    {
        return ucfirst($value);
    }

    // Getter untuk mengambil nilai 'status' dalam huruf kapital.
    public function getStatusAttribute($value)
    {
        return ucfirst($value);
    }

    // Setter untuk menyimpan nilai 'jenis_perubahan' dalam huruf kecil.
    public function setJenisPerubahanAttribute($value)
    {
        $this->attributes['jenis_perubahan'] = strtolower($value);
    }

    // Setter untuk menyimpan nilai 'status' dalam huruf kecil.
    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = strtolower($value);
    }
    
    public function asets()
    {
        return $this->belongsTo(Aset::class, 'asets_id');
    }

    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }

    public function lokasis()
    {
        return $this->belongsTo(Lokasi::class, 'lokasis_id');
    }
}
