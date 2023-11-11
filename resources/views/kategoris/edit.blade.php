@extends('layouts.app')
@section('title', 'Edit Data Kategori')
@section('contents')
    <hr />
    <form action="{{ route('kategoris.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Kategori</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lokasi" value="{{ $kategori->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" >{{ $kategori->deskripsi }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
