@extends('layouts.app')
@section('title', 'Detail Laporan Kerusakan Aset')
@section('contents')
    <hr />
    <div>
        <div class="col mb-3">
            <label class="form-label">Nama Aset</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Aset" value="{{ $kerusakans->asets_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi</label>
            <input type="text" name="lokasi_id" class="form-control" placeholder="Lokasi" value="{{ $kerusakans->lokasi_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi Kerusakan</label>
            <textarea class="form-control" name="deskripsi_kerusakan" placeholder="Deskripsi Kerusakan" readonly>{{ $kerusakans->deskripsi_kerusakan }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Pelapor</label>
            <input type="text" name="users_id" class="form-control" placeholder="Nama Pelapor" value="{{ $kerusakans->users_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $kerusakans->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $kerusakans->updated_at }}" readonly>
        </div>
    </div>
@endsection
