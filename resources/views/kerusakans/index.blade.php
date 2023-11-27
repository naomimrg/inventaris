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
                <th class="text-center border">No</th>
                <th class="text-center border">Nama Pelapor</th>
                <th class="text-center border">Nama Aset</th>
                <th class="text-center border">Lokasi</th>
                <th class="text-center border">Deskripsi Kerusakan</th>
                <th class="text-center border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($kerusakans->count() > 0)
                @foreach($kerusakans as $rs)
                    <tr>
                        <td class="align-middle border">{{ $loop->iteration }}</td>
                        <td class="align-middle border">{{ $rs->nama_pelapor }}</td>
                        <td class="align-middle border">{{ $rs->asets->nama }}</td>
                        <td class="align-middle border">{{ $rs->lokasis->nama_lokasi }}</td>
                        <td class="align-middle border">{{ $rs->deskripsi_kerusakan }}</td>
                        <td class="align-middle border text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('kerusakans.show', $rs->id) }}" type="button" class="btn btn-secondary"> <i class="fas fa-eye"></i> </a>
                                {{-- <a href="{{ route('kerusakans.edit', $rs->id) }}" type="button" class="btn btn-warning ml-1"> <i class="fas fa-edit"></i> </a> --}}
                                <form action="{{ route('kerusakans.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0 ml-1"
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
                    <td class="text-center" colspan="7">Laporan Kerusakan Aset Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
