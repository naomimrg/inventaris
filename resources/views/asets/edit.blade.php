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
        <div class="row">
            <div class="col">
                <select name="golongan" class="form-control" id="golongan">
                    <option value="">Pilih Golongan</option>
                    <option value="1 - Tanah">1 - Tanah</option>
                    <option value="2 - Bangunan">2 - Bangunan</option>
                    <option value="3 - Peralatan">3 - Peralatan</option>
                    <option value="4 - Kendaraan">4 - Kendaraan</option>
                    <option value="5 - Inventaris">5 - Inventaris</option>
                    <option value="6 - Elektronik">6 - Elektronik</option>
                    <option value="7 - Furniture">7 - Furniture</option>
                    <option value="0 - Lainnya">0 - Lainnya</option>
                </select>
            </div>
            <div class="col">
                <select name="bidang" class="form-control" id="bidang">
                    <option value="">Pilih Bidang</option>
                    <option value="01 - Gedung Pendidikan">01 - Gedung Pendidikan</option>
                    <option value="02 - Gedung Administrasi">02 - Gedung Administrasi</option>
                    <option value="03 - Tanah Utama">03 - Tanah Utama</option>
                    <option value="04 - Inventaris Kantor">04 - Inventaris Kantor</option>
                    <option value="05 - Peralatan Komputer">05 - Peralatan Komputer</option>
                    <option value="06 - Peralatan Laboratorium">06 - Peralatan Laboratorium</option>
                    <option value="07 - Audio Visual">07 - Audio Visual</option>
                    <option value="08 - Furniture Kursi">08 - Furniture Kursi</option>
                    <option value="09 - Furniture Papan Tulis">09 - Furniture Papan Tulis</option>
                    <option value="10 - Teknologi Informasi">10 - Teknologi Informasi</option>

                    <option value="99 - Lainnya">99 - Lainnya</option>
                </select>
            </div>
            <div class="col">
                <select name="kelompok" class="form-control" id="kelompok">
                    <option value="">Pilih Kelompok</option>
                    <option value="11 - Gedung Kuliah">11 - Gedung Kuliah</option>
                    <option value="12 - Gedung Laboratorium">12 - Gedung Laboratorium</option>
                    <option value="13 - Tanah Kampus Utama">13 - Tanah Kampus Utama</option>
                    <option value="14 - Tanah Parkir">14 - Tanah Parkir</option>
                    <option value="15 - Komputer Desktop">15 - Komputer Desktop</option>
                    <option value="16 - Peralatan Server">16 - Peralatan Server</option>
                    <option value="17 - Inventaris Kursi dan Meja">17 - Inventaris Kursi dan Meja</option>
                    <option value="18 - Perangkat Audio">18 - Perangkat Audio</option>
                    <option value="19 - Kursi Mahasiswa">19 - Kursi Mahasiswa</option>
                    <option value="20 - Papan Tulis Dinding">20 - Papan Tulis Dinding</option>
                    <option value="21 - Kursi Pimpinan">21 - Kursi Pimpinan</option>
                    <option value="22 - Kursi Dosen">22 - Kursi Dosen</option>
                    <option value="23 - Keamanan">23 - Keamanan</option>


                    <option value="99 - Lainnya">99 - Lainnya</option>
                </select>
            </div>
            <div class="col">
                <select name="sub_kelompok" class="form-control" id="sub_kelompok">
                    <option value="">Pilih Sub-Kelompok</option>
                    <option value="01 - Gedung Aula">01 - Gedung Aula</option>
                    <option value="02 - Gedung Kelas">02 - Gedung Kelas</option>
                    <option value="03 - Tanah Bangunan A">03 - Tanah Bangunan A</option>
                    <option value="04 - Tanah Bangunan B">04 - Tanah Bangunan B</option>
                    <option value="05 - Komputer Staf">05 - Komputer Staf</option>
                    <option value="06 - Komputer Laboratorium">06 - Komputer Laboratorium</option>
                    <option value="07 - Gedung Pusat Perpustakaan">07 - Gedung Pusat Perpustakaan</option>
                    <option value="08 - Mikrofon (Mic)">08 - Mikrofon/Mic</option>
                    <option value="09 - Speaker">09 - Speaker</option>
                    <option value="10 - Prosesor Audio">10 - Prosesor Audio</option>
                    <option value="11 - Kursi Mahasiswa Plastik">11 - Kursi Mahasiswa Plastik</option>
                    <option value="12 - Kursi Mahasiswa Lipat">12 - Kursi Mahasiswa Lipat</option>
                    <option value="13 - Papan Tulis Putih Magnetik">13 - Papan Tulis Putih Magnetik</option>
                    <option value="14 - Papan Tulis Hitam Kayu">14 - Papan Tulis Hitam Kayu</option>
                    <option value="15 - Papan Tulis Interaktif">15 - Papan Tulis Interaktif</option>
                    <option value="16 - Kursi Pimpinan Fakultas Ekonomi dan Bisnis">16 - Kursi Pimpinan Fakultas Ekonomi dan Bisnis</option>
                    <option value="17 - Sistem Keamanan Fisik">17 - Sistem Keamanan Fisik</option>

                    <option value="99 - Lainnya">99 - Lainnya</option>
                </select>
            </div>
            <div class="col">
                <select name="sub_sub_kelompok" class="form-control" id="sub_sub_kelompok">
                    <option value="">Pilih Sub-Sub Kelompok</option>
                    <option value="001 - Ruang Aula Utama">001 - Ruang Aula Utama</option>
                    <option value="002 - Ruang Aula Depan">002 - Ruang Aula Depan</option>
                    <option value="003 - Tanah Depan Gedung A">003 - Tanah Depan Gedung A</option>
                    <option value="004 - Tanah Belakang Gedung A">004 - Tanah Belakang Gedung A</option>
                    <option value="005 - Komputer Staf Departemen X">005 - Komputer Staf Departemen X</option>
                    <option value="006 - Komputer Staf Departemen Y">006 - Komputer Staf Departemen Y</option>
                    <option value="007 - Mikrofon Kondensor">007 - Mikrofon Kondensor</option>
                    <option value="008 - Mikrofon Dinamis">008 - Mikrofon Dinamis</option>
                    <option value="009 - Speaker Aktif">009 - Speaker Aktif</option>
                    <option value="010 - Speaker Pasif">010 - Speaker Pasif</option>
                    <option value="011 - Prosesor Audio Digital">011 - Prosesor Audio Digital</option>
                    <option value="012 - Kursi Mahasiswa Plastik Single Seat">012 - Kursi Mahasiswa Plastik Single Seat</option>
                    <option value="013 - Kursi Mahasiswa Plastik Double Seat">013 - Kursi Mahasiswa Plastik Double Seat</option>
                    <option value="014 - Kursi Mahasiswa Lipat Plastik">014 - Kursi Mahasiswa Lipat Plastik</option>
                    <option value="015 - Kursi Mahasiswa Lipat Kayu">015 - Kursi Mahasiswa Lipat Kayu</option>
                    <option value="016 - Papan Tulis Putih Magnetik dengan Bingkai Alumunium">016 - Papan Tulis Putih Magnetik dengan Bingkai Alumunium</option>
                    <option value="017 - Papan Tulis Hitam Kayu Standar">017 - Papan Tulis Hitam Kayu Standar</option>
                    <option value="018 - Papan Tulis Interaktif dengan Proyektor Terintegrasi">018 - Papan Tulis Interaktif dengan Proyektor Terintegrasi</option>
                    <option value="019 - Komputer Laboratorium 1">019 - Komputer Laboratorium 1</option>
                    <option value="020 - Komputer Laboratorium 2">020 - Komputer Laboratorium 2</option>
                    <option value="021 - Kursi Pimpinan Jurusan Akuntansi">021 - Kursi Pimpinan Jurusan Akuntansi</option>
                    <option value="022 - CCTV">022 - CCTV</option>


                    <option value="99 - Lainnya">099 - Lainnya</option>
                </select>
            </div>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nomor Register</label>
            <input type="number" name="nomor_register" class="form-control" placeholder="" value="{{ $aset->nomor_register }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Pembelian</label>
            <input type="date" name="tanggal_pembelian" class="form-control" placeholder="" value="{{ $aset->tanggal_pembelian }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Kategori Aset</label>
            <select name="kategoris_id" class="form-control">
                <option value="">Pilih Kategori Aset</option>
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
                <option value="">Pilih Lokasi Fisik Aset</option>
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
                <option value="" {{ $aset->status_kepemilikan == ''  }}>Pilih Status Kepemilikan</option>
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
            <label class="form-label">Kondisi Aset</label>
            <select name="kondisi" class="form-control">
                <option value="" {{ $aset->kondisi == ''  }}>Pilih Kondisi Aset</option>
                <option value="Baik" {{ $aset->kondisi == 'Baik'  }}>Baik</option>
                <option value="Rusak Ringan" {{ $aset->kondisi == 'Rusak Ringan'  }}>Rusak Ringan</option>
                <option value="Rusak Berat" {{ $aset->kondisi == 'Rusak Berat'  }}>Rusak Berat</option>
            </select>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="" required style="white-space: pre-line;" >{{ $aset->deskripsi }}</textarea>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="update" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
