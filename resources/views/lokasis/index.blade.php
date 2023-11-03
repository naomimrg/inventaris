@extends('layouts.app')
@section('title', 'Lokasi Aset')
@section('contents')
<div class="d-flex align-items-center justify-content-between mb-3">
    <h1></h1>
    <a href="{{ route('lokasis.create') }}" class="btn btn-primary">Tambah Lokasi</a>
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Nama</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($lokasis->count() > 0)
            @foreach($lokasis as $rs)
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $rs->nama }}</td>
                <td class="align-middle">{{ $rs->deskripsi }}</td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('lokasis.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                        <a href="{{ route('lokasis.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                        <form action="{{ route('lokasis.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                <td class="text-center" colspan="7">Data Lokasi Aset Tidak Ditemukan</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
