@extends('layouts.app')
@section('title', 'Tambah Riwayat Aset')
@section('contents')
    <hr />
    <form action="{{ route('riwayats.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="col">
                <label for="nama" class="form-label">Nama Aset</label>
                <input type="string" name="nama" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="kode_aset" class="form-label">Kode Aset</label>
                <input type="string" name="kode_aset" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="kategoris_id" class="form-label">Kategori</label>
                <div class="input-group">
                    <select name="kategoris_id" class="form-control">
                        <option value=""></option>
                        @foreach ($kategoris as $rs)
                            <option value="{{ $rs->id }}">{{ $rs->nama_kategori }}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="lokasis_id" class="form-label">Lokasi</label>
                <div class="input-group">
                    <select name="lokasis_id" class="form-control">
                        <option value=""></option>
                        @foreach ($lokasis as $rs)
                            <option value="{{ $rs->id }}">{{ $rs->nama_lokasi }}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="jenis_perubahan" class="form-label">Jenis Perubahan</label>
                <select name="jenis_perubahan" class="form-control">
                    <option value=""></option>
                    <option value="Pembelian">Pembelian</option>
                    <option value="Pemindahtanganan">Pemindahtanganan</option>
                    <option value="Perbaikan">Perbaikan</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder=""></textarea>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="users_id" class="form-label">Nama Pengguna</label>
                <input type="string" name="users_id" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col" placeholder="">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value=""></option>
                    <option value="Baik">Baik</option>
                    <option value="Rusak">Rusak</option>
                    <option value="Hilang">Hilang</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="catatan_tambahan" class="form-label">Catatan Tambahan</label>
                <textarea class="form-control" name="catatan_tambahan" placeholder=""></textarea>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
