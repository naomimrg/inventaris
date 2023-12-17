@extends('layouts.app')
@section('title', 'Edit Data Kerusakan Aset')
@section('contents')
    <hr />
    <form action="{{ route('kerusakan_staf.edit', $kerusakan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col mb-3">
            <label class="form-label">Nama Pelapor</label>
            <input type="text" name="nama_pelapor" class="form-control" placeholder="" value="{{ $kerusakan->nama_pelapor }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Aset</label>
            <select name="asets_id" class="form-control">
                <option value="">Pilih Aset</option>
                @foreach ($asets as $rs)
                    <option value="{{ $rs->id }}" {{ $rs->nama == $kerusakan->asets->nama}}>
                        {{ $rs->nama }}
                    </option>
                @endforeach
            </select>
        </div>  
        <div class="col mb-3">
            <label class="form-label">Tanggal Laporan</label>
            <input type="date" name="tanggal_laporan" class="form-control" placeholder="" value="{{ $kerusakan->tanggal_laporan }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi Fisik Aset</label>
            <select name="lokasis_id" class="form-control">
                <option value="">Pilih Lokasi</option>
                @foreach ($lokasis as $rs)
                    <option value="{{ $rs->id }}" {{ $rs->nama_lokasi == $kerusakan->lokasis->nama_lokasi}}>
                        {{ $rs->nama_lokasi }}
                    </option>
                @endforeach
            </select>
        </div>    
        <div class="col mb-3">
            <label class="form-label">Estimasi Biaya Perbaikan</label>
            <input type="number" name="estimasi_biaya" class="form-control" placeholder="" value="{{ $kerusakan->estimasi_biaya }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Rincian Kerusakan</label>
            <textarea class="form-control" name="deskripsi_kerusakan" placeholder="">{{ $kerusakan->deskripsi_kerusakan }}</textarea>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="update" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
