@extends('layouts.app')
@section('title', 'Kerusakan Aset')
@section('contents')
    <hr />
    <form action="{{ route('kerusakans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">Nama Pengguna</label>
            <input type="string" name="user_id" class="form-control" id="user_id" placeholder="">
        </div>
        <div class="mb-3">
            <label for="asets_id" class="form-label">Nama Aset</label>
            <div class="input-group">
                <select name="asets_id" class="form-select" id="asets_id" style="width: 100%;">
                    <option value=""></option>
                    @foreach ($asets as $rs)
                        <option value="{{ $rs->id }}">{{ $rs->nama }}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="tanggal_laporan" class="form-label">Tanggal Laporan</label>
            <input type="date" name="tanggal_laporan" class="form-control" id="tanggal_laporan" placeholder="">
        </div>
        <div class="mb-3">
            <label for="lokasis_id" class="form-label">Lokasi</label>
            <div class="input-group">
                <select name="lokasis_id" class="form-select" id="lokasis_id" style="width: 100%;">
                    <option value=""></option>
                    @foreach ($lokasis as $rs)
                        <option value="{{ $rs->id }}">{{ $rs->nama_lokasi }}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="deskripsi_kerusakan" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi_kerusakan" id="deskripsi_kerusakan" placeholder=""></textarea>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
