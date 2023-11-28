@extends('layouts.app')
@section('title', 'Detail Data Aset')
@section('contents')
    <hr />
        <div class="col mb-3">
            <label class="form-label">Nama Aset</label>
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
            <input type="text" name="kategoris_id" class="form-control" placeholder="" value="{{ $aset->kategoris->nama_kategori }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi Fisik Aset</label>
            <input type="text" name="lokasis_id" class="form-control" placeholder="" value="{{ $aset->lokasis->nama_lokasi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" placeholder="" value="{{ $aset->harga }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Merk</label>
            <input type="string" name="merk" class="form-control" placeholder="" value="{{ $aset->merk }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status Kepemilikan</label>
            <input type="string" name="status_kepemilikan" class="form-control" placeholder="" value="{{ $aset->status_kepemilikan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="" readonly>{{ $aset->deskripsi }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Dibuat Pada</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $aset->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diperbarui Pada</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $aset->updated_at }}" readonly>
        </div>
@endsection
