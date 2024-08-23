@extends('admin.layouts.master')

@section('page_title')
    Laporan | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('page_header')
    Laporan Penjualan
@endsection

@section('breadcrumb')
    <!-- Card stats -->
    <div class="row">
        <div class="col-xl-4 col-lg-4">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Penjualan Hari Ini</h5>
                            <br>
                            <span class="h2 font-weight-bold mb-0">{{ $ordersToday }} Pesanan - Rp. {{ $salesToday }}</span>
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
                            <h5 class="card-title text-uppercase text-muted mb-0">Penjualan Minggu Ini</h5>
                            <br>
                            <span class="h2 font-weight-bold mb-0">{{ $ordersThisWeek }} Pesanan - Rp. {{ $salesThisWeek }}</span>
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
                            <h5 class="card-title text-uppercase text-muted mb-0">Penjualan Bulan Ini</h5>
                            <br>
                            <span class="h2 font-weight-bold mb-0">{{ $ordersThisMonth }} Pesanan - Rp. {{ $salesThisMonth }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row align-items-center">

    <div class="col-xl-4 col-lg-4">
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <h4 class="card-title text-uppercase text-muted mb-0 text-center">Data Penjualan Harian</h5>
                    <br>
                <table class="table align-items-center table-responsive">
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Kode Pesanan</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Status Pesanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ordersTodayData as $k => $od)
                            <tr class="text-center">
                                <td scope="row">{{$k + 1}}</td>
                                <td scope="row">{{$od -> order_code}}</td>
                                <td scope="row">{{$od -> price_amount}}</td>
                                <td scope="row">
                                    <?php
                                        if ($od -> order_status == 1) {
                                            echo "<button class='btn btn-sm btn-danger'>Menunggu Pembayaran</button>";
                                        } else if ($od -> order_status == 2){
                                            echo "<button class='btn btn-sm btn-info'>Proses Pengemasan</button>";
                                        } else if ($od -> order_status == 3){
                                            echo "<button class='btn btn-sm btn-primary'>Dalam Pengiriman</button>";
                                        } else if ($od -> order_status == 4){
                                            echo "<button class='btn btn-sm btn-success'>Pesanan Selesai</button>";
                                        } else if ($od -> order_status == 5){
                                            echo "<button class='btn btn-sm btn-secondary'>Pesanan Dibatalkan</button>";
                                        } else {
                                            echo "<button class='btn btn-sm btn-secondary'>Status Tidak Terdaftar</button>";
                                        }
                                    ?>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-4">
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <h4 class="card-title text-uppercase text-muted mb-0 text-center">Data Penjualan Mingguan</h5>
                <br>
                <table class="table align-items-center table-responsive">
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Kode Pesanan</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Status Pesanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ordersThisWeekData as $k => $ow)
                            <tr class="text-center">
                                <td scope="row">{{$k + 1}}</td>
                                <td scope="row">{{$ow -> order_code}}</td>
                                <td scope="row">{{$ow -> price_amount}}</td>
                                <td scope="row">
                                    <?php
                                        if ($ow -> order_status == 1) {
                                            echo "<button class='btn btn-sm btn-danger'>Menunggu Pembayaran</button>";
                                        } else if ($ow -> order_status == 2){
                                            echo "<button class='btn btn-sm btn-info'>Proses Pengemasan</button>";
                                        } else if ($ow -> order_status == 3){
                                            echo "<button class='btn btn-sm btn-primary'>Dalam Pengiriman</button>";
                                        } else if ($ow -> order_status == 4){
                                            echo "<button class='btn btn-sm btn-success'>Pesanan Selesai</button>";
                                        } else if ($ow -> order_status == 5){
                                            echo "<button class='btn btn-sm btn-secondary'>Pesanan Dibatalkan</button>";
                                        } else {
                                            echo "<button class='btn btn-sm btn-secondary'>Status Tidak Terdaftar</button>";
                                        }
                                    ?>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-4">
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <h4 class="card-title text-uppercase text-muted mb-0 text-center">Data Penjualan Bulanan</h5>
                    <br>
                <table class="table align-items-center table-responsive">
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Kode Pesanan</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Status Pesanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ordersThisMonthData as $k => $om)
                            <tr class="text-center">
                                <td scope="row">{{$k + 1}}</td>
                                <td scope="row">{{$om -> order_code}}</td>
                                <td scope="row">{{$om -> price_amount}}</td>
                                <td scope="row">
                                    <?php
                                        if ($om -> order_status == 1) {
                                            echo "<button class='btn btn-sm btn-danger'>Menunggu Pembayaran</button>";
                                        } else if ($om -> order_status == 2){
                                            echo "<button class='btn btn-sm btn-info'>Proses Pengemasan</button>";
                                        } else if ($om -> order_status == 3){
                                            echo "<button class='btn btn-sm btn-primary'>Dalam Pengiriman</button>";
                                        } else if ($om -> order_status == 4){
                                            echo "<button class='btn btn-sm btn-success'>Pesanan Selesai</button>";
                                        } else if ($om -> order_status == 5){
                                            echo "<button class='btn btn-sm btn-secondary'>Pesanan Dibatalkan</button>";
                                        } else {
                                            echo "<button class='btn btn-sm btn-secondary'>Status Tidak Terdaftar</button>";
                                        }
                                    ?>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
