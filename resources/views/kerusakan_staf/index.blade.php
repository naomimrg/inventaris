@extends('layouts.app')
@section('title', 'Kerusakan Aset')
@section('contents')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1></h1>
        <a href="{{ route('kerusakan_staf.create') }}" class="btn btn-primary">Tambah Laporan Kerusakan</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Pelapor</th>
                <th>Nama Aset</th>
                <th>Lokasi</th>
                <th>Deskripsi Kerusakan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($kerusakan->count() > 0)
                @foreach ($kerusakan as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama_pelapor }}</td>
                        <td class="align-middle">{{ $rs->asets->nama }}</td>
                        <td class="align-middle">{{ $rs->lokasis->nama_lokasi }}</td>
                        <td class="align-middle">{{ $rs->deskripsi_kerusakan }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('kerusakan_staf.show', $rs->id) }}" type="button"
                                    class="btn btn-secondary"> <i class="fas fa-eye"></i> </a>
                                <a href="{{ route('kerusakan_staf.edit', $rs->id) }}" type="button"
                                    class="btn btn-warning ml-1"> <i class="fas fa-edit"></i> </a>
                                <form action="{{ route('kerusakan_staf.destroy', $rs->id) }}" method="POST" type="button"
                                    class="btn btn-danger p-0 ml-1" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="7">Laporan Kerusakan Aset Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection