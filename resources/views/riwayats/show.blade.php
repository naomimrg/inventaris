@extends('layouts.app')
@section('title', 'Detail Riwayat Aset')
@section('contents')
    <hr />
    <div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="" value="{{ $riwayats->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" placeholder="" value="{{ $riwayats->kode_aset }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategoris_id" class="form-control" placeholder="" value="{{ $riwayats->kategoris->nama_kategori }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi</label>
            <input type="text" name="lokasis_id" class="form-control" placeholder="" value="{{ $riwayats->lokasis->nama_lokasi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" placeholder="" value="{{ $riwayats->tanggal }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis Perubahan</label>
            <input type="text" name="jenis_perubahan" class="form-control" placeholder="" value="{{ $riwayats->jenis_perubahan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="" readonly>{{ $riwayats->deskripsi }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="" value="{{ $riwayats->status }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Catatan Tambahan</label>
            <textarea class="form-control" name="catatan_tambahan" placeholder="" readonly>{{ $riwayats->catatan_tambahan }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Dibuat Pada</label>
            <input type="text" name="created_at" class="form-control" placeholder="" value="{{ $riwayats->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diperbarui Pada</label>
            <input type="text" name="updated_at" class="form-control" placeholder="" value="{{ $riwayats->updated_at }}" readonly>
        </div>
    </div>
@endsection
