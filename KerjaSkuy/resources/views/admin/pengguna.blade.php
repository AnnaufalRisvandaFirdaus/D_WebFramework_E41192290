@extends('admin.admin')

@section('title','Pengguna')

@section('content')

<table class="table table-bordered">
    <thead>
        <!-- <a href="" class="btn btn-sm btn-success">Tambah Data</a> -->
        <tr>
            <th>No</th>
            <th>Nama Pengguna</th>
            <th>Jabatan</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pengguna as $peli)
        <tr>
            <td>{{ $peli->id }}</td>
            <td>{{ $peli->name }}</td>
            <td>{{ $peli->level }}</td>
            <td>{{ $peli->email }}</td>
            <td>
                <a href="{{url('/edit-user',$peli->id)}}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{ url('/delete-user',$peli->id) }}" class="btn btn-sm btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection