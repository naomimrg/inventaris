@extends('layouts.app')
@section('title', 'Edit Data Perbaikan Aset')
@section('contents')
    <hr />
    <form action="{{ route('perbaikans.edit', $perbaikans->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $perbaikans->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Kode Aset</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $perbaikans->kode_aset }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Tanggal Permintaan Perbaikan</label>
                <input type="date" name="title" class="form-control" placeholder="Title" value="{{ $perbaikans->tanggal_permintaan_perbaikan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <input type="date" name="title" class="form-control" placeholder="Title" value="{{ $perbaikans->tanggal_pengembalian }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Status</label>
                <textarea class="form-control" name="keterangan" placeholder="Deskripsi" >{{ $perbaikans->keterangan }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">User</label>
                <textarea class="form-control" name="keterangan" placeholder="Deskripsi" >{{ $perbaikans->keterangan }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection