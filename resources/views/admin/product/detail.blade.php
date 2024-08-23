@extends('admin.layouts.master')

@section('page_title')
Produk | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
<div class="card shadow">
    <div class="card-header">{{ $product->product_name }}</div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <img id="mainImage" src="{{ asset('storage/' . $product->images[0]->image_path) }}" class="img-fluid" alt="Product Image">
                <div class="mt-3">
                    @foreach ($product->images as $index => $image)
                        <img src="{{ asset('storage/' . $image->image_path) }}" class="img-thumbnail thumb-image" width="80px" alt="Product Image" data-index="{{ $index }}">
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <p><strong>Nama Produk:</strong> <input type="text" class="form-control" value="{{ $product->product_name }}" disabled></p>
                <p><strong>Deskripsi:</strong> <textarea class="form-control" rows="4" disabled>{{ $product->description }}</textarea></p>
                <p><strong>Stok:</strong> <input type="text" class="form-control" value="{{ $product->stock }}" disabled></p>
                <p><strong>Satuan:</strong> <input type="text" class="form-control" value="{{ $product->unit }}" disabled></p>
                <p><strong>Harga:</strong> <input type="text" class="form-control" value="Rp{{ number_format($product->price, 2) }}" disabled></p>
                <p><strong>Kategori:</strong> <input type="text" class="form-control" value="{{ $product->category->category_name }}" disabled></p>
                <p><strong>Nama UMKM:</strong> <input type="text" class="form-control" value="{{ $product->user->name }}" disabled></p>
                <br><br>
                <p><a href="/product" class="btn btn-light">Kembali</a></p>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const mainImage = document.getElementById("mainImage");
        const thumbImages = document.querySelectorAll(".thumb-image");

        thumbImages.forEach((thumbImage) => {
            thumbImage.addEventListener("click", function() {
                const index = this.getAttribute("data-index");
                mainImage.src = thumbImages[index].src;
            });
        });
    });
</script>
@endpush
