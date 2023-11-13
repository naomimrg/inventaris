<?php

namespace App\Models;

use App\Models\Aset;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lokasi',
        'deskripsi',
    ];

    public function aset()
    {
        return $this->hasMany(Aset::class);
    }
}
