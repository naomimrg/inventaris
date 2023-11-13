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
        'aset_id',
        'kode_aset',
        'kategoris_id',
        'lokasis_id',
        'tanggal',
        'jenis_perubahan',
        'deskripsi',
        'user_id',
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
    
    // Definisikan relasi dengan model Aset
    public function aset()
    {
        return $this->belongsTo(Aset::class, 'asets_id', 'id');
    }

    // Definisikan relasi dengan model Kategori
    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'kategoris_id', 'id');
    }

    // Definisikan relasi dengan model Lokasi
    public function lokasis()
    {
        return $this->belongsTo(Lokasi::class, 'lokasis_id', 'id');
    }

    // Definisikan relasi dengan model User
    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}

