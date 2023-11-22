@extends('layouts.app')
@section('title', 'Edit Data Peminjaman Aset')
@section('contents')
    <hr />
    <form action="{{ route('peminjamans.edit', $peminjamen->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="col mb-3">
                <label class="form-label">Nama Aset</label>
                <input type="text" name="nama" class="form-control" placeholder="" 
                    value="{{ $peminjamen->asets->nama }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Kode Aset</label>
                <input type="text" name="kode_aset" class="form-control" placeholder=""
                    value="{{ $peminjamen->kode_aset }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Tanggal Peminjaman</label>
                <input type="date" name="tanggal_peminjaman" class="form-control" placeholder=""
                    value="{{ $peminjamen->tanggal_peminjaman }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Tanggal Pengembalian</label>
                <input type="date" name="tanggal_pengembalian" class="form-control" placeholder=""
                    value="{{ $peminjamen->tanggal_pengembalian }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" placeholder="">{{ $peminjamen->keterangan }}</textarea>
            </div>
            <div class="row justify-content-end">
                <div class="col-auto">
                    <button type="update" class="btn btn-warning">Update</button>
                </div>
            </div>
    </form>
@endsection
