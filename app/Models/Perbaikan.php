<?php

namespace App\Models;

use App\Models\Aset;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    use HasFactory;

    protected $fillable = [
        'asets_id',
        'tanggal_permintaan_perbaikan',
        'deskripsi',
        'status',
        'nama_pelapor',
        'informasi',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function asets()
    {
        return $this->belongsTo(Aset::class, 'asets_id');
    }
}
