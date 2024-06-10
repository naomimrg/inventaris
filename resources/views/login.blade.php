<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; {{ config('app.name') }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/fontawesome/css/all.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/components.css') }}">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <img src="../assets/img/logouniv.png" alt="logo" width="80"
                            class="shadow-light squared mb-5 mt-2">
                        <h5 class="text-dark font-weight-normal font-weight-bold">Silahkan Login</h5>
                        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" type="username"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    tabindex="1" required autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') @enderror"
                                    name="password" tabindex="2" required>
                                <div class="invalid-feedback">
                                    Mohon masukkan password!
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            @if ($errors->has('error'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('error') }}
                                </div>
                            @endif

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right"
                                    tabindex="4">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                    data-background="https://img.inews.co.id/media/600/files/networks/2023/07/26/fcf63_kabar-gembira-unila-program-studi-luar-kampus-utama-way-kanan-mulai-terima-mahasiswa-baru-foto-humas-pemkab-way-kanan.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold" id="greetings"></h1>
                                <h5 class="font-weight-normal text-muted-transparent">Selamat Datang</h5>
                                <h5 class="font-weight-normal text-muted-transparent">Sistem Informasi Manajemen Aset
                                    PSDKU Universitas Lampung Way Kanan</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ url('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ url('assets/js/moment.min.js') }}"></script>
    <script src="{{ url('assets/js/stisla.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ url('assets/js/scripts.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    @include('layouts.partials.greetings')

    <script>
        $(document).ready(function() {
            $("#greetings").html(greetings());
        });
    </script>
</body>

</html>
