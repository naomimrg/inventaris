@extends('layouts.app')
@section('contents')
    <h1 class="mb-0">Data Aset</h1>
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1></h1>
        <a href="{{ route('asets.create') }}" class="btn btn-primary">Tambah Aset</a>
    </div>
    <hr />

    <div class="card-header justify-content-between align-items-center">
        <form id="filterForm" class="row row-cols-lg-auto g-1">
            {{-- <div class="mb-3 d-flex align-items-center">
                <label for="per_page" class="form-label me-2">Tampilkan:</label>
                <select class="form-control" name="per_page" onchange="submitForm()">
                    <option value="">Pilih</option>
                    <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                    <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                    <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>100</option>
                </select>
            </div> --}}
            <div class="mb-3">
                <select class="form-control" name="kategoris_id" onchange="submitForm()">
                    <option value="">Tampilkan Berdasarkan Kategori</option>
                    @foreach ($kategoris as $category)
                        @if ($category->id == $kategoris_id)
                            <option value="{{ $category->id }}" selected>{{ $category->nama_kategori }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3" style="margin-left: auto;">
                <input class="form-control" type="text" name="search" value="{{ $search }}"
                    placeholder="Search here..." />
            </div>
            <div class="">
                <button class="btn btn-success" type="button" onclick="submitForm()">Search</button>
            </div>
        </form>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th class="text-center border">No</th>
                <th class="text-center border">
                    <a href="{{ route('asets', ['sort' => 'nama', 'order' => 'asc']) }}">Nama Aset <i class="fas fa-sort"></i></a>
                </th>
                <th class="text-center border">
                    <a href="{{ route('asets', ['sort' => 'kode_aset', 'order' => 'asc']) }}">Kode Aset <i class="fas fa-sort"></i></a>
                </th>
                <th class="text-center border">
                    <a href="{{ route('asets', ['sort' => 'kategoris->nama_kategori', 'order' => 'asc']) }}">Kategori <i class="fas fa-sort"></i></a>
                </th>
                <th class="text-center border">
                    <a href="{{ route('asets', ['sort' => 'nama_lokasi', 'order' => 'asc']) }}">Lokasi Fisik Aset <i class="fas fa-sort"></i></a>
                </th>
                <th class="text-center border">
                    <a href="{{ route('asets', ['sort' => 'harga', 'order' => 'asc']) }}">Harga <i class="fas fa-sort"></i></a>
                </th>
                <th class="text-center border">
                    <a href="{{ route('asets', ['sort' => 'kondisi', 'order' => 'asc']) }}">Kondisi Aset <i class="fas fa-sort"></i></a>
                </th>
                <th class="text-center border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($aset->count() > 0)
                @foreach ($aset as $rs)
                    <tr>
                        <td class="align-middle border text-center">{{ $loop->iteration }}</td>
                        <td class="align-middle border">{{ $rs->nama }}</td>
                        <td class="align-middle border">{{ $rs->kode_aset }}</td>
                        <td class="align-middle border">{{ $rs->kategoris->nama_kategori }}</td>
                        <td class="align-middle border">{{ $rs->lokasis->nama_lokasi }}</td>
                        <td class="align-middle border">{{ $rs->harga }}</td>
                        <td class="align-middle border">{{ $rs->kondisi }}</td>
                        <td class="align-middle border text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('asets.show', $rs->id) }}" type="button" class="btn btn-secondary"> <i
                                        class="fas fa-eye"></i> </a>
                                <a href="{{ route('asets.edit', $rs->id) }}" type="button" class="btn btn-warning ml-1">
                                    <i class="fas fa-edit"></i> </a>
                                <form action="{{ route('asets.destroy', $rs->id) }}" method="POST" type="button"
                                    class="btn btn-danger p-0 ml-1" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0"> <i class="fas fa-trash-alt"></i> </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="8" class="text-end">
                        <strong>Total Data:</strong>
                        Menampilkan {{ $aset->count() }} dari {{ $aset->total() }} Data
                    </td>
                </tr>
            @else
                <tr>
                    <td class="text-center border" colspan="8">Data Aset Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
    <script>
        function submitForm() {
            document.getElementById("filterForm").submit();
        }
    </script>
@endsection
