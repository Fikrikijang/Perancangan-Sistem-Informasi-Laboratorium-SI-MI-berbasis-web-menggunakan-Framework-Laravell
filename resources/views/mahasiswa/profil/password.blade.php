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
                        <div class="card">
                            <h5 class="card-header text-white text-center" style="background-color: #000083"><b>Edit Password</b></h5>
                            <div class="card-body">
                                <form action="{{ url('/student/profil/ubah', $student->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- <div class="form-group">
                                      <label for="password">Password Lama</label>
                                      <input type="password" class="form-control" id="password" >
                                    </div> --}}

                                    <div class="form-group">
                                      <label for="password">Password Baru</label>
                                      <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-lg btn-block">Simpan Data</button>
                                    </div>
                                  </form>
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
                                      <a href="#" class="text-dark"><i class="fas fa-unlock-alt"></i> PASSWORD</a>
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