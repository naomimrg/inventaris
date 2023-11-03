@extends('layouts.app')
@section('title', 'Edit Data Kategori Aset')
@section('contents')
    <hr />
    <form action="{{ route('kategoris.edit', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Kategori</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $kategori->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="description" placeholder="Deskripsi" >{{ $kategori->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
