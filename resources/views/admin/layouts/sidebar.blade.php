<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a href="javascript:void(0)" class="text-center">
            <img src="{{ asset('master/assets/img/pemko.png') }}" height="100px" >
        </a>

        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="{{ asset('master/assets/img/user.png') }}">
                        </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold"><?php echo auth()->user()->name ?></span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-8 collapse-brand">
                        {{-- <h1><a class="h2 mb-0 text-dark text-uppercase d-none d-lg-inline-block" href="#">UMKM2M Kecamatan Siantar Marimbun</a></h1> --}}
                        <h2 class="h2 text-dark">UMKM2M Kecamatan Siantar Marimbun</h2>
                    </div>
                    <div class="col-4 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item  class=" active>
                    <a class=" nav-link" href="/adminIndex"> <i class="ni ni-tv-2 text-primary"></i> Dashboard</a>
                </li>

                <div class="dropdown-divider"></div>

                @if(auth()->user()->role_id != 2)
                <li class="nav-item">
                    <a class="nav-link" href="/user">
                        <i class="fas fa-users text-yellow"></i> Data UMKM
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category">
                        <i class="fas fa-chart-pie text-warning"></i> Data Kategori
                    </a>
                </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link" href="/product">
                        <i class="fas fa-list-alt text-success"></i> Data Produk
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
