@extends('layouts.app')
@section('title', 'Kerusakan Aset')
@section('contents')
    <hr />
    <form action="{{ route('kerusakan_staf.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_pelapor" class="form-label">Nama Pelapor</label>
            <input type="string" name="nama_pelapor" class="form-control" id="nama_pelapor" placeholder="">
        </div>
        <div class="mb-3">
            <label for="asets_id" class="form-label">Nama Aset</label>
            <div class="input-group">
                <select name="asets_id" class="form-control">
                    <option value="">Pilih Aset</option>
                    @foreach ($asets as $rs)
                        <option value="{{ $rs->id }}">{{ $rs->nama }}</option>
                    @endforeach
                </select>
                <div class="input-group-append"></div>
            </div>
        </div>
        <div class="mb-3">
            <label for="tanggal_laporan" class="form-label">Tanggal Laporan</label>
            <input type="date" name="tanggal_laporan" class="form-control" id="tanggal_laporan" placeholder="">
        </div>
        <div class="mb-3">
            <label for="lokasis_id" class="form-label">Lokasi</label>
            <div class="input-group">
                <select name="lokasis_id" class="form-control">
                    <option value="">Pilih Lokasi</option>
                    @foreach ($lokasis as $rs)
                        <option value="{{ $rs->id }}">{{ $rs->nama_lokasi }}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="estimasi_biaya" class="form-label">Estimasi Biaya Perbaikan</label>
            <input type="number" name="estimasi_biaya" class="form-control" id="estimasi_biaya" placeholder="">
        </div>
        <div class="mb-3">
            <label for="deskripsi_kerusakan" class="form-label">Rincian Kerusakan</label>
            <textarea class="form-control" name="deskripsi_kerusakan" id="deskripsi_kerusakan" placeholder=""></textarea>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
