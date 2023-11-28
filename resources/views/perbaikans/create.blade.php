@extends('layouts.app')
@section('title', 'Tambah Perbaikan Aset')
@section('contents')
    <hr />
    <form action="{{ route('perbaikans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="col">
                <label for="nama" class="form-label">Nama Aset</label>
                <input type="text" name="nama" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="kode_aset" class="form-label">Kode Aset</label>
                <input type="text" name="kode_aset" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="tanggal_permintaan_perbaikan" class="form-label">Tanggal Permintaan Perbaikan</label>
                <input type="date" name="tanggal_permintaan_perbaikan" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="deskripsi" class="form-label">Deskripsi Perbaikan</label>
                <textarea class="form-control" name="deskripsi" placeholder=""></textarea>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value=""></option>
                    <option value="Belum Diperbaiki">Belum Diperbaiki</option>
                    <option value="Sedang Diperbaiki">Sedang Diperbaiki</option>
                    <option value="Sudah Diperbaiki">Sudah Diperbaiki</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="nama_pelapor" class="form-label">Nama Pelapor Perbaikan</label>
                <input type="text" name="nama_pelapor" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="deskripsi" class="form-label">Informasi Umum Keadaan Aset</label>
                <textarea class="form-control" name="deskripsi" placeholder=""></textarea>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
