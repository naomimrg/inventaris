<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\Lokasi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 
        'kode_aset', 
        'tanggal_pembelian',
        'kategori', 
        'lokasi', 
        'harga', 
        'deskripsi',  
        'user_id', 
        'kategori_id', 
        'lokasi_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }

    public function lokasis()
    {
        return $this->belongsTo(Lokasi::class, 'lokasis_id');
    }
}
