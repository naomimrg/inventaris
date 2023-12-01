@extends('layouts.app')
@section('contents')
    <style>
        .separator {
            border-top: 2px solid #ddd;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-left-primary shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Total Data Aset</h6>
                    </div>
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $aset }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-left-danger shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-danger">Total Laporan Kerusakan</h6>
                    </div>
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kerusakan }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-exclamation-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-left-success shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success">Total Laporan Peminjaman</h6>
                    </div>
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $peminjaman }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 separator"></div>
        </div>

     <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">Kepatuhan Terhadap Regulasi dan Standar Aset</h6>
            </div>
            <div class="card-body">
                <p> Berikut beberapa indikator kepatuhan terhadap regulasi manajemen aset:</p>
                <ul>
                    <li>Regulasi 1: Ketersediaan dan pembaruan berkala kebijakan serta prosedur manajemen aset.</li>
                    <li>Regulasi 2: Regulasi inventaris yang teratur dan pembaruan data aset yang akurat.</li>
                    <li>Regulasi 3: Pelaksanaan pemeliharaan rutin dan perawatan pada aset fisik.</li>
                    <li>Regulasi 4: Implementasi langkah-langkah keamanan fisik dan siber untuk melindungi aset universitas.</li>
                    <li>Regulasi 5: Penerapan prosedur peminjaman aset sesuai dengan kebijakan.</li>
                    <li>Regulasi 6: Akurasi dan keteraturan pelaporan keuangan terkait aset.</li>
                    <li>Regulasi 7: Kepatuhan terhadap standar dan regulasi pendidikan yang mengatur manajemen aset di institusi pendidikan tinggi.</li>
                    <li>Regulasi 8: Tingkat partisipasi dan pemahaman staf dan pemangku kepentingan terhadap kebijakan dan praktik manajemen aset.</li>
                    <li>Regulasi 9: Kepatuhan terhadap pelaporan dan analisis secara berkala.</li>
                    <li>Regulasi 10: Ketersediaan informasi terbuka kepada pengguna terkait status perbaikan aset.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
