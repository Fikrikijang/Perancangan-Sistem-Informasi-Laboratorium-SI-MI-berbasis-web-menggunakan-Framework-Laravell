@extends('layouts.mahasiswa.main')

@section('title', 'Beranda')

@section('content')

<section class="content-playlist mt-5">
    
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12 col-lg-12 list-playlist">
              <div class="container-fluid">
                  <div class="row mt-5">

                      <div class="col-lg-8 col-sm-12 col-xs-12 mt-2">
                        <div class="card mb-3">
                          <img src="{{ asset($student->foto) }}" class="rounded-circle mt-2" width="100" height="120" style="display: block; margin: auto;">
                          <div class="card-body text-center">
                            <h5 class="card-title">{{ $student->name }} ({{ $student->npm }})</h5>
                            <p class="card-text">{{ $student->email }}</p>
                            <p class="card-text">{{ $student->bio }}</p>
                            <p class="card-text"><small class="text-muted">Bergabung {{$student->created_at->diffForHumans()}}</small></p>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-12 col-lg-4 mt-2">
                        <div class="row">
                          <div class="col-md-12 col-lg-12">
                              <div class="card small-content">
                                  <div class="card-body">
                                    
                                  <p><b>MENU</b></p>
                                      <a href="{{ url('/student/profil', \Auth::guard('student')->user()->id) }}" class="text-dark"><i class="fas fa-address-card"></i> PROFIL</a>
                                      <br>
                                      <a href="{{ url('/student/profil/edit', $student->id) }}" class="text-dark"><i class="fas fa-user-edit"></i>  EDIT PROFIL</a>
                                      <br>
                                      <a href="{{ url('/student/profil/password', $student->id) }}" class="text-dark"><i class="fas fa-unlock-alt"></i> PASSWORD</a>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>

</section>


@endsection