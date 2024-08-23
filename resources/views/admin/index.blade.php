@extends('admin.layouts.master')

@section('page_title')
    Dashboard | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('page_header')
    Dashboard
@endsection

@section('breadcrumb')
    <!-- Card stats -->
    <div class="row">
        <div class="col-xl-4 col-lg-4">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">UMKM</h5>
                            <br>
                            <span class="h2 font-weight-bold mb-0">{{ $users }}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Produk</h5>
                            <br>
                            <span class="h2 font-weight-bold mb-0">{{ $products }}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                <i class="fas fa-list-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="mb-0 text-center">Selamat Datang di Halaman Admin UMKM2M Kecamatan Siantar Marimbun</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
