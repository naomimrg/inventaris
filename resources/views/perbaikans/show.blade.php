@extends('layouts.app')
@section('title', 'Detail Perbaikan Aset')
@section('contents')
    <hr />
    <div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Aset" value="{{ $perbaikans->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" placeholder="Kode Aset" value="{{ $perbaikans->kode_aset }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Permintaan Perbaikan</label>
            <input type="date" name="tanggal_permintaan_perbaikan" class="form-control" placeholder="Tanggal Permintaan Perbaikan" value="{{ $perbaikans->tanggal_permintaan_perbaikan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="keterangan" placeholder="Keterangan" readonly>{{ $perbaikans->keterangan }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <textarea class="form-control" name="status" placeholder="Status" readonly>{{ $perbaikans->status }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <textarea class="form-control" name="users_id" placeholder="Nama" readonly>{{ $perbaikans->users_id }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $perbaikans->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $perbaikans->updated_at }}" readonly>
        </div>
    </div>
@endsection