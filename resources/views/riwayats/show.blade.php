@extends('layouts.app')
@section('title', 'Detail Kategori Aset')
@section('contents')
    <hr />
    <div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="" value="{{ $kategori->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" placeholder="" value="{{ $kategori->kode_aset }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategoris_id" class="form-control" placeholder="" value="{{ $kategori->kategoris_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi</label>
            <input type="text" name="lokasis_id" class="form-control" placeholder="" value="{{ $kategori->lokasis_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" placeholder="" value="{{ $kategori->tanggal }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis Perubahan</label>
            <input type="text" name="jenis_perubahan" class="form-control" placeholder="" value="{{ $kategori->jenis_perubahan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="" readonly>{{ $kategori->deskripsi }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Pengguna</label>
            <input type="text" name="users_id" class="form-control" placeholder="" value="{{ $kategori->users_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="" value="{{ $kategori->status }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Catatan Tambahan</label>
            <textarea class="form-control" name="catatan_tambahan" placeholder="" readonly>{{ $kategori->catatan_tambahan }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="" value="{{ $kategori->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="" value="{{ $kategori->updated_at }}" readonly>
        </div>
    </div>
@endsection
