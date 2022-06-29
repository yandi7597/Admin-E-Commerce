@extends('layout/main')
@section('title','Pengguna')
    
@section('container')

                  <div class="col-md-12">
                    @if (session('status'))
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <span class="badge badge-pill badge-success">Success</span>
                              {{session('status')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                      </div>
                    @endif
                    <div class="content mt-3">
                      <div class="animated fadeIn">
                          <div class="row">
                          <div class="col-md-12">
                              <div class="card">
                                  <div class="card-header">
                                    <strong class="card-title">Data Pengguna</strong>
                                  </div>
                                  <div class="card-body">
                                    <div class="card w-60">
                                      <div class="card-body">
                                        <h5 class="card-title">Tambah Data</h5>
                                        <p class="card-text">Klik Tambah Data untuk menambahkan data.</p>
                                        <a href="/pengguna/create" class="btn btn-success my-3">Tambah Data</a>
                                      </div>
                                    </div>
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Pengguna</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No. Hp</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                  
                                    <tbody>
                                      @foreach ($pengguna as $pgn)
                                      <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$pgn->nama_pengguna}}</td>
                                        <td>{{$pgn->jk}}</td>
                                        <td>{{$pgn->alamat}}</td>
                                        <td>{{$pgn->no_hp}}</td>
                                        <td>{{$pgn->username}}</td>
                                        <td>{{$pgn->password}}</td>
                                        <td>{{$pgn->jabatan}}</td>
                                        <td>
                                            <a href="/pengguna/{{$pgn->id}}" class="btn btn-primary">Detail</a>
                                        </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
            
                                </div>
                            </div><!-- .animated -->
                        </div><!-- .content -->
                
      @endsection