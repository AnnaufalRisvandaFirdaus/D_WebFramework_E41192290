@extends('admin.admin')

@section('content')

    <form action={{ route }} action="">
        @csrf
        Nama Perusahaan: <input type="text" name="nama"><br>
        Pekerjaan : <input type="text" name="pekerjaan"><br/>
        Gaji : <input type="text" name="gaji"><br/>
        Alamat Perusahaan : <input type="text" name="alamat"><br/>
        Syarat dan Ketentuan : <input type="text" name="S&K"><br/>

        <Button type="submit">SIMPAN</Button>
    </form>

@endsection
    
