@extends('layouts.app')
@section('contents')
    <h1 class="mb-0">Profile</h1>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1></h1>
        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profil</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="{{ route('profile.update') }}">
        @csrf
        <div class="row">
            <div class="col-12 mb-3">
                <label class="labels">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="" disabled
                    value="{{ auth()->user()->name }}">
            </div>
            <div class="col-12 mb-3">
                <label class="labels">Email</label>
                <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}"
                    placeholder="" disabled>
            </div>
            <div class="col-12 mb-3">
                <label class="labels">Nomor Handphone</label>
                <input type="text" name="nomor_handphone" class="form-control" placeholder="" disabled
                    value="{{ auth()->user()->nomor_handphone }}">
            </div>
            <div class="col-12 mb-3">
                <label class="labels">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ auth()->user()->alamat }}"
                    placeholder="" disabled>
            </div>
            <div class="col-12 mb-3">
                <label class="labels">Unit</label>
                <input type="text" name="unit" class="form-control" placeholder="" disabled
                    value="{{ auth()->user()->unit }}">
            </div>
        </div>
    </form>
@endsection
