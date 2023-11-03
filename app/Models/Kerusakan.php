<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'asets_id',
        'tanggal_laporan',
        'lokasi_kerusakan',
        'deskripsi_kerusakan',
        'status',
    ];

    public function asset()
    {
        return $this->belongsTo(Aset::class);
    }
}
