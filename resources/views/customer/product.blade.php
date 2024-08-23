@extends('customer.layouts.master')

@section('page_title')
    Produk | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('page_type')
    <div class="hero_area sub_pages">
@endsection

@section('content')
<section class="fruit_section mt-5">
    <div class="container">
        <h2 class="custom_heading">Daftar Produk</h2>
        <p class="custom_heading-text">
            Banyak produk menarik yang merupakan produk murni dari UMKM setempat
        </p>
        @foreach ($products as $product)
            <div class="row layout_padding2">
                <div class="col-md-8">
                    <div class="fruit_detail-box">
                        <h3>{{ $product -> product_name }}</h3>
                        <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 12px;" disabled>Rp. <?php echo number_format($product -> price, 0, '.', '.') ?></button>
                        <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 12px;"disabled>{{ $product -> category -> category_name }}</button>
                        <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 12px;"disabled>{{ $product -> stock }} {{ $product -> unit }} Tersisa</button>
                        <p class="mt-4 mb-5">
                            {{ $product -> description }}
                        </p>
                        <div>
                            <a href="javascript:void(0)" class="custom_dark-btn">
                                Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fruit_img-box d-flex justify-content-center align-items-center">
                    @if ($product->images->isNotEmpty())
                        <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" width="250px">
                    @endif
                    <img src="https://sdmnk.umkmbedigital.com/public/storage/product/{{ $product->foto }}" alt="" class="" width="250px" />
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
