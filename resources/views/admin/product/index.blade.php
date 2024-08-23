@extends('admin.layouts.master')

@section('page_title')
    Produk | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Master Produk </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-0">Data Master Produk</h2>
            </div>
            <div class="col text-right">
                <a href="{{route('product.create')}}" class="btn btn-sm btn-primary">Tambah Produk</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Foto Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Jumlah Stok</th>
                    <th scope="col">Satuan Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nama UMKM</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $k => $p)
                <tr class="text-center">
                    <td scope="row">{{ $k + 1 }}</td>
                    <td scope="row">
                        @if ($p->images->isNotEmpty())
                            <img src="{{ asset('storage/' . $p->images->first()->image_path) }}" width="100px">
                        @endif
                    </td>
                    <td scope="row">{{$p->product_name}}</td>
                    <td scope="row">
                        <?php echo strlen($p->description) > 20 ? substr($p->description, 0, 20) . " ..." : $p->description; ?>
                    </td>

                    <td scope="row">{{$p->stock}}</td>
                    <td scope="row">{{ $p->unit }}</td>
                    <td scope="row">{{$p->price}}</td>
                    <td scope="row">{{$p->category->category_name}}</td>
                    <td scope="row">{{$p->user->name}}</td>
                    <td scope="row">
                        <div class="btn-group" role="group">
                            <a href="{{route('product.show',['product' => $p->product_id])}}" role="button" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{route('product.edit',['product' => $p->product_id])}}" role="button" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a  data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="{!! url('product/destroy') !!}/{{$p->product_id}}" onclick="return confirm ('Apakah anda yakin untuk menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection
