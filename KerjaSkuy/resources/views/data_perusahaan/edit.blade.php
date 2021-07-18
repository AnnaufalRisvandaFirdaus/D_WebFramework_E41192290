@extends('admin.admin')

@section('title','Data Perusahaan')

@section('content')

<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3>Edit Data</h3>
        </div>

        <div class="card-body">
            <form method="post" action="{{route('update', $dt->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label" for="nama_perusahaan">Nama Perusahaan</label>
                    <input type="text" id="nama_perusahaan" name="nama_perusahaan" placeholder="nama perusahaan" class="form-control
                @error('nama_perusahaan') 
                is-invalid @enderror" autofoucus value="{{ old('name', $dt->nama_perusahaan) }}">
                    @error('nama_perusahaan')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="control-label" for="pekerjaan">Pekerjaan</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" placeholder="pekerjaan" class="form-control
                  @error('pekerjaan')
                  is-invalid @enderror" autofoucus value="{{ old('name', $dt->pekerjaan) }}">
                    @error('pekerjaan')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="control-label" for="gaji">Gaji</label>
                    <input type="text" id="gaji" name="gaji" placeholder="gaji" class="form-control
                      @error('gaji')
                      is-invalid @enderror" autofoucus value="{{ old('name', $dt->gaji) }}">
                    @error('gaji')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="control-label" for="alamat_perusahaan">Alamat Perusahaan</label>
                    <input type="text" id="alamat_perusahaan" name="alamat_perusahaan" placeholder="alamat_perusahaan"
                        class="form-control
                          @error('alamat_perusahaan')
                          is-invalid @enderror" autofoucus value="{{ old('name', $dt->alamat_perusahaan) }}">
                    @error('alamat_perusahaan')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="control-label" for="syarat_ketentuan">Syarat dan Ketentuan</label>
                    <input type="text" id="syarat_ketentuan" name="syarat_ketentuan" placeholder="syarat_ketentuan"
                        class="form-control
                              @error('syarat_ketentuan')
                              is-invalid @enderror" autofoucus value="{{ old('name', $dt->syarat_ketentuan) }}">
                    @error('syarat_ketentuan')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="control-label" for="kontak">Kontak</label>
                    <input type="text" id="kontak" name="kontak" placeholder="kontak" class="form-control
                                  @error('kontak')
                                  is-invalid @enderror" autofoucus value="{{ old('name', $dt->kontak) }}">
                    @error('kontak')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="control-label" for="foto_perusahaan">Foto Perusahaan</label>
                    <input type="file" id="foto_perusahaan" name="foto_perusahaan" class="form-control @error('foto_perusahaan')
                is-invalid @enderror" autofoucus>
                    @error('foto_perusahaan')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                    <div class="form-group">
                        <img src="{{ asset('foto_perusahaan/'. $dt->foto_perusahaan) }}" height="5%" width="10%" alt=""
                            srcset="">
                    </div>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
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