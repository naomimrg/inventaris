@extends('layouts.app')
@section('contents')
<h1 class="mb-0">Data Lokasi Aset</h1>
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
                <th class="text-center border">No</th>
                <th class="text-center border">Nama Lokasi</th>
                <th class="text-center border">Deskripsi</th>
                <th class="text-center border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($lokasis->count() > 0)
            @foreach($lokasis as $rs)
            <tr>
                <td class="align-middle border text-center border">{{ $loop->iteration }}</td>
                <td class="align-middle border">{{ $rs->nama_lokasi }}</td>
                <td class="align-middle border">{{ $rs->deskripsi }}</td>
                <td class="align-middle text-center border">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('lokasis.edit', $rs->id) }}" type="button" class="btn btn-warning ml-1"> <i class="fas fa-edit"></i> </a>
                        <form action="{{ route('lokasis.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0 ml-1"
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
                <td class="text-center" colspan="7">Data Lokasi Aset Tidak Ditemukan</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
