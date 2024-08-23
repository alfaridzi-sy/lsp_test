@extends('admin.layouts.master')

@section('page_title')
    UMKM | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">UMKM</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Master UMKM </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-0">Data Master UMKM</h2>
            </div>
            <div class="col text-right">
                <a href="{{route('user.create')}}" class="btn btn-sm btn-primary">Tambah UMKM</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama UMKM</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Username</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Nomor Rekening</th>
                    <th scope="col">Jenis Bank</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $k => $u)
                <tr class="text-center">
                    <td scope="row">{{ $k + 1 }}</td>
                    <td scope="row">{{$u->name}}</td>
                    <td scope="row">{{$u->address}}</td>
                    <td scope="row">{{$u->username}}</td>
                    <td scope="row">{{$u->contact}}</td>
                    <td scope="row">{{$u->account_number}}</td>
                    <td scope="row">{{$u->account_bank}}</td>
                    <td scope="row">
                        <div class="btn-group" role="group">
                            <a href="{{route('user.edit',['user' => $u->user_id])}}" role="button"
                                class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a  data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="{!! url('user/destroy') !!}/{{$u->user_id}}" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            <a  data-toggle="tooltip" data-placement="bottom" title="Reset Password" href="{!! url('user/resetPassword') !!}/{{$u->user_id}}" onclick="return confirm ('Apakah anda yakin untuk melakukan reset password?')" class="btn btn-primary btn-sm"><i class="fa fa-key"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
