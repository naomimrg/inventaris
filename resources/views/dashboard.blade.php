@extends('layouts.app')
@section('contents')
    <style>
        .separator {
            border-top: 2px solid #ddd;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        canvas {
            max-width: 100%;
        }

        .total-text {
            font-size: 14px;
            font-weight: normal;
        }

        .total-box {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin-right: 5px;
        }

        .total-box-way-kanan {
            background-color: #4e73df;
        }

        .total-box-lampung-tengah {
            background-color: #36a2eb;
        }

        .total-box-baik {
            background-color: #1cc88a;
        }

        .total-box-rusak-ringan {
            background-color: #f6c23e;
        }

        .total-box-rusak-berat {
            background-color: #e74a3b;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">Status Aset Kampus Way Kanan</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="statusAsetWayKananChart"></canvas>
                    </div>
                    <div class="card-footer">
                        <span class="total-text">
                            <span class="total-box total-box-baik"></span> Total Aset Baik:
                            {{ $totalAsetBaikWayKanan ?? 0 }}<br>
                            <span class="total-box total-box-rusak-ringan"></span> Total Aset Rusak Ringan:
                            {{ $totalAsetRusakRinganWayKanan ?? 0 }}<br>
                            <span class="total-box total-box-rusak-berat"></span> Total Aset Rusak Berat:
                            {{ $totalAsetRusakBeratWayKanan ?? 0 }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">Status Aset Kampus Lampung Tengah</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="statusAsetLampungTengahChart"></canvas>
                    </div>
                    <div class="card-footer">
                        <span class="total-text">
                            <span class="total-box total-box-baik"></span> Total Aset Baik:
                            {{ $totalAsetBaikLampungTengah ?? 0 }}<br>
                            <span class="total-box total-box-rusak-ringan"></span> Total Aset Rusak Ringan:
                            {{ $totalAsetRusakRinganLampungTengah ?? 0 }}<br>
                            <span class="total-box total-box-rusak-berat"></span> Total Aset Rusak Berat:
                            {{ $totalAsetRusakBeratLampungTengah ?? 0 }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">Total Data Aset</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="asetChart"></canvas>
                    </div>
                    <div class="card-footer">
                        <span class="total-box total-box-way-kanan"></span>
                        <span class="total-text">
                            Total Aset Kampus Way Kanan: {{ $totalAsetWayKanan ?? 0 }}
                        </span>
                        <br>
                        <span class="total-box total-box-lampung-tengah"></span>
                        <span class="total-text">
                            Total Aset Kampus Lampung Tengah: {{ $totalAsetLampungTengah ?? 0 }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">Total Harga Aset</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="hargaAsetChart"></canvas>
                    </div>
                    <div class="card-footer">
                        <span class="total-box total-box-way-kanan"></span>
                        <span class="total-text">
                            Total Harga Aset Kampus Way Kanan:
                            Rp {{ number_format($totalHargaAsetWayKanan ?? 0, 2, ',', '.') }}
                        </span>
                        <br>
                        <span class="total-box total-box-lampung-tengah"></span>
                        <span class="total-text">
                            Total Harga Aset Kampus Lampung Tengah:
                            Rp {{ number_format($totalHargaAsetLampungTengah ?? 0, 2, ',', '.') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
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
                    <li>Regulasi 4: Implementasi langkah-langkah keamanan fisik dan siber untuk melindungi aset universitas.
                    </li>
                    <li>Regulasi 5: Penerapan prosedur peminjaman aset sesuai dengan kebijakan.</li>
                    <li>Regulasi 6: Akurasi dan keteraturan pelaporan keuangan terkait aset.</li>
                    <li>Regulasi 7: Kepatuhan terhadap standar dan regulasi pendidikan yang mengatur manajemen aset di
                        institusi pendidikan tinggi.</li>
                    <li>Regulasi 8: Tingkat partisipasi dan pemahaman staf dan pemangku kepentingan terhadap kebijakan dan
                        praktik manajemen aset.</li>
                    <li>Regulasi 9: Kepatuhan terhadap pelaporan dan analisis secara berkala.</li>
                    <li>Regulasi 10: Ketersediaan informasi terbuka kepada pengguna terkait status perbaikan aset.</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var asetData = {
            labels: ['Kampus Way Kanan', 'Kampus Lampung Tengah'],
            datasets: [{
                label: 'Total Aset',
                backgroundColor: ['#4e73df', '#36a2eb'],
                data: [{{ $totalAsetWayKanan ?? 0 }}, {{ $totalAsetLampungTengah ?? 0 }}]
            }]
        };

        var asetChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    barPercentage: 0.4
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 10
                    }
                }]
            }
        };

        var ctx = document.getElementById('asetChart').getContext('2d');
        var asetChart = new Chart(ctx, {
            type: 'bar',
            data: asetData,
            options: asetChartOptions
        });

        var hargaAsetData = {
            labels: ['Kampus Way Kanan', 'Kampus Lampung Tengah'],
            datasets: [{
                label: 'Total Harga Aset',
                backgroundColor: ['#4e73df', '#36a2eb'],
                data: [{{ $totalHargaAsetWayKanan ?? 0 }}, {{ $totalHargaAsetLampungTengah ?? 0 }}]
            }]
        };

        var hargaAsetChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    barPercentage: 0.4
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 10000000000,
                        callback: function(value, index, values) {
                            return 'Rp ' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        }
                    }
                }]
            }
        };

        var hargaAsetCtx = document.getElementById('hargaAsetChart').getContext('2d');
        var hargaAsetChart = new Chart(hargaAsetCtx, {
            type: 'bar',
            data: hargaAsetData,
            options: hargaAsetChartOptions
        });

        var statusAsetWayKananData = {
            labels: ['Baik', 'Rusak Ringan', 'Rusak Berat'],
            datasets: [{
                data: [{{ $totalAsetBaikWayKanan ?? 0 }}, {{ $totalAsetRusakRinganWayKanan ?? 0 }},
                    {{ $totalAsetRusakBeratWayKanan ?? 0 }}
                ],
                backgroundColor: ['#1cc88a', '#f6c23e', '#e74a3b'] // Ganti warna untuk status "Baik"
            }]
        };

        var statusAsetLampungTengahData = {
            labels: ['Baik', 'Rusak Ringan', 'Rusak Berat'],
            datasets: [{
                data: [{{ $totalAsetBaikLampungTengah ?? 0 }}, {{ $totalAsetRusakRinganLampungTengah ?? 0 }},
                    {{ $totalAsetRusakBeratLampungTengah ?? 0 }}
                ],
                backgroundColor: ['#1cc88a', '#f6c23e', '#e74a3b'] // Ganti warna untuk status "Baik"
            }]
        };



        var statusAsetOptions = {
            maintainAspectRatio: false,
            responsive: true,
        };

        var statusAsetWayKananCtx = document.getElementById('statusAsetWayKananChart').getContext('2d');
        var statusAsetWayKananChart = new Chart(statusAsetWayKananCtx, {
            type: 'doughnut',
            data: statusAsetWayKananData,
            options: statusAsetOptions
        });

        var statusAsetLampungTengahCtx = document.getElementById('statusAsetLampungTengahChart').getContext('2d');
        var statusAsetLampungTengahChart = new Chart(statusAsetLampungTengahCtx, {
            type: 'doughnut',
            data: statusAsetLampungTengahData,
            options: statusAsetOptions
        });
    </script>
@endsection
