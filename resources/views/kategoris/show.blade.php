@extends('layouts.app')
@section('title', 'Detail Kategori Aset')
@section('contents')
    <hr />
    <div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Kategori" value="{{ $kategori->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" readonly>{{ $kategori->deskripsi }}</textarea>
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
