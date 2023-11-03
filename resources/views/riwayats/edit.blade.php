@extends('layouts.app')
@section('title', 'Edit Data Riwayat Aset')
@section('contents')
    <hr />
    <form action="{{ route('riwayats.edit', $riwayat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Aset</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $riwayat->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Kode Aset</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $riwayat->kode_aset }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $riwayat->kategori_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Lokasi</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $riwayat->lokasi_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Tanggal</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $riwayat->tanggal }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Jenis Perubahan</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $riwayat->jenis_perubahan }}" >
            </div>
             <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="description" placeholder="Deskripsi" >{{ $riwayat->deskripsi }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Pengguna</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $riwayat->user_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Status</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $riwayat->status }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Catatan Tambahan</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $riwayat->catatan_tambahan }}" >
            </div>
           
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
