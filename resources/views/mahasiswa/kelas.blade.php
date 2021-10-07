@extends('layouts.mahasiswa.main')

@section('title', 'Kelas')

@section('content')

<section class="content-top mt-1">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12 top-all">
              <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-7 col-lg-7 top-kiri">
                          <h1>ILAB STMIK JAKARTA STI&K</h1>
                          <hr>
                          <h2>Tingkatkan Kemampuan Anda <b>Dengan Kami.</b></h2>
                          <h5>Silahkan untuk memulai pembelajaran yang sudah disediakan. </h5>
                      </div>
                      <div class="col-lg-5 col-md-5 top-kanan text-center">
                          <div class="row">
                              <div class="col-md-6 col-lg-6">
                                  <div class="card">
                                      <i class="fab fa-youtube"></i>
                                      <h3>120</h3>
                                      <h6>Video</h6>
                                  </div>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                  <div class="card">
                                      <i class="fa fa-list"></i>
                                      <h3>10</h3>
                                      <h6>Mata Kuliah</h6>
                                  </div>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                  <div class="card">
                                      <i class="fa fa-book"></i>
                                      <h3>57</h3>
                                      <h6>Modul</h6>
                                  </div>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                  <div class="card">
                                      <i class="fa fa-users"></i>
                                      <h3>300</h3>
                                      <h6>Mahasiswa</h6>
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

<section class="content">

  <div class="container-fluid tempat-content">

    <div class="container">
        <div class="row">
          <div class="col">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
                <div class="input-group-append" id="button-addon4">
                  <button class="btn btn-dark" type="button">Button</button>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="input-group">
                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                  <option selected>Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <div class="input-group-append">
                  <button class="btn btn-dark" type="button">Button</button>
                </div>
            </div>
          </div>
        </div>
    </div>
    

      <div class="row text-center">
          @foreach ($kelas as $result => $hasil)
          <div class="col-md-12 col-lg-4 mt-3">
            <div class="card small-content">
                <a href="#">
                    <img src="{{ asset( $hasil->gambar ) }}" class="card-img-top image-besar" alt="...">
                </a>
                <div class="card-body">
                    <div class="row">
                        @foreach($hasil->kategoris as $kategori)
                            <div class="col-sm">
                                <h5>
                                    <a href="#"><span class="badge badge-primary">{{ $kategori->name }}</span></a>
                                </h5>
                            </div>
                        @endforeach
                    </div>

                    <a href="{{url('mahasiswa/playlist')}}">
                        <h6 class="card-title text-dark">{{ $hasil->judul }}</h6>
                    </a>
                    <p class="card-text">
                      {{ \Illuminate\Support\Str::limit(strip_tags($hasil->content), $limit= 50)}} <a href="{{ url('/student/playlist',$hasil->id) }}" class="text-dark">Selengkapnya ->>></a>
                    </p>
                    <p class="card-text"><small class="text-muted">{{ $hasil->created_at}}</small></p>
                </div>
            </div>
          </div>
          @endforeach

      </div>
      <div class="text-right">
        <nav class="d-inline-block">
              {{ $kelas->links() }}
          </nav>
      </div>
    </div>

</section>
@endsection