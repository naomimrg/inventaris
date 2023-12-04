@extends('layouts.app')
@section('title', 'Tambah Peminjaman Aset')
@section('contents')
    <hr />
    <form action="{{ route('peminjaman_staf.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="col">
                <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                <input type="string" name="nama_peminjam" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="asets_id" class="form-label">Nama Aset</label>
                <div class="input-group">
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
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label>
                <input type="date" name="tanggal_peminjaman" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                <input type="date" name="tanggal_pengembalian" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="keterangan" class="form-label"></label>Keterangan</label>
                <textarea class="form-control" name="keterangan" placeholder=""></textarea>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
