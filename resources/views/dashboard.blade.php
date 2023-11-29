@extends('layouts.app')
@section('contents')
    <style>
        .card-body .fas {
            margin-bottom: 3px;
        }

        .chart-container {
            margin-top: 20px;
        }

        .chart {
            width: 100%;
            height: 30px;
            background-color: #f0f0f0;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 10px;
        }

        .bar {
            height: 100%;
        }

        .good {
            background-color: #4CAF50; 
        }

        .average {
            background-color: #FFC107; 
        }

        .bad {
            background-color: #e54141;
        }

        .condition-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .condition-text {
            font-size: 14px;
            margin-bottom: 5px;
        }

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

            {{-- <div class="col-md-12">
                <div class="condition-title">Daftar Aset</div>
                <div class="chart-container">
                    <div class="condition-text">Kondisi Baik</div>
                    <div class="chart">
                        <div class="bar good" style="width: 60%;"></div>
                    </div>
                </div>
                <div class="chart-container">
                    <div class="condition-text">Kondisi Kurang Baik</div>
                    <div class="chart">
                        <div class="bar average" style="width: 30%;"></div>
                    </div>
                </div>
                <div class="chart-container">
                    <div class="condition-text">Kondisi Buruk</div>
                    <div class="chart">
                        <div class="bar bad" style="width: 10%;"></div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
