@extends('layouts.app')
@section('title', 'Edit Data Peminjaman Aset')
@section('contents')
    <hr />
    <form action="{{ route('peminjaman_staf.edit', $peminjaman->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col mb-3">
            <label class="form-label">Nama Peminjam</label>
            <input type="text" name="nama_peminjam" class="form-control" placeholder="" value="{{ $peminjaman->nama_peminjam }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Aset</label>
            <input type="text" name="nama" class="form-control" placeholder="" value="{{ $peminjaman->nama }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" placeholder="" value="{{ $peminjaman->kode_aset }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Peminjaman</label>
            <input type="text" name="tanggal_peminjaman" class="form-control" placeholder="" value="{{ $peminjaman->tanggal_peminjaman }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Pengembalian</label>
            <input type="text" name="tanggal_pengembalian" class="form-control" placeholder="" value="{{ $peminjaman->tanggal_pengembalian }}">
        </div>
        
        <div class="col mb-3">
            <label class="form-label">Keterangan</label>
            <textarea class="form-control" name="keterangan" placeholder="">{{ $peminjaman->keterangan }}</textarea>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="update" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
