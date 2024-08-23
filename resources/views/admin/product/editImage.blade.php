@extends('admin.layouts.master')

@section('page_title')
Edit Foto Produk | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Foto Produk</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
<div class="card shadow">
    <div class="card-header">Tambah Foto Produk</div>

    <div class="card-body">
        <form action="{{ route('product.storeImage') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->product_id }}">
            <div class="form-group">
                <input type="file" name="foto[]" multiple accept="image/*" class="form-control" required>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-12 offset-md-12 text-center">
                    <button type="submit" class="btn btn-warning">
                        {{ __('Tambah') }}
                    </button>
                    <a href="{{ url()->previous() }}" class="btn btn-light">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>

<br>

<div class="card shadow">
    <div class="card-header">Hapus Foto Produk</div>

    <div class="card-body">
        <div class="row">
            @foreach ($product->images as $image)
            <div class="col-md-4 mb-3">
                <div class="position-relative">
                    <div class="image-container">
                        <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid" alt="Product Image">
                        <button type="button" class="btn btn-danger btn-sm delete-image" data-image-id="{{ $image->product_image_id }}">Hapus</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const deleteButtons = document.querySelectorAll(".delete-image");

        deleteButtons.forEach((deleteButton) => {
            deleteButton.addEventListener("click", function() {
                const imageId = this.getAttribute("data-image-id");
                if (confirm("Apakah Anda yakin ingin menghapus gambar ini?")) {
                    const deleteUrl = '{{ route("product.deleteImage", ":imageId") }}';
                    window.location.href = deleteUrl.replace(":imageId", imageId);
                }
            });
        });
    });
</script>
@endpush
