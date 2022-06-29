@extends('layout/main')
@section('title','Tambah Data Pengguna')

@section('container')
<div class="col-lg-6">
    <div class="card">
            <form method="post" action="/pengguna">
                @csrf
                <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
                <div class="card-body card-block">
                    <div class="mb-3">
                        <label class="form-label">Nama Pengguna</label>
                        <input type="text" name="nama_pengguna" value="{{old('nama_pengguna')}}" class="form-control @error('nama_pengguna') is-invalid @enderror" placeholder="Ketik Nama Pengguna">
                        @error('nama_pengguna')
                            <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="form-group">
                      <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                              <select name="jk" id="select" class="form-control">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                              </select>
                          </div>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Alamat</label>
                          <input type="text" name="alamat" value="{{old('alamat')}}" class="form-control  @error('alamat') is-invalid @enderror" placeholder="Ketik Alamat">
                          @error('alamat')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                          <label class="form-label">No. Hp</label>
                          <input type="text" name="no_hp" value="{{old('no_hp')}}" class="form-control  @error('no_hp') is-invalid @enderror" placeholder="Ketik No. Hp">
                          @error('no_hp')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Username</label>
                          <input type="text" name="username" value="{{old('username')}}" class="form-control  @error('username') is-invalid @enderror" placeholder="Ketik Username">
                          @error('username')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" placeholder="Ketik Password">
                        @error('password')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="form-group">
                        <div class="mb-3">
                          <label class="form-label">Jabatan</label>
                                <select name="jabatan" id="select" class="form-control">
                                  <option value="Admin">Admin</option>
                                  <option value="Manager">Manager</option>
                                </select>
                          </div>
                      </div>
        
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/pengguna" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
    
    @endsection