@extends('layout/main')
@section('title','Tambah Data Produsen')

@section('container')
<div class="col-lg-6">
    <div class="card">
            <form method="post" action="/produsen">
                @csrf
                <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
                <div class="card-body card-block">
                    <div class="mb-3">
                        <label class="form-label">Produsen</label>
                        <input type="text" name="produsen" value="{{old('produsen')}}" class="form-control @error('produsen') is-invalid @enderror" placeholder="Ketik Produsen">
                        @error('produsen')
                            <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
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
                          <label class="form-label">Website</label>
                          <input type="text" name="website" value="{{old('website')}}" class="form-control  @error('website') is-invalid @enderror" placeholder="Ketik Website">
                          @error('website')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Kontak</label>
                        <input type="text" name="kontak" value="{{old('kontak')}}" class="form-control @error('kontak') is-invalid @enderror" placeholder="Ketik Kontak">
                        @error('kontak')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
        
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/produsen" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
    
    @endsection