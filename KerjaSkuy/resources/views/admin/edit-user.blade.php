@extends('admin.admin')

@section('title','Data Perusahaan')

@section('content')

<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3>Edit Data User</h3>
        </div>

        <div class="card-body">
            <form action="{{route('update-user', $dt->id) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="control-label" for="name">Nama Pengguna</label>
                    <input type="text" id="name" name="name" placeholder="Nama Pengguna" class="form-control
                @error('name')
                is-invalid @enderror" autofoucus value="{{ old('name', $dt->name) }}">
                    @error('name')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                </div>

                <!-- <div class="form-group">
                    <label class="control-label" for="level">Level</label>
                    <input type="text" id="level" name="level" placeholder="Level" class="form-control
                  @error('level')
                  is-invalid @enderror" autofoucus value="{{ old('level', $dt->level) }}">
                    @error('level')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                </div> -->

                <div class="form-group">
                    <label class="control-label" for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Email" class="form-control
                      @error('email')
                      is-invalid @enderror" autofoucus value="{{ old('email', $dt->email) }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success">Ubah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.content -->

<!-- /.content-wrapper -->
<!-- Main Footer -->
<footer class="main-footer">
    @endsection