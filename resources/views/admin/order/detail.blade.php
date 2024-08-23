@extends('admin.layouts.master')

@section('page_title')
    Transaksi | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Pesanan </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
    @foreach($details as $dt)
    <div class="card shadow">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="mb-0">{{ $dt -> product -> product_name }}</h2>
                </div>
            </div>
        </div>
        <div class="card-body border-0">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('storage/' . $dt->product->images->first()->image_path) }}" width= "300px" >
                </div>
                <div class="col-8">
                    <h1 class="h3">{{ $dt -> product -> product_name }}</h1>
                    <p>Rp. {{ $dt -> price }} x {{ $dt -> amount }}</p>
                    <p >{{ $dt -> product -> description }}</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    @endforeach
@endsection
