@extends('layouts.app')
@section('title', 'Kerusakan Aset')
@section('contents')
    <div class="d-flex justify-content-between align-items-center mb-3">
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
                <th>Lokasi</th>
                <th>Deskripsi Kerusakan</th>
                <th>Nama Pelapor</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($kerusakans->count() > 0)
                @foreach($kerusakans as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->asets_id }}</td>
                        <td class="align-middle">{{ $rs->lokasis_id }}</td>
                        <td class="align-middle">{{ $rs->deskripsi_kerusakan }}</td>
                        <td class="align-middle">{{ $rs->user_id }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('kerusakans.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('kerusakans.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('kerusakans.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="7">Laporan Kerusakan Aset Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
