@extends('layouts.app')
@section('title', 'Tambah Data Lokasi Aset')
@section('contents')
    <hr />
    <form action="{{ route('lokasis.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_lokasi" class="form-label">Nama Lokasi</label>
            <input type="string" name="nama_lokasi" class="form-control" id="nama_lokasi" placeholder="Nama Lokasi">
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
