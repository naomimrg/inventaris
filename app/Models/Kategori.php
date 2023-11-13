<?php

namespace App\Models;

use App\Models\Aset;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function aset()
    {
        return $this->hasMany(Aset::class);
    }
}
