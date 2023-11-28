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
            <input type="text" name="nama" class="form-control" placeholder="" value="{{ $kerusakan->nama }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi Fisik Aset</label>
            <select name="lokasis_id" class="form-control">
                <option value=""></option>
                @foreach ($lokasis as $rs)
                    <option value="{{ $rs->id }}" {{ $rs->nama_lokasi == $kerusakan->lokasis->nama_lokasi}}>
                        {{ $rs->nama_lokasi }}
                    </option>
                @endforeach
            </select>
        </div>    
        <div class="col mb-3">
            <label class="form-label">Deskripsi Kerusakan</label>
            <textarea class="form-control" name="dekskripsi" placeholder="">{{ $kerusakan->dekskripsi }}</textarea>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="update" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
