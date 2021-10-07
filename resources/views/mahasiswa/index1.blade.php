@extends('layouts.mahasiswa.main')

@section('title', 'Beranda')

@section('content')

<section class="content-top">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12 top-all">
              <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-7 col-lg-7 top-kiri">
                          <h1>ILABSIMI STMIK JAKARTA STI&K</h1>
                          <hr>
                          <!-- <h2>Selamat Datang</h2> -->
                          <h2>Tingkatkan Kemampuan Anda di sini.</h2>
                          <h5>Silahkan memulai pembelajaran yang sudah disediakan. </h5>
                          <button class="btn btn-primary btn-login tombol-mulai">Mulai Belajar</button>
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
      <div class="row">
          <div class="col-md-12 col-lg-8 col-sm-12 col-xs-12 content-besar">
              <div class="card big-content">
                    <img src="{{url('frontend/assets/img/images/computer.png')}}" width="30%" height="30%" style="display: block; margin: auto;">
                
                  <div class="card-body">
                      <a href="#">
                          <h5 class="card-title text-dark text-center">Belajar Programming,<br> Mulai dari Nol</h5>
                      </a>
                      <div class="desc-content d-none d-lg-block">
                          <p class="card-text">Belajar membuat website, aplikasi dekstop atau android. Bingung mulai dari mana? Tenang, mari kita belajar di sini. Mau bekerja sebagai programmer atau membuat karya, kamu juga bisa!
                          </p>
                      </div>
                      <hr>
                      <h3 class="text-center">Apa Kata Asisten Laboratorium SI/MI?</h3>
                      <div class="row">
                        <div class="col text-center">
                            <img class="rounded-circle" width="70px" height="70px" src="{{url('frontend/assets/img/asisten/septian.jpg')}}"> 
                            <p>@Septiyan</p>
                            <p>Belajar koding dari sekarang, biar nanti berani kasih kode ke dia</p>
                        </div>
                        <div class="col text-center">
                            <img class="rounded-circle" width="70px" height="70px" src="{{url('frontend/assets/img/asisten/fikri.jpg')}}"> 
                            <p>@Fikri_kijang</p>
                            <p class="is-medium">Debugging itu adalah sebuah metode yang dilakukan oleh para programmer untuk mencari jarum di tumpukan jerami. Jadi jangan takut error!!!</p>
                        </div>
                        <div class="col text-center">
                            <img class="rounded-circle" width="70px" height="70px" src="{{url('frontend/assets/img/asisten/anggi.jpg')}}"> 
                            <p>@Anggi</p>
                            <p class="is-medium">Error itu urusan nanti yang terpenting kita berani untuk mencoba dan mencoba.</p>
                        </div>
                      </div>
                </div>
              </div>
              
          </div>
          <div class="col-md-12 col-lg-4">
              <div class="row">
                  <div class="col-md-12 col-lg-12">
                      <div class="card small-content">
                          <a href="#">
                              <img src="{{url('frontend/assets/img/images/belajar-bootstrap-4-dari-awal.jpeg')}}" class="card-img-top image-besar" alt="...">
                          </a>
                          <div class="card-body">
                              <h5>
                                  <a href="#"><span class="badge badge-primary">Dektop</span></a>
                                  <a href="#"><span class="badge badge-secondary">Visual Basic</span></a>
                              </h5>
                              <a href="#">
                                  <h6 class="card-title">Belajar Array pada Visual Basic 6.0</h6>
                              </a>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12 col-lg-12">
                      <div class="card small-content">
                          <a href="#">
                              <img src="{{url('frontend/assets/img/images/belajar-basic-rest-api-dalam-laravel.jpeg')}}" class="card-img-top image-besar" alt="...">
                          </a>
                          <div class="card-body">
                              <h5>
                                  <a href="#"><span class="badge badge-primary">Dektop</span></a>
                                  <a href="#"><span class="badge badge-secondary">Visual Basic</span></a>
                              </h5>
                              <a href="#">
                                  <h6 class="card-title">Belajar Array pada Visual Basic 6.0</h6>
                              </a>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </div>

</section>

@endsection