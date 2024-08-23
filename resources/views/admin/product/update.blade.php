@extends('admin.layouts.master')

@section('page_title')
Produk | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data Produk</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
<div class="card shadow">
    <div class="card-header">
        {{ $product->product_name }}
        <a href="{!! url('/product/editImage') !!}/{{$product->product_id}}" class="btn btn-sm btn-primary float-right">Kelola Gambar</a>
    </div>


    <div class="card-body">
        <form action="{{ route('product.update', ['product' => $product->product_id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

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
                    <p><strong>Nama Produk:</strong> <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}"></p>
                    <p><strong>Deskripsi:</strong> <textarea class="form-control" rows="4" name="description">{{ $product->description }}</textarea></p>
                    <p><strong>Stok:</strong> <input type="number" class="form-control" name="stock" value="{{ $product->stock }}"></p>
                    <p><strong>Satuan:</strong> <input type="text" class="form-control" name="unit" value="{{ $product->unit }}"></p>
                    <p><strong>Harga:</strong> <input type="number" class="form-control" name="price" value="{{ $product->price }}"></p>
                    <p><strong>Kategori:</strong>
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="" selected disabled hidden>Pilih Kategori</option>
                        @foreach ($categories as $ct)
                        <option value="<?php echo $ct->category_id ?>" <?php if ($product->category_id ==  $ct->category_id ) echo "selected"; ?>>{{ $ct->category_name }}</option>
                        @endforeach
                    </select>
                    <p><strong>Nama UMKM:</strong>
                    <select class="form-control" name="user_id" disabled>
                        <option value="{{ $product->user->user_id }}">
                            {{ $product->user->name }}
                        </option>
                    </select>
                    <br><br>
                    <div class="form-group row mb-0">
                        <div class="col-md-12 offset-md-12 text-center">
                            <button type="submit" class="btn btn-warning" onclick="return confirm('Apakah Data Sudah Benar ?')">
                                {{ __('Update') }}
                            </button>
                            <button type="reset" class="btn btn-light">
                                {{ __('Reset') }}
                            </button>
                            <a href="{!! url('product') !!}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
