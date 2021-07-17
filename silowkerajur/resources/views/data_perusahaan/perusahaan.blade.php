@extends('admin.admin')

@section('title','Perusahaan')

@section('content')

<table class="table table-bordered">
        <a href ="{{ url('tambah') }}" class="btn btn-sm btn-success">Tambah Data</a>
        <tr>
            <th>No</th>
            <th>Nama Perusahaan</th>
            <th>Pekerjaan</th>
            <th>Gaji</th>
            <th>Alamat Perusahaan</th>
            <th>Syarat dan Ketentuan</th>
            <th>Kontak</th>
            <th>Foto Perusahaan</th>
            <th>Aksi</th>
        </tr>

         @foreach ($data as $d)
            <tr>
                <td>{{ $d->id_perusahaan }}</td>
                <td>{{ $d->nama_perusahaan }}</td>
                <td>{{ $d->pekerjaan }}</td>
                <td>{{ $d->gaji }}</td>
                <td>{{ $d->alamat_perusahaan }}</td>
                <td>{{ $d->syarat_ketentuan }}</td>
                <td>{{ $d->kontak }}</td>
                <td>
                    <img src="{{ url('foto_perusahaan/'.$d->foto_perusahaan) }}" width="100px">
                </td>
                <td>
                    <a href ="{{ url('/edit', $d->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href ="" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach 

    </table>

    




        {{-- @foreach ($dataperusahaan as $key=>$value)
            <tr>
                <td>{{ $value->id_perusahaan }}</td>
                <td>{{ $value->nama_perusahaan }}</td>
                <td>{{ $value->pekerjaan }}</td>
                <td>{{ $value->gaji }}</td>
                <td>{{ $value->alamat_perusahaan }}</td>
                <td>{{ $value->syarat_ketentuan }}</td>
                <td>{{ $value->kontak }}</td>
                <td>{{ $value->foto_perusahaan }}</td>
            </tr>
        @endforeach --}}

@endsection