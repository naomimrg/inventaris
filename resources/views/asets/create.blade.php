@extends('layouts.app')
@section('title', 'Tambah Data Aset')
@section('contents')
    <hr />
    <form action="{{ route('asets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Aset *</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kode_aset" class="form-label">Kode Aset *</label>
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
                        <option value="11 - Perabotan">11 - Perabotan</option>
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
                        <option value="23 - Kursi Laboratorium">23 - Kursi Laboratorium</option>
                        <option value="23 - Keamanan">23 - Keamanan</option>
                        <option value="24 - Rak Buku">24 - Rak Buku</option>
                        <option value="25 - Meja ">25 - Meja</option>
                        <option value="26 - Sofa ">26 - Sofa</option>
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
                        <option value="18 - Rak Buku Dinding">18 - Rak Buku Dinding</option>
                        <option value="19 - Rak Buku Berdiri">19 - Rak Buku Berdiri</option>
                        <option value="20 - Meja Dosen ">20 - Meja Dosen </option>
                        <option value="21 - Meja Laboratorium">21 - Meja Laboratorium</option>
                        <option value="26 - Sofa Ruang Tamu ">26 - Sofa Ruang Tamu</option>
                        <option value="27 - Sofa Ruang Pimpinan ">27 - Sofa Ruang Pimpinan</option>
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
                        <option value="023 - Rak Buku Besi">023 - Rak Buku Besi</option>
                        <option value="024 - Rak Buku Kayu">024 - Rak Buku Kayu</option>
                        <option value="025 - Meja Kayu">025 - Meja Kayu</option>
                        <option value="026 - Meja Logam">026 - Meja Logam</option>
                        <option value="027 - Sofa Penerima Tamu ">027 - Sofa Penerima Tamu</option>
                        <option value="028 - Sofa Santai">028 - Sofa Santai</option>
                        <option value="099 - Lainnya">099 - Lainnya</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="nomor_register" class="form-label">Nomor Register *</label>
            <input type="number" name="nomor_register" class="form-control" id="nomor_register" required>
            @error('nomor_register')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian *</label>
            <input type="date" name="tanggal_pembelian" class="form-control" id="tanggal_pembelian" required>
            @error('tanggal_pembelian')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kategoris_id" class="form-label">Kategori *</label>
            <div class="input-group">
                <select name="kategoris_id" class="form-control">
                    <option value="">Pilih Kategori</option>
                    @foreach ($kategoris as $rs)
                        <option value="{{ $rs->id }}">{{ $rs->nama_kategori }}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="lokasis_id" class="form-label">Lokasi Fisik Aset *</label>
            <div class="input-group">
                <select name="lokasis_id" class="form-control">
                    <option value="">Pilih Lokasi</option>
                    @foreach ($lokasis as $rs)
                        <option value="{{ $rs->id }}">{{ $rs->nama_lokasi }}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="kampuses_id" class="form-label">Lokasi Kampus *</label>
            <div class="input-group">
                <select name="kampuses_id" class="form-control">
                    <option value="">Pilih Lokasi Kampus</option>
                    @foreach ($kampuses as $rs)
                        <option value="{{ $rs->id }}">{{ $rs->nama}}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga *</label>
            <input type="number" name="harga" class="form-control" id="harga" required>
            @error('harga')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" name="merk" class="form-control" id="merk">
        </div>
        <div class="mb-3">
            <label for="luas" class="form-label">Luas</label>
            <input type="text" name="luas" class="form-control" id="luas">
        </div>
        <div class="mb-3">
            <label for="status_kepemilikan" class="form-label">Status Kepemilikan *</label>
            <select name="status_kepemilikan" class="form-control" id="status_kepemilikan">
                <option value="">Pilih Status Kepemilikan</option>
                <option value="Milik">Milik</option>
                <option value="Disewa">Disewa</option>
                <option value="Dipinjam">Dipinjam</option>
                <option value="Dalam Pemrosesan">Dalam Pemrosesan/Leasing</option>
                <option value="Dijual">Dijual</option>
                <option value="Dalam Perbaikan">Dalam Perbaikan</option>
                <option value="Daur Ulang atau Pembuangan">Daur Ulang atau Pembuangan</option>
                <option value="Pemusnahan">Pemusnahan</option>
                <option value="Dalam Proses Akuisisi">Dalam Proses Akuisisi</option>
                <option value="Penggunaan Bersama">Penggunaan Bersama</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kondisi" class="form-label">Kondisi Aset *</label>
            <select name="kondisi" class="form-control" id="kondisi">
                <option value="">Pilih Kondisi Aset</option>
                <option value="Baik">Baik</option>
                <option value="Rusak Ringan">Rusak Ringan</option>
                <option value="Rusak Berat">Rusak Berat</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi *</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" required style="white-space: pre-line;"></textarea>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
