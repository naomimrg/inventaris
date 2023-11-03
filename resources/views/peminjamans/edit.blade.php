@extends('layouts.app')
@section('title', 'Edit Data Peminjaman Aset')
@section('contents')
    <hr />
    <form action="{{ route('peminjamans.edit', $peminjamen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                < <label class="form-label">Nama Aset</label>
                <input type="text" name="title" class="form-control" placeholder="Title" 
                    value="{{ $peminjamen->nama }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Kode Aset</label>
                <input type="text" name="title" class="form-control" placeholder="Title"
                    value="{{ $peminjamen->kode_aset }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Tanggal Peminjaman</label>
                <input type="date" name="title" class="form-control" placeholder="Title"
                    value="{{ $peminjamen->tanggal_peminjaman }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Tanggal Pengembalian</label>
                <input type="date" name="title" class="form-control" placeholder="Title"
                    value="{{ $peminjamen->tanggal_pengembalian }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" placeholder="Deskripsi">{{ $peminjamen->keterangan }}</textarea>
            </div>
            <div class="row">
                <div class="d-grid">
                    <button class="btn btn-warning">Update</button>
                </div>
            </div>
    </form>
@endsection
