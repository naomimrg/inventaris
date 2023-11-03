@extends('layouts.app')
@section('title', 'Detail Peminjaman Aset')
@section('contents')
    <hr />
    <div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Aset" value="{{ $peminjamen->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <<label class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" placeholder="Kode Aset" value="{{ $peminjamen->kode_aset }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Peminjaman</label>
            <input type="date" name="tanggal_peminjaman" class="form-control" placeholder="Tanggal Peminjaman" value="{{ $peminjamen->tanggal_peminjaman }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Pengembalian</label>
            <input type="date" name="tanggal_pengembalian" class="form-control" placeholder="Tanggal Pengembalian" value="{{ $peminjamen->tanggal_pengembalian }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Keterangan</label>
            <textarea class="form-control" name="keterangan" placeholder="Keterangan" readonly>{{ $kategori->keterangan }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $kategori->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $kategori->updated_at }}" readonly>
        </div>
    </div>
@endsection
