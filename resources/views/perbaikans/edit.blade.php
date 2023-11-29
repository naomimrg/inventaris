@extends('layouts.app')
@section('title', 'Edit Data Perbaikan Aset')
@section('contents')
    <hr />
    <form action="{{ route('perbaikans.edit', $perbaikans->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12 mb-3">
                <label class="form-label">Nama Aset</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="{{ $perbaikans->nama }}" >
            </div>
            <div class="col-12 mb-3">
                <label class="form-label">Kode Aset</label>
                <input type="text" name="kode_aset" class="form-control" placeholder="" value="{{ $perbaikans->kode_aset }}" >
            </div>
            <div class="col-12 mb-3">
                <label class="form-label">Tanggal Permintaan Perbaikan</label>
                <input type="date" name="tanggal_permintaan_perbaikan" class="form-control" placeholder="" value="{{ $perbaikans->tanggal_permintaan_perbaikan }}" >
            </div>
            <div class="col-12 mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="dekskripsi" placeholder="" >{{ $perbaikans->dekskripsi }}</textarea>
            </div>
            <div class="col-12 mb-3">
                <label class="form-label">Status</label>
                <input type="text" name="status" class="form-control" placeholder="" value="{{ $perbaikans->status }}" >
            </div>
            <div class="col-12 mb-3">
                <label class="form-label">Nama Pelapor Perbaikan</label>
                <textarea class="form-control" name="nama_pelapor" placeholder="" >{{ $perbaikans->nama_pelapor }}</textarea>
            </div>
            <div class="col-12 mb-3">
                <label class="form-label">Informasi Umum Keadaan Aset</label>
                <textarea class="form-control" name="inforasi" placeholder="" >{{ $perbaikans->inforasi }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection