@extends('layouts.app')
@section('title', 'Tambah Kategori Aset')
@section('contents')
    <hr />
    <form action="{{ route('kategoris.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="col">
                <input type="string" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
