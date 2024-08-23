@extends('customer.layouts.master')

@section('page_title')
    Beranda | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('page_type')
    <div class="hero_area">
@endsection

@section('slider')
    <section class=" slider_section position-relative">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slider_item-box">
                    <div class="slider_item-container">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="slider_item-detail">
                                <div>
                                <h1>
                                    Selamat Datang
                                </h1>
                                <h2>
                                    di Website UMKM2M
                                </h2>
                                <h5>"Kecamatan Siantar Marimbun"</h5>

                                <p>
                                    UMKM merupakan salah satu ujung tombak peningkatan perekonomian.
                                    Dalam hal ini Perguruan Tinggi bekerjasama dengan pemerintah melalui
                                    pemberdayaan masyarakat UMKM untuk meningkatkan ekonomi di Kecamatan Siantar Marimbun.
                                </p>
                                <div class="d-flex">
                                    <a href="javascript:void(0)" class="text-uppercase custom_orange-btn mr-3">
                                    Beli Sekarang
                                    </a>
                                    <a href="{{ route('customer.contactList') }}" class="text-uppercase custom_dark-btn">
                                    Hubungi Kami
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="slider_img-box">
                                <div>
                                <img src="{{ asset('customer/images/shop.png') }}" alt="" class="" />
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider_item-box">
                    <div class="slider_item-container">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="slider_item-detail">
                                <div>
                                    <h1>
                                        Selamat Datang
                                    </h1>
                                    <h2>
                                        di Website UMKM2M
                                    </h2>
                                    <h5>"Kecamatan Siantar Marimbun"</h5>
                                    <p>
                                        UMKM merupakan salah satu ujung tombak peningkatan perekonomian.
                                        Dalam hal ini Perguruan Tinggi bekerjasama dengan pemerintah melalui
                                        pemberdayaan masyarakat UMKM untuk meningkatkan ekonomi di Kecamatan Siantar Marimbun.
                                    </p>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" class="text-uppercase custom_orange-btn mr-3">
                                        Beli Sekarang
                                        </a>
                                        <a href="{{ route('customer.contactList') }}" class="text-uppercase custom_dark-btn">
                                        Hubungi Kami
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="slider_img-box">
                                <div>
                                <img src="{{ asset('customer/images/group.png') }}" alt="" class="" />
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="custom_carousel-control">
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- cluster section -->
    <section class="client_section layout_padding">
        <div class="container">
            <h2 class="custom_heading">Kategori Produk</h2>
            <p class="custom_heading-text">
                Beragam kategori produk yang tersedia dari UMKM setempat di Kecamatan Siantar Marimbun
            </p>
            <div>
                <div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($categories as $i => $category)
                            @if ($i == 0)
                            <div class="carousel-item active">
                                <div class="client_container layout_padding2">
                                    <div class="client_img-box">
                                        <img src="{{ asset('customer/images/category.png') }}" alt="" />
                                    </div>
                                    <div class="client_detail">
                                        <h3>
                                            {{ $category-> category_name }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="carousel-item">
                                <div class="client_container layout_padding2">
                                    <div class="client_img-box">
                                        <img src="{{ asset('customer/images/category.png') }}" alt="" />
                                    </div>
                                    <div class="client_detail" >
                                        <h3>
                                            {{ $category-> category_name }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach

                    </div>
                    <div class="custom_carousel-control">
                        <a class="carousel-control-prev" href="#carouselExampleControls-2" role="button" data-slide="prev">
                        <span class="" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls-2" role="button" data-slide="next">
                        <span class="" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end cluster section -->

    <hr style="width: 50%">

    <!-- product section -->
    <section class="fruit_section layout_padding">
        <div class="container">


            <h2 class="custom_heading">Produk Terbaru</h2>
            <p class="custom_heading-text">
                Banyak produk menarik yang merupakan produk murni dari UMKM setempat di Kecamatan Siantar Marimbun
            </p>
            @foreach ($products as $product)
            <div class="row layout_padding2">
                <div class="col-md-8">
                    <div class="fruit_detail-box">
                        <h3>{{ $product->product_name }}</h3>
                        <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 12px;" disabled>Rp. <?php echo number_format($product->price, 0, '.', '.') ?></button>
                        <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 12px;" disabled>{{ $product->category->category_name }}</button>
                        <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 12px;" disabled>{{ $product->stock }} {{ $product->unit }} Tersisa</button>

                        <div class="mt-4 mb-5">
                            {!! nl2br(e($product->description)) !!}
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="custom_dark-btn">
                                Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 d-flex justify-content-center align-items-center"> --}}
                    <div class="col-md-4 fruit_img-box d-flex justify-content-center align-items-center">
                        @if ($product->images->isNotEmpty())
                            <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" width="250px">
                        @endif
                        <img src="https://sdmnk.umkmbedigital.com/public/storage/product/{{ $product->foto }}" alt="" class="" width="250px" />
                    </div>
                {{-- </div> --}}
            </div>
            @endforeach
        </div>
    </section>
    <!-- end product section -->

    <hr style="width: 50%">

    <!-- contact section -->
    <section class="contact_section layout_padding">
        <div class="container">
        <h2 class="font-weight-bold">
            Hubungi Kami
        </h2>
        <div class="row">
            <div class="col-md-8 mr-auto">
            <form action="">
                <div class="contact_form-container">
                <div>
                    <div>
                    <input type="text" placeholder="Nama">
                    </div>
                    <div>
                    <input type="text" placeholder="Nomor Handphone">
                    </div>
                    <div>
                    <input type="email" placeholder="Email">
                    </div>

                    <div class="mt-5">
                    <input type="text" placeholder="Pesan">
                    </div>
                    <div class="mt-5">
                    <button type="submit">
                        Kirim
                    </button>
                    </div>
                </div>

                </div>

            </form>
            </div>
        </div>
        </div>
    </section>
    <!-- end contact section -->

@endsection

