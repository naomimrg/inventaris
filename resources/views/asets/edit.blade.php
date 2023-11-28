@extends('layouts.app')
@section('title', 'Edit Data Aset')
@section('contents')
    <hr />
    <form action="{{ route('asets.update', $aset->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col mb-3">
            <label class="form-label">Nama Aset</label>
            <input type="text" name="nama" class="form-control" placeholder="" value="{{ $aset->nama }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Aset</label>
            <input type="text" name="kode_aset" class="form-control" placeholder="" value="{{ $aset->kode_aset }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Pembelian</label>
            <input type="date" name="tanggal_pembelian" class="form-control" placeholder="" value="{{ $aset->tanggal_pembelian }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Kategori Aset</label>
            <select name="kategoris_id" class="form-control">
                <option value=""></option>
                @foreach ($kategoris as $rs)
                    <option value="{{ $rs->id }}" {{ $rs->nama_kategori == $aset->kategoris->nama_kategori}}>
                        {{ $rs->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div> 
        <div class="col mb-3">
            <label class="form-label">Lokasi Fisik Aset</label>
            <select name="lokasis_id" class="form-control">
                <option value=""></option>
                @foreach ($lokasis as $rs)
                    <option value="{{ $rs->id }}" {{ $rs->nama_lokasi == $aset->lokasis->nama_lokasi}}>
                        {{ $rs->nama_lokasi }}
                    </option>
                @endforeach
            </select>
        </div>          
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" placeholder="" value="{{ $aset->harga }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Merk</label>
            <input type="text" name="merk" class="form-control" placeholder="" value="{{ $aset->merk }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Status Kepemilikan</label>
            <select name="status_kepemilikan" class="form-control">
                <option value="" {{ $aset->status_kepemilikan == ''  }}></option>
                <option value="Milik" {{ $aset->status_kepemilikan == 'Milik'  }}>Milik</option>
                <option value="Disewa" {{ $aset->status_kepemilikan == 'Disewa'  }}>Disewa</option>
                <option value="Dipinjam" {{ $aset->status_kepemilikan == 'Dipinjam'  }}>Dipinjam</option>
                <option value="Dalam Pemrosesan" {{ $aset->status_kepemilikan == 'Dalam Pemrosesan'  }}>Dalam Pemrosesan/Leasing</option>
                <option value="Dijual" {{ $aset->status_kepemilikan == 'Dijual'  }}>Dijual</option>
                <option value="Dalam Perbaikan" {{ $aset->status_kepemilikan == 'Dalam Perbaikan'  }}>Dalam Perbaikan</option>
                <option value="Daur ulang" {{ $aset->status_kepemilikan == 'Daur Ulang atau Pembuangan'  }}>Daur Ulang atau Pembuangan</option>
                <option value="Pemusnahan" {{ $aset->status_kepemilikan == 'Pemusnahan'  }}>Pemusnahan</option>
                <option value="Dalam Proses Akuisisi" {{ $aset->status_kepemilikan == 'Dalam Proses Akusisi'  }}>Dalam Proses Akusisi</option>
                <option value="Penggunaan Bersama" {{ $aset->status_kepemilikan == 'Penggunaan Bersama'  }}>Penggunaan Bersama</option>
            </select>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="" >{{ $aset->deskripsi }}</textarea>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="update" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
