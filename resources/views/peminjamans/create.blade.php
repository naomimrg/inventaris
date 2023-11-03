@extends('layouts.app')
@section('title', 'Tambah Peminjaman Aset')
@section('contents')
<form action="{{ route('peminjamans.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <div class="col">
            <input type="string" name="nama" class="form-control" placeholder="Nama">
        </div>
    </div>
    <div class="mb-3">
        <div class="col">
            <input type="string" name="kode_aset" class="form-control" placeholder="Kode Aset">
        </div>
    </div>
    <div class="mb-3">
        <div class="col">
            <input type="date" name="tanggal_peminjaman" class="form-control" placeholder="Tanggal Peminjaman">
        </div>
    </div>
    <div class="mb-3">
        <div class="col">
            <input type="date" name="tanggal_pengembalian" class="form-control" placeholder="Tanggal Pengembalian">
        </div>
    </div>
    <div class="mb-3">
        <div class="col">
            <textarea class="form-control" name="keterangan" placeholder="Keterangan"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
