@extends('layout/main')
@section('title','Jenis Barang')
    
@section('container')
    <div class="col-8" style="margin-left:50px">
        <br>
        <div class="col-md-12">
        @if (session('status'))
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Success</span>
            {{session('status')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        
        <h3>Data Jenis Barang</h3>
        <div class="card-body">
            <div class="card w-60">
              <div class="card-body">
                <h5 class="card-title">Tambah Data</h5>
                <p class="card-text">Klik Tambah Data untuk menambahkan data.</p>
                <a href="/jenisbarang/create" class="btn btn-success my-3">Tambah Data</a>
              </div>
            </div>
              
    
    <ul class="list-group">
    @foreach ($jenisbarang as $jb)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        
        {{$jb->jenis_barang}}   
        
        
        
          <form action="/jenisbarang/{{$jb->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="/jenisbarang/{{$jb->id}}/edit" class="btn btn-secondary">Edit</a>
          </form>
          
       
    </li>
    
    @endforeach
    </ul>  
    

@endsection