@extends('layouts.app')
@section('title', 'Detail Lokasi Aset')
@section('contents')
    <hr />
    <div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama_lokasi" class="form-control" placeholder="Nama Lokasi" value="{{ $lokasi->nama_lokasi }}" readonly>
        </div>

        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Descriptoin" readonly>{{ $lokasi->deskripsi }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $lokasi->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $lokasi->updated_at }}" readonly>
        </div>
    </div>
@endsection
