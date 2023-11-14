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
        'nama',
        'kode_aset',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'keterangan',
        'users_id',
        'asets_id',
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
