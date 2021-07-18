@extends('admin.admin')

@section('title','Data Perusahaan')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">LAYANAN SERVICE</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Bersih Kantor</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="card-tools">
                    <a href="{{ route('create-kantor') }}" class="btn btn-success">Tambah Data <i
                            class="fas fa-plus-square"></i></a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>

                        <th>Harga Layanan</th>
                        <th>Upload Foto</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($dataKantor as $item)
                    <tr>

                        <td>{{ $item->hargalayanan }}</td>
                        <td>
                            <a href="{{ asset('kantor/'. $item->upload_foto ) }}" target="_blank"
                                rel="noopener noreferrer">Lihat Foto</a>
                        </td>
                        <td>
                            <a href="{{ url('edit-kantor',$item->id) }}"><i class="fas fa-edit"></i></a>
                            |
                            <a href="#"><i class="fas fa-trash-alt delete" data-id="{{ $item->id }}"
                                    style=" color: red"></i></a>
                        </td>
@endsection