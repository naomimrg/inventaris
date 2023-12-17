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
        'kampuses_id',
        'deskripsi',
    ];

    public function asets()
    {
        return $this->hasMany(Aset::class,'lokasis_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function kampuses()
    {
        return $this->belongsTo(Kampus::class, 'kampuses_id');
    }
}
