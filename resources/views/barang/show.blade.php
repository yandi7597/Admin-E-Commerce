@extends('layout/main')
@section('title','Detail Barang')
    
@section('container')

    <div class="col-4" style="margin-left:10px">
    <h3>Detail Produsen</h3>
    <br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$barang->nama_barang}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$barang->jenis_barang}}</h6>
          <h6 class="card-text">{{$barang->harga}}</h6>
          <h6 class="card-text">{{$barang->produsen}}</h6>
          <h6 class="card-text">{{$barang->tgl_masuk}}</h6>
          <h6 class="card-text">{{$barang->stok}}</h6>
          <br>
          <a href="{{$barang->id}}/edit" class="btn btn-secondary">Edit</a>
          <form action="{{$barang->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/barang" class="btn btn-success">Kembali</a>
        </div>
      </div>
</div>


@endsection