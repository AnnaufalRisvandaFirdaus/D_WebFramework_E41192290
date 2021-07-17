@extends('user.home')

@section('title','Profil')

@section('content')

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan nama">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" id="exampleFormControlInput1">
  </div>
  <div>
    <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
    <p><input type='radio' name='jenis_kelamin' value='pria' />Pria</p>
    <p><input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan</p>
  </div>
  <div>
    <label for="">Ganti Password</label>
    <input type="password" class="form-control" id="">
  </div>
  <div>
    <label for="">Konfirmasi Password</label>
    <input type="password" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Pengenalan Singkat</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button type="button" class="btn btn-outline-primary btn-block">Simpan</button>
    
@endsection