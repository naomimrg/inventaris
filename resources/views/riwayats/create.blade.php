@extends('layouts.app')
@section('title', 'Tambah Riwayat Aset')
@section('contents')
    <hr />
    <form action="{{ route('riwayats.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
                    <option value="">Pilih Jenis Perubahan</option>
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
                    <option value="">Pilih Status</option>
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
