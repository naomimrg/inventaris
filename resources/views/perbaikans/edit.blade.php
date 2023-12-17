@extends('layouts.app')
@section('title', 'Edit Data Perbaikan Aset')
@section('contents')
    <hr />
    <form action="{{ route('perbaikans.edit', $perbaikans->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-12 mb-3">
            <label class="form-label">Nama Pelapor Perbaikan</label>
            <textarea class="form-control" name="nama_pelapor" placeholder="">{{ $perbaikans->nama_pelapor }}</textarea>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="asets_id" class="form-label">Nama Aset</label>
                <select name="asets_id" class="form-control">
                    <option value="">Pilih Aset</option>
                    @foreach ($asets as $rs)
                        <option value="{{ $rs->id }}">{{ $rs->nama }}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <label class="form-label">Tanggal Permintaan Perbaikan</label>
            <input type="date" name="tanggal_permintaan_perbaikan" class="form-control" placeholder=""
                value="{{ $perbaikans->tanggal_permintaan_perbaikan }}">
        </div>
        <div class="col-12 mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="">{{ $perbaikans->deskripsi }}</textarea>
        </div>
        <div class="col-12 mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="" value="{{ $perbaikans->status }}">
        </div>
        <div class="col-12 mb-3">
            <label class="form-label">Total Biaya Perbaikan</label>
            <textarea class="form-control" name="biaya" placeholder="">{{ $perbaikans->biaya }}</textarea>
        </div>
        <div class="col-12 mb-3">
            <label class="form-label">Informasi Umum Keadaan Aset</label>
            <textarea class="form-control" name="informasi" placeholder="">{{ $perbaikans->informasi }}</textarea>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="update" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
