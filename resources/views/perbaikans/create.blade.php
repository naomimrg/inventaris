@extends('layouts.app')
@section('title', 'Tambah Perbaikan Aset')
@section('contents')
    <hr />
    <form action="{{ route('perbaikans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="col">
                <label for="nama" class="form-label">Nama Aset</label>
                <input type="string" name="nama" class="form-control" placeholder="Nama Aset">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="kode_aset" class="form-label">Kode Aset</label>
                <input type="string" name="kode_aset" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="tanggal_permintaan_perbaikan" class="form-label">Tanggal Permintaan Perbaikan</label>
                <input type="date" name="tanggal_permintaan_perbaikan" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="status" class="form-label">Status</label>
                <input type="string" name="status" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="user" class="form-label">Nama</label>
                <input type="string" name="user" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
