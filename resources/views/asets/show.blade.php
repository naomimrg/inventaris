@extends('layouts.app')
@section('title', 'Detail Data Aset')
@section('contents')
    <hr />
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="string" name="nama" class="form-control" placeholder="" value="{{ $aset->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" placeholder="" value="{{ $aset->kode_aset }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Pembelian</label>
            <input type="date" name="tanggal_pembelian" class="form-control" placeholder="" value="{{ $aset->tanggal_pembelian }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategoris" class="form-control" placeholder="" value="{{ $aset->kategoris }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi</label>
            <input type="text" name="lokasis" class="form-control" placeholder="" value="{{ $aset->lokasis }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" placeholder="" value="{{ $aset->harga }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="" readonly>{{ $aset->deskripsi }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $aset->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $aset->updated_at }}" readonly>
        </div>
@endsection
