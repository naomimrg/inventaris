<?php

namespace App\Models;

use App\Models\Aset;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    use HasFactory;

    protected $table = 'riwayats';

    protected $fillable = [
        'asets_id',
        'tanggal',
        'jenis_perubahan',
        'deskripsi',
        'status',
        'catatan_tambahan',
    ];

    protected $enumColumns = ['jenis_perubahan', 'status'];

    public function getJenisPerubahanAttribute($value)
    {
        return ucfirst($value);
    }

    public function getStatusAttribute($value)
    {
        return ucfirst($value);
    }

    public function setJenisPerubahanAttribute($value)
    {
        $this->attributes['jenis_perubahan'] = strtolower($value);
    }

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = strtolower($value);
    }
    
    public function asets()
    {
        return $this->belongsTo(Aset::class, 'asets_id');
    }

    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }

    public function lokasis()
    {
        return $this->belongsTo(Lokasi::class, 'lokasis_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
