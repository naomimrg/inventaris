<?php

namespace App\Models;

use App\Models\Aset;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelapor',
        'asets_id',
        'tanggal_laporan',
        'lokasis_id',
        'deskripsi_kerusakan',
        'status',
    ];

    public function asets()
    {
        return $this->belongsTo(Aset::class, 'asets_id');
    }

    public function lokasis()
    {
        return $this->belongsTo(Lokasi::class, 'lokasis_id');
    }
}
 