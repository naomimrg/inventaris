@extends('layouts.app')
@section('title', 'Edit Aset')
@section('contents')
    <h1 class="mb-0">Edit Aset</h1>
    <hr />
    <form action="{{ route('asets.update', $aset->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="string" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="kode_aset" class="form-control" placeholder="Kode Aset">
            </div>
            <div class="col">
                <input type="date" name="tanggal_pembelian" class="form-control" placeholder="Tanggal Pembelian">
            </div>
            <div class="col">
                <input type="text" name="kategori_id" class="form-control" placeholder="Kategori">
            </div>
            <div class="col">
                <input type="text" name="lokasi_id" class="form-control" placeholder="Lokasi">
            </div>
            <div class="col">
                <input type="number" name="harga" class="form-control" placeholder="Harga">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Deskripsi"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
