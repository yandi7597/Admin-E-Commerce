@extends('layout/main')
@section('title','Detail Produsen')
    
@section('container')

    <div class="col-4" style="margin-left:10px">
    <h3>Detail Produsen</h3>
    <br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$produsen->produsen}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$produsen->alamat}}</h6>
          <h6 class="card-text">{{$produsen->no_hp}}</h6>
          <h6 class="card-text">{{$produsen->website}}</h6>
          <h6 class="card-text">{{$produsen->kontak}}</h6>
          <br>
          <a href="{{$produsen->id}}/edit" class="btn btn-secondary">Edit</a>
          <form action="{{$produsen->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/produsen" class="btn btn-success">Kembali</a>
        </div>
      </div>
</div>


@endsection