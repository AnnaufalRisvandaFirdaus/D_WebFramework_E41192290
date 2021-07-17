@extends('admin.admin')

@section('title','Pekerjaan')

@section('content')

<table class="table table-bordered">
    <thead>
        <a href ="" class="btn btn-sm btn-successp">Tambah Data</a>
        <tr>
            <th>No</th>
            <th>Pekerjaan</th>
        </tr>
    </thead>
    <tbody>






        
        {{-- @for ($i = 0; $i < 8; $i++)
    @if(isset($data[$i]))
         <span class="label label-primary">{{ $data[$i] }}</span>
    @endif
@endfor --}}
        {{-- @foreach ($data as $datas)
            <tr>
                <td></td>
                <td>{{ $datas->nama_perusahaan }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href ="" class="btn btn-sm btn-warning">Edit</a>
                    <a href ="" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody> --}}

</table>

@endsection