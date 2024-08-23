<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Login | UMKM2M Kecamatan Siantar Marimbun
    </title>
    <!-- Favicon -->
    <link href="{{ asset('master/assets/img/fav.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('master/assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
    <link href="{{ asset('master/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('master/assets/css/argon-dashboard.css?v=1.1.0')}}" rel="stylesheet" />
</head>

<body class="bg-default">
    <div class="main-content">

        <!-- Header -->
        <div class="header bg-gradient-warning py-7 py-lg-8">
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>

        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header bg-transparent pb-3">
                            <div class="text-muted text-center mt-2 mb-3">
                                <a href="javascript:void(0)" class="text-center">
                                    <img src="{{ asset('master/assets/img/pemko.png') }}" height="125px" >
                                </a>
                                <br><br>
                                <p class="text-lead text-dark">
                                    Selamat Datang di Sistem UMKM2M <br>
                                    Kecamatan Siantar Marimbun
                                </p>
                            </div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form" method="POST" action="{{ route('admin.authenticate') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                        </div>
                                        <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Password">
                                    </div>
                                </div>
                                <div class="text-center">
                                <button type="submit" class="btn btn-default my-4">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="py-7">
            <div class="container">
                <div class="copyright text-center text-xl-center text-muted">
                    <p class="text-dark">
                        Copyright © 2024 <a href="javascript:void(0)" class="font-weight-bold ml-1 text-center text-danger">Made by Love</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <!--   Core   -->
    <script src="{{ asset('master/assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('master/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!--   Optional JS   -->
    <!--   Argon JS   -->
    <script src="{{ asset('master/assets/js/argon-dashboard.min.js?v=1.1.0')}}"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-dashboard-free"
        });
    </script>
</body>

</html>
