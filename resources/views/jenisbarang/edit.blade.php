@extends('layout/main')
@section('title','Edit Data Jenis Barang')

@section('container')
<div class="col-lg-6">
    <div class="card">
        <form method="post" action="/jenisbarang/{{$jenisbarang->id}}">
            @method('patch')
                @csrf
                <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                    <div class="card-body card-block">
                        <div class="mb-3">
                          <label class="form-label">Jenis Barang</label>
                          <input type="text" name="jenis_barang" value="{{$jenisbarang->jenis_barang}}" class="form-control @error('jenis_barang') is-invalid @enderror" placeholder="Ketik Jenis Barang">
                          @error('jenis_barang')
                              <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        <a href="/jenisbarang" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
                </div>

@endsection