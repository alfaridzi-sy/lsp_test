@extends('admin.layouts.master')

@section('page_title')
    Transaksi | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar Pesanan </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-0">Daftar Pesanan</h2>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr class="text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Kode Pesanan</th>
                    <th scope="col">Nama Konsumen</th>
                    <th scope="col">Tanggal Pesanan</th>
                    <th scope="col">Alamat Pengiriman</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Nama UMKM</th>
                    <th scope="col">Status Pesanan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $k => $od)
                    <tr class="text-center">
                        <td scope="row">{{$k + 1}}</td>
                        <td scope="row">{{$od -> order_code}}</td>
                        <td scope="row">{{$od -> customer_name}}</td>
                        <td scope="row">{{$od -> order_date}}</td>
                        <td scope="row">{{$od -> shipping_address}} - {{$od -> postal_code}}</td>
                        <td scope="row">{{$od -> price_amount}}</td>
                        <td scope="row">{{$od -> user -> name}}</td>
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
                        <td scope="row">
                            <div class="btn-group" role="group">
                                <a href="{{route('order.show',['order' => $od->order_id])}}" role="button" class="btn btn-sm btn-info">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{route('order.edit',['order' => $od->order_id])}}" role="button" class="btn btn-sm btn-warning">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
