@extends('layouts.app')
@section('title', 'Daftar Aset')
@section('contents')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1></h1>
        <a href="{{ route('asets.create') }}" class="btn btn-primary">Tambah Aset</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Nama</th>
                <th>Kode Aset</th>
                <th>Tanggal Pembelian</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @if($aset->count() > 0)
                @foreach($aset as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">{{ $rs->kode_aset }}</td>
                        <td class="align-middle">{{ $rs->tanggal_pembelian }}</td>
                        <td class="align-middle">{{ $rs->kategori_id }}</td>
                        <td class="align-middle">{{ $rs->lokasi_id }}</td>
                        <td class="align-middle">{{ $rs->harga }}</td>
                        <td class="align-middle">{{ $rs->deskripsi }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('asets.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('asets.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('asets.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">Data Aset Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
