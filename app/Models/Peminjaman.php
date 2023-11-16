<?php

namespace App\Models;

use App\Models\Aset;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_peminjam',
        'nama',
        'kode_aset',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'keterangan',
        'asets_id',
    ];

    public function asets()
    {
        return $this->belongsTo(Aset::class, 'asets_id');
    }
}
