@extends('layouts.app')
@section('contents')
<h1 class="mb-0">Edit Profile</h1>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1></h1>
    <a href="{{ route('profile') }}" class="btn btn-secondary">Cancel</a>
</div>
<hr />
<form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')
            <div class="col mb-3">
                <label class="form-label">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" placeholder="" value="{{ $user->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <textarea class="form-control" name="Email" placeholder="" >{{ $user->email }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Nomor Handphone</label>
                <textarea class="form-control" name="Nomor Handphone" placeholder="" >{{ $user->nomor_handphone }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="Alamat" placeholder="" >{{ $user->alamat }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Unit</label>
                <textarea class="form-control" name="Unit" placeholder="" >{{ $user->unit }}</textarea>
            </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="update" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
