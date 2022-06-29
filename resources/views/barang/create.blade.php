@extends('layout/main')
@section('title','Tambah Data Barang')

@section('container')
<div class="col-lg-6">
    <div class="card">
            <form method="post" action="/barang">
                @csrf
                <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
                <div class="card-body card-block">
                    <div class="mb-3">
                        <label class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" value="{{old('nama_barang')}}" class="form-control @error('nama_barang') is-invalid @enderror" placeholder="Ketik Nama Barang">
                        @error('nama_barang')
                            <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Jenis Barang</label>
                          <input type="text" name="jenis_barang" value="{{old('jenis_barang')}}" class="form-control  @error('jenis_barang') is-invalid @enderror" placeholder="Ketik Jenis Barang">
                          @error('jenis_barang')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Harga</label>
                          <input type="text" name="harga" value="{{old('harga')}}" class="form-control  @error('harga') is-invalid @enderror" placeholder="Ketik Harga">
                          @error('harga')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Produsen</label>
                          <input type="text" name="produsen" value="{{old('produsen')}}" class="form-control  @error('produsen') is-invalid @enderror" placeholder="Ketik Produsen">
                          @error('produsen')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Tanggal Masuk</label>
                        <input type="date" name="tgl_masuk" value="{{old('tgl_masuk')}}" class="form-control @error('tgl_masuk') is-invalid @enderror" placeholder="Ketik Tanggal Masuk">
                        @error('tgl_masuk')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="text" name="stok" value="{{old('stok')}}" class="form-control @error('stok') is-invalid @enderror" placeholder="Ketik Stok">
                        @error('stok')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
        
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/barang" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
    
    @endsection