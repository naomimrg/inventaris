@extends('layouts.app')
@section('title', 'Perbaikan Aset')
@section('contents')
<div class="d-flex justify-content-between align-items-center mb-3">
        <h1></h1>
        <a href="{{ route('perbaikans.create') }}" class="btn btn-primary">Tambah Data Perbaikan</a>
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
                <th class="text-center border">No</th>
                <th class="text-center border">Nama Aset</th>
                <th class="text-center border">Kode Aset</th>
                <th class="text-center border">Tanggal Permintaan Perbaikan</th>
                <th class="text-center border">Deskripsi</th>
                <th class="text-center border">Status</th>
                <th class="text-center border">User</th>
                <th class="text-center border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($perbaikans->count() > 0)
                @foreach($perbaikans as $rs)
                    <tr>
                        <td class="align-middle border">{{ $loop->iteration }}</td>
                        <td class="align-middle border">{{ $rs->nama }}</td>
                        <td class="align-middle border">{{ $rs->kode_aset }}</td>
                        <td class="align-middle border">{{ $rs->tanggal_permintaan_perbaikan }}</td>
                        <td class="align-middle border">{{ $rs->deskripsi }}</td>
                        <td class="align-middle border">{{ $rs->status }}</td>
                        <td class="align-middle border">{{ $rs->users_id }}</td>
                        <td class="align-middle border text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('perbaikans.show', $rs->id) }}" type="button" class="btn btn-secondary"> <i class="fas fa-eye"></i> </a>
                                <a href="{{ route('perbaikans.edit', $rs->id) }}" type="button" class="btn btn-warning ml-1"> <i class="fas fa-edit"></i> </a>
                                <form action="{{ route('perbaikans.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0 ml-1"
                                    onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0"> <i class="fas fa-trash-alt"></i> </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">Data Perbaikan Aset Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
