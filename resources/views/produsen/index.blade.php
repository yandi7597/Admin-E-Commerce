@extends('layout/main')
@section('title','Produsen')
    
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
                                    <strong class="card-title">Data Produsen</strong>
                                  </div>
                                  <div class="card-body">
                                    <div class="card w-60">
                                      <div class="card-body">
                                        <h5 class="card-title">Tambah Data</h5>
                                        <p class="card-text">Klik Tambah Data untuk menambahkan data.</p>
                                        <a href="/produsen/create" class="btn btn-success my-3">Tambah Data</a>
                                      </div>
                                    </div>
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Produsen</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No. Hp</th>
                                        <th scope="col">Website</th>
                                        <th scope="col">Kontak</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                  
                                    <tbody>
                                      @foreach ($produsen as $pds)
                                      <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$pds->produsen}}</td>
                                        <td>{{$pds->alamat}}</td>
                                        <td>{{$pds->no_hp}}</td>
                                        <td>{{$pds->website}}</td>
                                        <td>{{$pds->kontak}}</td>

                                        <td>
                                            <a href="/produsen/{{$pds->id}}" class="btn btn-primary">Detail</a>
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