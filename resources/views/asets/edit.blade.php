@extends('layouts.app')
@section('title', 'Edit Data Aset')
@section('contents')
    <hr />
    <form action="{{ route('asets.update', $aset->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="" value="{{ $aset->nama }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" placeholder="" value="{{ $aset->kode_aset }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Pembelian</label>
            <input type="text" name="tanggal_pembelian" class="form-control" placeholder="" value="{{ $aset->tanggal_pembelian }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategoris_id" class="form-control" placeholder="" value="{{ $aset->kategoris_id }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi</label>
            <input type="text" name="lokasis_id" class="form-control" placeholder="" value="{{ $aset->lokasis_id }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" placeholder="" value="{{ $aset->harga }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="" >{{ $aset->deskripsi }}</textarea>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="update" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
