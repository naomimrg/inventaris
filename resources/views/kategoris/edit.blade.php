@extends('layouts.app')
@section('title', 'Edit Data Kategori')
@section('contents')
    <hr />
    <form action="{{ route('kategoris.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="col mb-3">
                <label class="form-label">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" placeholder="" value="{{ $kategori->nama_kategori }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder="" >{{ $kategori->deskripsi }}</textarea>
            </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="update" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
