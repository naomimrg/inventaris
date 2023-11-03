@extends('layouts.app')
@section('title', 'Perbaikan Aset')
@section('contents')
<div class="d-flex justify-content-between align-items-center mb-3">
        <h1></h1>
        <a href="{{ route('perbaikans.create') }}" class="btn btn-primary">Add Perbaikan</a>
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
                <th>Tanggal Permintaan Perbaikan</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>User</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($perbaikans->count() > 0)
                @foreach($perbaikans as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">{{ $rs->kode_aset }}</td>
                        <td class="align-middle">{{ $rs->tanggal_permintaan_perbaikan }}</td>
                        <td class="align-middle">{{ $rs->deskripsi }}</td>
                        <td class="align-middle">{{ $rs->status }}</td>
                        <td class="align-middle">{{ $rs->users_id }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('perbaikans.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('perbaikans.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('perbaikans.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="7">Data Perbaikan Aset Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
