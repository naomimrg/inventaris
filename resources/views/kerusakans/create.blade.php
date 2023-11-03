@extends('layouts.app')
@section('title', 'Kerusakan Aset')
@section('contents')
    <hr />
    <form action="{{ route('kerusakans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">Nama Pengguna</label>
            <input type="string" name="user_id" class="form-control" id="user_id" placeholder="Nama Pengguna">
        </div>
        <div class="mb-3">
            <label for="asets_id" class="form-label">Nama Aset</label>
            <input type="text" name="asets_id" class="form-control" id="asets_id" placeholder="Nama Aset">
        </div>
        <div class="mb-3">
            <label for="tanggal_laporan" class="form-label">Tanggal Laporan</label>
            <input type="date" name="tanggal_laporan" class="form-control" id="tanggal_laporan" placeholder="Tanggal Laporan">
        </div>
        <div class="mb-3">
            <label for="lokasis_id" class="form-label">Lokasi</label>
            <input type="text" name="lokasis_id" class="form-control" id="lokasis_id" placeholder="Lokasi">
        </div>
        <div class="mb-3">
            <label for="deskripsi_kerusakan" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi_kerusakan" id="deskripsi_kerusakan" placeholder="Deskripsi"></textarea>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
