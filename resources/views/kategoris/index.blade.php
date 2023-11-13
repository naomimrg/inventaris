@extends('layouts.app')
@section('title', 'Kategori Aset')
@section('contents')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1></h1>
        <a href="{{ route('kategoris.create') }}" class="btn btn-primary">Tambah Kategori</a>
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
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($kategoris->count() > 0)
                @foreach($kategoris as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama_kategori }}</td>
                        <td class="align-middle">{{ $rs->deskripsi }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('kategoris.show', $rs->id) }}" type="button" class="btn btn-secondary"> <i class="fas fa-eye"></i> </a>
                                <a href="{{ route('kategoris.edit', $rs->id) }}" type="button" class="btn btn-warning ml-1"> <i class="fas fa-edit"></i> </a>
                                <form action="{{ route('kategoris.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0 ml-1"
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
                    <td class="text-center" colspan="70">Kategori Aset Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
