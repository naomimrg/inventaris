@extends('layouts.app')
@section('title', 'Tambah Kategori Aset')
@section('contents')
    <hr />
    <form action="{{ route('riwayats.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="col">
                <input type="string" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="string" name="kode_aset" class="form-control" placeholder="Kode Aset">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="string" name="kategori_id" class="form-control" placeholder="Kategori">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="string" name="lokasi_id" class="form-control" placeholder="Lokasi">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <select name="jenis_perubahan" class="form-control">
                    <option value="Pembelian">Pembelian</option>
                    <option value="Pemindahtanganan">Pemindahtanganan</option>
                    <option value="Perbaikan">Perbaikan</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="string" name="deskripsi" class="form-control" placeholder="Deskripsi">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="string" name="user_id" class="form-control" placeholder="Pengguna">
            </div>
        </div>
        <div class="mb-3">
            <div class="col" placeholder="Status">
                <select name="status" class="form-control">
                    <option value="Baik">Baik</option>
                    <option value="Rusak">Rusak</option>
                    <option value="Hilang">Hilang</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <textarea class="form-control" name="catatan_tambahan" placeholder="Catatan Tambahan"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
