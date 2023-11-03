<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kode_aset',
        'tanggal_permintaan_perbaikan',
        'deskripsi',
        'status',
        'user_id',
        'asset_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function asset()
    {
        return $this->belongsTo(Aset::class, 'asset_id');
    }
}
