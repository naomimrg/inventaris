@extends('layouts.app')
@section('title', 'Tambah Data Aset')
@section('contents')
    <hr />
    <form action="{{ route('asets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="string" name="nama" class="form-control" id="nama" placeholder="Nama">
        </div>
        <div class="mb-3">
            <label for="kode_aset" class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" id="kode_aset" placeholder="Kode Aset">
        </div>
        <div class="mb-3">
            <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian</label>
            <input type="date" name="tanggal_pembelian" class="form-control" id="tanggal_pembelian" placeholder="Tanggal Pembelian">
        </div>
        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            <input type="text" name="kategori_id" class="form-control" id="kategori_id" placeholder="Kategori">
        </div>
        <div class="mb-3">
            <label for="lokasi_id" class="form-label">Lokasi</label>
            <input type="text" name="lokasi_id" class="form-control" id="lokasi_id" placeholder="Lokasi">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi"></textarea>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
