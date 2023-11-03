@extends('layouts.app')
@section('title', 'Edit Data Lokasi')
@section('contents')
    <hr />
    <form action="{{ route('lokasis.update', $lokasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama lokasi</label>
                <input type="text" name="nama_lokasi" class="form-control" placeholder="Nama Lokasi" value="{{ $lokasi->nama_lokasi }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" >{{ $lokasi->deskripsi }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
