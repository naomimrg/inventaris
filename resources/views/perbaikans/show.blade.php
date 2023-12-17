@extends('layouts.app')
@section('title', 'Detail Perbaikan Aset')
@section('contents')
    <hr />
    <div>
        <div class="col mb-3">
            <label class="form-label">Nama Pelapor Perbaikan</label>
            <textarea class="form-control" name="nama_pelapor" placeholder="" readonly>{{ $perbaikans->nama_pelapor }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Aset</label>
            <input type="text" name="nama" class="form-control" placeholder="" value="{{ $perbaikans->asets->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" placeholder="" value="{{ $perbaikans->asets->kode_aset }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kategori Aset</label>
            <input type="text" name="nama_kategori" class="form-control" placeholder="" value="{{ $perbaikans->asets->kategoris->nama_kategori }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi Fisik Aset</label>
            <input type="text" name="nama_lokasi" class="form-control" placeholder="" value="{{ $perbaikans->asets->lokasis->nama_lokasi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Permintaan Perbaikan</label>
            <input type="date" name="tanggal_permintaan_perbaikan" class="form-control" placeholder="" value="{{ $perbaikans->tanggal_permintaan_perbaikan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="" readonly>{{ $perbaikans->deskripsi }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <textarea class="form-control" name="status" placeholder="" readonly>{{ $perbaikans->status }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Total Biaya Perbaikan</label>
            <textarea class="form-control" name="biaya" placeholder="" readonly>{{ $perbaikans->biaya }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Informasi Umum Keadaan Aset</label>
            <textarea class="form-control" name="informasi" placeholder="" readonly>{{ $perbaikans->informasi }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Dibuat Pada</label>
            <input type="text" name="created_at" class="form-control" placeholder="" value="{{ $perbaikans->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diupdate pada</label>
            <input type="text" name="updated_at" class="form-control" placeholder="" value="{{ $perbaikans->updated_at }}" readonly>
        </div>
    </div>
@endsection