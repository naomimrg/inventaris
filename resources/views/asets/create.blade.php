@extends('layouts.app')
@section('title', 'Tambah Data Aset')
@section('contents')
    <hr />
    <form action="{{ route('asets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Aset</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="">
        </div>
        <div class="mb-3">
            <label for="kode_aset" class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" id="kode_aset" placeholder="">
        </div>
        <div class="mb-3">
            <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian</label>
            <input type="date" name="tanggal_pembelian" class="form-control" id="tanggal_pembelian" placeholder="">
        </div>
        <div class="mb-3">
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
        <div class="mb-3">
            <label for="lokasis_id" class="form-label">Lokasi Fisik Aset</label>
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
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" placeholder="">
        </div>
        <div class="mb-3">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" name="merk" class="form-control" id="merk" placeholder="">
        </div>
        <div class="mb-3">
            <label for="status_kepemilikan" class="form-label">Status Kepemilikan</label>
            <select name="status_kepemilikan" class="form-control" id="status_kepemilikan">
                <option value=""></option>
                <option value="Milik">Milik</option>
                <option value="Disewa">Disewa</option>
                <option value="Dipinjam">Dipinjam</option>
                <option value="Dalam Pemrosesan">Dalam Pemrosesan</option>
                <option value="Dijual">Dijual</option>
                <option value="Dalam Perbaikan">Dalam Perbaikan</option>
                <option value="Daur Ulang atau Pembuangan">Daur Ulang atau Pembuangan</option>
                <option value="Pemusnahan">Pemusnahan</option>
                <option value="Dalam Proses Akuisisi">Dalam Proses Akuisisi</option>
                <option value="Penggunaan Bersama">Penggunaan Bersama</option>
            </select>
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
