@extends('layouts.app')
@section('title', 'Edit Data Riwayat Aset')
@section('contents')
    <hr />
    <form action="{{ route('riwayats.edit', $riwayats->id) }}" method="POST">
        @csrf
        @method('PUT')
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
        <div class="col mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" placeholder="" value="{{ $riwayats->tanggal }}">
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
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="">{{ $riwayats->deskripsi }}</textarea>
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
        <div class="col mb-3">
            <label class="form-label">Catatan Tambahan</label>
            <input type="text" name="catatan_tambahan" class="form-control" placeholder=""
                value="{{ $riwayats->catatan_tambahan }}">
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="update" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
