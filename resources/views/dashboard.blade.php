@extends('layouts.app')
  
@section('contents')

<div class="row">
  <div class="col-md-4">
      <div class="card bg-primary text-white">
          <div class="card-body">
              <h5 class="card-title">Total Aset</h5>
              <p class="card-text">{{ $totalAset }}</p>
          </div>
      </div>
  </div>
  <div class="col-md-4">
      <div class="card bg-danger text-white">
          <div class="card-body">
              <h5 class="card-title">Total Laporan Kerusakan</h5>
              <p class="card-text">{{ $totalKerusakan }}</p>
          </div>
      </div>
  </div>
  <div class="col-md-4">
      <div class="card bg-success text-white">
          <div class="card-body">
              <h5 class="card-title">Total Peminjaman Aset</h5>
              <p class="card-text">{{ $totalPeminjaman }}</p>
          </div>
      </div>
  </div>
</div>

@endsection
