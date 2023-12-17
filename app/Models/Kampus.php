<?php

namespace App\Models;
use App\Models\Aset;
use App\Models\Lokasi;
use App\Models\Peminjaman;
use App\Models\Perbaikan;
use App\Models\Riwayat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function asets()
    {
        return $this->hasMany(Aset::class, 'kampuses_id');
    }

    public function lokasis()
    {
        return $this->hasMany(Lokasi::class, 'kampuses_id');
    }

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'kampuses_id');
    }

    public function perbaikans()
    {
        return $this->hasMany(Perbaikan::class, 'kampuses_id');
    }

    public function riwayats()
    {
        return $this->hasMany(Riwayat::class, 'kampuses_id');
    }

    public function kerusakans()
    {
        return $this->hasMany(Kerusakan::class, 'kerusakans_id');
    }
}
