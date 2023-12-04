@extends('layouts.app')
@section('title', 'Detail Peminjaman Aset')
@section('contents')
    <hr />
    <div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="" value="{{ $peminjaman->asets->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" placeholder="" value="{{ $peminjaman->asets->kode_aset }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" placeholder="" value="{{ $peminjaman->asets->kategoris->nama_kategori }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi Fisik Aset</label>
            <input type="text" name="nama_lokasi" class="form-control" placeholder="" value="{{ $peminjaman->asets->lokasis->nama_lokasi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Peminjaman</label>
            <input type="date" name="tanggal_peminjaman" class="form-control" placeholder="" value="{{ $peminjaman->tanggal_peminjaman }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Pengembalian</label>
            <input type="date" name="tanggal_pengembalian" class="form-control" placeholder="" value="{{ $peminjaman->tanggal_pengembalian }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Keterangan</label>
            <textarea class="form-control" name="keterangan" placeholder="" readonly>{{ $peminjaman->keterangan }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Dibuat Pada</label>
            <input type="text" name="created_at" class="form-control" placeholder="" value="{{ $peminjaman->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diperbarui Pada</label>
            <input type="text" name="updated_at" class="form-control" placeholder="" value="{{ $peminjaman->updated_at }}" readonly>
        </div>
    </div>
@endsection
