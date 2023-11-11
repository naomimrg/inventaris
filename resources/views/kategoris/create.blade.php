@extends('layouts.app')
@section('title', 'Tambah Kategori Aset')
@section('contents')
    <hr />
    <form action="{{ route('kategoris.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="col">
                <label for="nama" class="form-label">Nama</label>
                <input type="string" name="nama" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder=""></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
