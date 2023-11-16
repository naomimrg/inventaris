@extends('layouts.app')
@section('title', 'Peminjaman Aset')
@section('contents')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1></h1>
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
                <th>Nama Peminjam</th>
                <th>Nama</th>
                <th>Kode Aset</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($peminjamen->count() > 0)
                @foreach ($peminjamen as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama_peminjam }}</td>
                        <td class="align-middle">{{ $rs->asets->nama }}</td>
                        <td class="align-middle">{{ $rs->kode_aset }}</td>
                        <td class="align-middle">{{ $rs->tanggal_peminjaman }}</td>
                        <td class="align-middle">{{ $rs->tanggal_pengembalian }}</td>
                        <td class="align-middle">{{ $rs->keterangan }}</td>
                        <!-- Tambahkan ini di dalam loop foreach untuk setiap entri peminjaman -->
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('peminjamans.show', $rs->id) }}" type="button"
                                    class="btn btn-secondary">Detail</a>
                                <a href="{{ route('peminjamans.edit', $rs->id) }}" type="button"
                                    class="btn btn-warning">Edit</a>

                                <!-- Tombol untuk menyetujui peminjaman -->
                                <form action="{{ route('peminjamans.approve', $rs->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success">Setujui</button>
                                </form>

                                <!-- Tombol untuk menolak peminjaman -->
                                <form action="{{ route('peminjamans.reject', $rs->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-danger">Tolak</button>
                                </form>
                            </div>
                        </td>

                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">Peminjaman Aset Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
