@extends('admin.layouts.master')

@section('page_title')
    Kategori | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Kategori</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Master Kategori </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-0">Data Master Kategori</h2>
            </div>
            <div class="col text-right">
                <a href="{{route('category.create')}}" class="btn btn-sm btn-primary">Tambah Kategori</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $k => $c)
                <tr class="text-center">
                    <td scope="row">{{ $k + 1 }}</td>
                    <td scope="row">{{$c->category_name}}</td>
                    <td scope="row">
                        <div class="btn-group" role="group">
                            <a href="{{route('category.edit',['category' => $c->category_id])}}" role="button"
                                class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a  data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="{!! url('category/destroy') !!}/{{$c->category_id}}" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
