@extends('layouts.app')
@section('title', 'Detail Laporan Kerusakan Aset')
@section('contents')
    <hr />
    <div>
        <div class="col mb-3">
            <label class="form-label">Nama Pelapor</label>
            <input type="text" name="nama_pelapor" class="form-control" placeholder="" value="{{ $kerusakan->nama_pelapor }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Aset</label>
            <input type="text" name="nama" class="form-control" placeholder="" value="{{ $kerusakan->asets->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi</label>
            <input type="text" name="lokasis_id" class="form-control" placeholder="" value="{{ $kerusakan->lokasis->nama_lokasi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi Kerusakan</label>
            <textarea class="form-control" name="deskripsi_kerusakan" placeholder="" readonly>{{ $kerusakan->deskripsi_kerusakan }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Dibuat Pada</label>
            <input type="text" name="created_at" class="form-control" placeholder="" value="{{ $kerusakan->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diperbarui Pada</label>
            <input type="text" name="updated_at" class="form-control" placeholder="" value="{{ $kerusakan->updated_at }}" readonly>
        </div>
    </div>
@endsection
