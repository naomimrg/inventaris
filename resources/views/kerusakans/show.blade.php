@extends('layouts.app')
@section('title', 'Detail Laporan Kerusakan Aset')
@section('contents')
    <hr />
    <div>
        <div class="col mb-3">
            <label class="form-label">Nama Pelapor</label>
            <input type="text" name="nama_pelapor" class="form-control" placeholder="" value="{{ $kerusakans->nama_pelapor }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Aset</label>
            <input type="text" name="nama" class="form-control" placeholder="" value="{{ $kerusakans->asets->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" placeholder="" value="{{ $kerusakans->asets->kode_aset }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nomor Register</label>
            <input type="text" name="nomor_register" class="form-control" placeholder="" value="{{ $kerusakans->asets->nomor_register }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" placeholder="" value="{{ $kerusakans->asets->kategoris->nama_kategori }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi</label>
            <input type="text" name="lokasis_id" class="form-control" placeholder="" value="{{ $kerusakans->lokasis->nama_lokasi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Estimasi Biaya Perbaikan</label>
            <input type="number" name="estimasi_biaya" class="form-control" placeholder="" value="{{ $kerusakans->asets->estimasi_biaya }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Rincian kerusakans</label>
            <textarea class="form-control" name="deskripsi_kerusakans" placeholder="" readonly>{{ $kerusakans->deskripsi_kerusakans }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Dibuat Pada</label>
            <input type="text" name="created_at" class="form-control" placeholder="" value="{{ $kerusakans->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diperbarui Pada</label>
            <input type="text" name="updated_at" class="form-control" placeholder="" value="{{ $kerusakans->updated_at }}" readonly>
        </div>
    </div>
@endsection
