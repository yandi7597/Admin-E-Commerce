@extends('layout/main')
@section('title','Detail Jenis Barang')
    
@section('container')

    <div class="col-4" style="margin-left:10px">
    <h3>Detail Jenis Barang</h3>
    <br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h3 class="card-title">{{$jenisbarang->jenis_barang}}</h3>
          
          <br>
          <a href="{{$jenisbarang->id}}/edit" class="btn btn-secondary">Edit</a>
          <form action="{{$jenisbarang->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/jenisbarang" class="btn btn-success">Kembali</a>
        </div>
      </div>
</div>


@endsection