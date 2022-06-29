@extends('layout/main')
@section('title','Detail Pengguna')
    
@section('container')

    <div class="col-4" style="margin-left:10px">
    <h3>Detail Pengguna</h3>
    <br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$pengguna->nama_pengguna}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$pengguna->jk}}</h6>
          <h6 class="card-text">{{$pengguna->alamat}}</h6>
          <h6 class="card-text">{{$pengguna->no_hp}}</h6>
          <h6 class="card-text">{{$pengguna->username}}</h6>
          <h6 class="card-text">{{$pengguna->password}}</h6>
          <h6 class="card-text">{{$pengguna->jabatan}}</h6>
          <br>
          <a href="{{$pengguna->id}}/edit" class="btn btn-secondary">Edit</a>
          <form action="{{$pengguna->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/pengguna" class="btn btn-success">Kembali</a>
        </div>
      </div>
</div>


@endsection