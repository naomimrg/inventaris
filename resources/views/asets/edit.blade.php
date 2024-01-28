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
                    <option value="1 - Properti">1 - Properti</option>
                        <option value="2 - Peralatan">2 - Peralatan</option>
                        <option value="3 - Kendaraan">3 - Kendaraan</option>
                        <option value="4 - Inventaris">4 - Inventaris</option>
                        <option value="5 - Elektronik">5 - Elektronik</option>
                        <option value="6 - Furniture">6 - Furniture</option>
                        <option value="0 - Lainnya">0 - Lainnya</option>
                    
                </select>
            </div>
            <div class="col">
                <select name="bidang" class="form-control" id="bidang">
                    <option value="">Pilih Bidang</option>
                </select>
            </div>
            <div class="col">
                <select name="kelompok" class="form-control" id="kelompok">
                    <option value="">Pilih Kelompok</option>
                </select>
            </div>
            <div class="col">
                <select name="sub_kelompok" class="form-control" id="sub_kelompok">
                    <option value="">Pilih Sub-Kelompok</option>
                </select>
            </div>
            <div class="col">
                <select name="sub_sub_kelompok" class="form-control" id="sub_sub_kelompok">
                    <option value="">Pilih Sub-Sub Kelompok</option>
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
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" {{ $kategori->id == $aset->kategoris->id ? 'selected' : '' }}>
                        {{ $kategori->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div> 
        <div class="col mb-3">
            <label class="form-label">Lokasi Fisik Aset</label>
            <select name="lokasis_id" class="form-control">
                <option value="">Pilih Lokasi Fisik Aset</option>
                @foreach ($lokasis as $lokasi)
                    <option value="{{ $lokasi->id }}" {{ $lokasi->id == $aset->lokasis->id ? 'selected' : '' }}>
                        {{ $lokasi->nama_lokasi }}
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
    <script>
        var golonganSelect = document.getElementById('golongan');
        var bidangSelect = document.getElementById('bidang');
        var kelompokSelect = document.getElementById('kelompok');
        var subKelompokSelect = document.getElementById('sub_kelompok');
        var subSubKelompokSelect = document.getElementById('sub_sub_kelompok');

        var kategoriOptions = {
            "1 - Properti": ["01 - Tanah", "02 - Bangunan"],
            "2 - Peralatan": ["01 - Peralatan Laboratorium"],
            "3 - Kendaraan": ["01 - Mobil"],
            "4 - Inventaris": ["01 - Inventaris Kantor"],
            "5 - Elektronik": ["01 - Komputer", "02 - Televisi", "03 - Audio Visual", "04 - Mikrofon"],
            "6 - Furniture": ["01 - Furniture Kursi", "02 - Furniture Papan Tulis"],
        };

        // kelompok
        var kelompokOptions = {
            "01 - Tanah": ["11 - Pendidikan"],
            "02 - Bangunan": ["11 - Pendidikan"],
            "01 - Komputer": ["11 - Komputer Desktop"],
            "03 - Audio Visual": ["11 - Speaker"],
            "04 - Mikrofon": ["11 - Mikrofon Kondensor", "12 - Mikorofon Dinamis", "13 - Mikrofon USB"],
            "01 - Furniture Kursi": ["11 - Kursi Pimpinan Fakultas Ekonomi dan Bisnis", "12 - Kursi Mahasiswa", "13 - Kursi Laboratorium", "14 - Sofa"],
            "02 - Furniture Papan Tulis": ["11 - Papan Tulis Dinding"],

        };

        // sub-kelompok
        var subKelompokOptions = {
            "11 - Pendidikan":["11 - Universitas"],
            "11 - Komputer Desktop": ["11 - Komputer Staf", "12 - Komputer Laboratorium"],
            "11 - Speaker": ["11 - Aktif (Powered)", "12 - Pasif (Unpowered)"],
            "11 - Mikrofon Kondensor":["11 - Mikrofon Kondensor Studio"],
            "12 - Mikrofon Dinamis": ["11 - Mikrofon Dinamis Panggung"],
            "13 - Mikrofon USB": ["11 - Mikrofon USB Perekam"],
            "12 - Kursi Mahasiswa": ["11 - Kursi Mahasiswa Plastik Single Seat", "12 - Kursi Mahasiswa Plastik Double Seat", "13 - Kursi Mahasiswa Kayu Single Seat","14 -  Kursi Mahasiswa Kayu Double Seat" ],
            "11 - Papan Tulis Dinding": ["11 - Papan Tulis Hitam Kayu", "12 - Papan Tulis Putih" ],
            "14 - Sofa": ["11 - Sofa Ruang Tamu", "12 - Sofa Kantor"],
            
        };

        // sub-sub-kelompok
        var subSubKelompokOptions = {
            "11 - Universitas": ["011 - Tanah Belakang Kampus", "012 -  Tanah Depan Kampus", "013 - Gedung Administrasi", "014 - Gedung Kuliah", "015 - Gedung Laboratorium"],
            "11 - Komputer Staf": ["011 - Komputer Staf Departemen X", "012 - Komputer STaf Departemen Y"],
            "12 - Komputer Laboratorium": ["011 - Komputer Laboratorium 1", "012 - Komputer Laboratorium 2"],
            "11 - Aktif (Powered)": ["011 - Bluetooth Speakers", "012 - Studio Monitors", "013 - Portable Speakers"],
            "12 - Pasif (Unpowered)": ["011 - Bookshelf Speakers", "012 - Floorstanding Speakers"],
            "13 - Kursi Mahasiswa Kayu Single Seat": ["014 - Kursi Mahasiswa Lipat Plastik", "015 - Kursi Mahasiswa Lipat Kayu"],
            "11 - Papan Tulis Hitam Kayu": ["11 - Papan Tulis Hitam Kayu Standar"],
            "12 - Papan Tulis Putih": ["11 - Papan Tulis Putih Magnetik dengan Bingkai Alumunium"],
            "11 - Sofa Ruang Tamu": ["001 - Sofa 2 Seater", "002 - Sofa 3 Seater", "003 - Sofa L-Shape"],
            "12 - Sofa Kantor": ["001 - Sofa Kantor Model A", "002 - Sofa Kantor Model B", "003 - Sofa Kantor Model C"],
        };

        function updateBidangOptions() {
            var selectedGolongan = golonganSelect.value;

            bidangSelect.innerHTML = '<option value="">Pilih Bidang</option>';

            if (kategoriOptions[selectedGolongan]) {
                kategoriOptions[selectedGolongan].forEach(function (option) {
                    var newOption = document.createElement('option');
                    newOption.value = option;
                    newOption.text = option;
                    bidangSelect.add(newOption);
                });
            }
        }

        function updateKelompokOptions() {
            var selectedBidang = bidangSelect.value;
            kelompokSelect.innerHTML = '<option value="">Pilih Kelompok</option>';

            if (kelompokOptions[selectedBidang]) {
                kelompokOptions[selectedBidang].forEach(function (option) {
                    var newOption = document.createElement('option');
                    newOption.value = option;
                    newOption.text = option;
                    kelompokSelect.add(newOption);
                });
            }
        }

        function updateSubKelompokOptions() {
            var selectedKelompok = kelompokSelect.value;
            subKelompokSelect.innerHTML = '<option value="">Pilih Sub-Kelompok</option>';

            if (subKelompokOptions[selectedKelompok]) {
                subKelompokOptions[selectedKelompok].forEach(function (option) {
                    var newOption = document.createElement('option');
                    newOption.value = option;
                    newOption.text = option;
                    subKelompokSelect.add(newOption);
                });
            }
        }

        function updateSubSubKelompokOptions() {
            var selectedSubKelompok = subKelompokSelect.value;
            subSubKelompokSelect.innerHTML = '<option value="">Pilih Sub-Sub Kelompok</option>';

            if (subSubKelompokOptions[selectedSubKelompok]) {
                subSubKelompokOptions[selectedSubKelompok].forEach(function (option) {
                    var newOption = document.createElement('option');
                    newOption.value = option;
                    newOption.text = option;
                    subSubKelompokSelect.add(newOption);
                });
            }
        }

        golonganSelect.addEventListener('change', function () {
            updateBidangOptions();
            kelompokSelect.innerHTML = '<option value="">Pilih Kelompok</option>';
            subKelompokSelect.innerHTML = '<option value="">Pilih Sub-Kelompok</option>';
            subSubKelompokSelect.innerHTML = '<option value="">Pilih Sub-Sub Kelompok</option>';
        });

        bidangSelect.addEventListener('change', function () {
            updateKelompokOptions();
            subKelompokSelect.innerHTML = '<option value="">Pilih Sub-Kelompok</option>';
            subSubKelompokSelect.innerHTML = '<option value="">Pilih Sub-Sub Kelompok</option>';
        });

        kelompokSelect.addEventListener('change', function () {
            updateSubKelompokOptions();
            subSubKelompokSelect.innerHTML = '<option value="">Pilih Sub-Sub Kelompok</option>';
        });

        subKelompokSelect.addEventListener('change', function () {
            updateSubSubKelompokOptions();
        });
    </script>
@endsection
