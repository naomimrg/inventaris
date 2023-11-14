@extends('layouts.app')
@section('title', 'Edit Data Riwayat Aset')
@section('contents')
    <hr />
    <form action="{{ route('riwayats.edit', $riwayats->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col mb-3">
            <label class="form-label">Nama Aset</label>
            <input type="text" name="nama" class="form-control" placeholder="" value="{{ $riwayats->nama }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" placeholder="" value="{{ $riwayats->kode_aset }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategoris" class="form-control" placeholder=""
                value="{{ $riwayats->kategoris->nama_kategori }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi</label>
            <input type="text" name="lokasis" class="form-control" placeholder=""
                value="{{ $riwayats->lokasis->nama_lokasi }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" placeholder="" value="{{ $riwayats->tanggal }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis Perubahan</label>
            <input type="text" name="jenis_perubahan" class="form-control" placeholder=""
                value="{{ $riwayats->jenis_perubahan }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="">{{ $riwayats->deskripsi }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="" value="{{ $riwayats->status }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Catatan Tambahan</label>
            <input type="text" name="catatan_tambahan" class="form-control" placeholder=""
                value="{{ $riwayats->catatan_tambahan }}">
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="update" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
