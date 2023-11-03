@extends('layouts.app')
@section('title', 'Riwayat Aset')
@section('contents')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1></h1>
        <a href="{{ route('riwayats.create') }}" class="btn btn-primary">Add Riwayat</a>
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
                <th>No</th>
                <th>Nama Aset</th>
                <th>Kode Aset</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>Tanggal</th>
                <th>Jenis Perubahan</th>
                <th>Deskripsi</th>
                <th>Pengguna</th>
                <th>Status</th>
                <th>Catatan Tambahan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($riwayat->count() > 0)
                @foreach($riwayat as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">{{ $rs->kode_aset }}</td>
                        <td class="align-middle">{{ $rs->kategori_id }}</td>
                        <td class="align-middle">{{ $rs->lokasi_id }}</td>
                        <td class="align-middle">{{ $rs->tanggal }}</td>
                        <td class="align-middle">{{ $rs->jenis_perubahan }}</td>
                        <td class="align-middle">{{ $rs->deskripsi }}</td>
                        <td class="align-middle">{{ $rs->user_id }}</td>
                        <td class="align-middle">{{ $rs->status }}</td>
                        <td class="align-middle">{{ $rs->catatan_tambahan }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('riwayats.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('riwayats.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('riwayats.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="7">Riwayat Aset Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
