@extends('layouts.app')
@section('title', 'Tambah Data Lokasi Aset')
@section('contents')
    <hr />
    <form action="{{ route('lokasis.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_lokasi" class="form-label">Nama Lokasi</label>
            <input type="string" name="nama_lokasi" class="form-control" id="nama_lokasi" placeholder="">
        </div>
        <div class="mb-3">
            <label for="kampuses_id" class="form-label">Lokasi Kampus *</label>
            <div class="input-group">
                <select name="kampuses_id" class="form-control">
                    <option value="">Pilih Lokasi Kampus</option>
                    @foreach ($kampuses as $rs)
                        <option value="{{ $rs->id }}">{{ $rs->nama}}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder=""></textarea>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
