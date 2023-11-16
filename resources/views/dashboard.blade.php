@extends('layouts.app')
@section('contents')
    <style>
        .card-body .fas {
            margin-bottom: 3px;
        }
    </style>
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <i class="fas fa-dollar-sign fa-2x"></i>
                    <h5 class="card-title">Total Aset</h5>
                    <div class="card-text">{{$aset_count}}</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <i class="fas fa-exclamation-circle fa-2x"></i>
                    <h5 class="card-title">Total Laporan Kerusakan</h5>
                    <p class="card-text">{{$kerusakan_count}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <i class="fas fa-shopping-cart fa-2x"></i>
                    <h5 class="card-title">Total Peminjaman Aset</h5>
                    <p class="card-text">{{$peminjaman_count}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
