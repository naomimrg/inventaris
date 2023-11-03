@extends('layouts.app')
@section('title', 'Tambah Perbaikan Aset')
@section('contents')
    <hr />
    <form action="{{ route('perbaikans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="col">
                <input type="string" name="nama" class="form-control" placeholder="Nama Aset">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="string" name="kode_aset" class="form-control" placeholder="Kode Aset">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="date" name="tanggal_permintaan_perbaikan" class="form-control" placeholder="Tanggal Permintaan Perbaikan">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="string" name="status" class="form-control" placeholder="Status">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="string" name="user" class="form-control" placeholder="User">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
