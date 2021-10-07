@extends('layouts.home.main')

@section('title')

@section('container')
	<div class="container">
		<section id="down" class="section">
            <div class="section-body">
              <h2 class="section-title">ILAB NEWS</h2>
              <p class="section-lead">Seluruh berita mengenai Laboratorium Sistem Informatika dan Manajemen Informatika.</p>
            </div>
            <div class="row">
            @foreach( $artikelsAwal as $artikel )
             <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c shadow">
                  <div class="article-header">
                    <div class="article-image" data-background="{{ asset( $artikel->gambar) }}">
                      <div class="article-badge">
                        <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> Trending</div>
                      </div>
                    </div>
                  </div>
                  <div class="article-details">
                    <div class="article-category"><a href="#">News</a><div class="bullet"></div> <a href="#">{{$artikel->created_at->diffForHumans()}}</a></div>
                    <div class="article-title">
                      <h2><a href="#">{{$artikel->judul}}</a></h2>
                    </div>
                    <p>{!! \Illuminate\Support\Str::limit(strip_tags($artikel->content), $limit= 150, '... ')!!}<br><a href="{{ route('detail.show', $artikel->id ) }}" class="btn btn-primary btn-sm">
                      Read More
                      </a></p>
                    <div class="article-user">
                      <img alt="image" src="{{url('frontend/assets/img/avatar/avatar.png')}}">
                      <div class="article-user-details">
                        <div class="user-detail-name">
                          <a href="#" class="text-dark">{{$artikel->users->name}}</a>
                        </div>
                        <div class="text-job">{{  $artikel->category->name }}</div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              @endforeach
              
              @foreach( $artikels as $artikel )
              <div class="col-12 col-md-4 col-lg-4">
                  <article class="article article-style-c shadow">
                    <div class="article-header">
                      <div class="article-image" data-background="{{ asset( $artikel->gambar) }}">
                      </div>
                    </div>
                    <div class="article-details">
                      <div class="article-category"><a href="#">News</a><div class="bullet"></div> <a href="#">{{$artikel->created_at->diffForHumans()}}</a></div>
                      <div class="article-title">
                        <h2><a href="#">{{$artikel->judul}}</a></h2>
                      </div>
                      <p>{!! \Illuminate\Support\Str::limit(strip_tags($artikel->content), $limit= 150, '... ')!!}<br><a href="{{ route('detail.show', $artikel->id ) }}" class="btn btn-primary btn-sm">
                        Read More
                        </a></p>
                      <div class="article-user">
                        <img alt="image" src="{{url('frontend/assets/img/avatar/avatar.png')}}">
                        <div class="article-user-details">
                          <div class="user-detail-name">
                            <a href="#" class="text-dark">{{$artikel->users->name}}</a>
                          </div>
                          <div class="text-job">{{  $artikel->category->name }}</div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                @endforeach
              </div>
        </section>
        
        <hr>

        <section class="section">
          <div class="section-body">
            <h2 class="section-title">ILAB PROCEDURE</h2>
            <p class="section-lead">Seluruh prosedur mengenai Laboratorium Sistem Informatika dan Manajemen Informatika.</p>
          </div>

          <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <article class="article article-style-b shadow">
                <div class="article-header">
                  <a href="#">
                    <div class="article-image" data-background="{{url('frontend/assets/img/images/bglab.jpg')}}">
                    </div>
                  </a>
                </div>
                <div class="article-details">
                  <div class="article-title text-center">
                    <h2><a href="{{ url('/student/login') }}">AKTIVASI AKUN</a></h2>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <article class="article article-style-b shadow">
                <div class="article-header">
                  <a href="#">
                    <div class="article-image" data-background="{{url('frontend/assets/img/images/bglab.jpg')}}">
                    </div>
                  </a>
                </div>
                <div class="article-details">
                  <div class="article-title text-center">
                    <h2><a href="{{ url('/prosedur') }}">TATA TERTIB</a></h2>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <article class="article article-style-b shadow">
                <div class="article-header">
                  <a href="#">
                    <div class="article-image" data-background="{{url('frontend/assets/img/images/bglab.jpg')}}">
                    </div>
                  </a>
                </div>
                <div class="article-details">
                  <div class="article-title text-center">
                    <h2><a href="{{ url('/buku_praktikum') }}">BUKU PRAKTIKUM</a></h2>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <article class="article article-style-b shadow">
                <div class="article-header">
                  <a href="#">
                    <div class="article-image" data-background="{{url('frontend/assets/img/images/bglab.jpg')}}">
                    </div>
                  </a>
                </div>
                <div class="article-details">
                  <div class="article-title text-center">
                    <h2><a href="{{ url('/jadwals') }}">JADWAL PRAKTIKUM</a></h2>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </section><hr>

        <section class="section">
          <div class="section-body">
            <h2 class="section-title">PRAKTIKUM TERKAIT</h2>
            <p class="section-lead">Infromasi mengenai pembelajaran bahasa pemrograman diLaboratorium Sistem Informatika dan Manajemen Informatika.</p>
          </div>

          <div class="row">
            @foreach( $kelas as $item )
            <div class="col-md-12 col-lg-4 mt-3">
              <div class="card small-content">
                  <a href="#">
                      <img src="{{ asset( $item->gambar ) }}" class="card-img-top image-besar" alt="...">
                  </a>
              </div>
            </div>
            @endforeach
            {{-- <div class="col-12 col-md-4 col-lg-4">
              <article class="article article-style-b shadow">
                <div class="article-details">
                  <div class="article-title">
                    <h2><a href="#">Integrated Lab (iLab)</a></h2>
                  </div>
                </div>
                <div class="article-header">
                  <a href="#">
                    <div class="article-image" data-background="{{url('frontend/assets/img/images/bglab.jpg')}}">
                    </div>
                  </a>
                </div>
              </article>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <article class="article article-style-b shadow">
                <div class="article-details">
                  <div class="article-title">
                    <h2><a href="#">Apa itu LAB SI/MI</a></h2>
                  </div>
                </div>
                <div class="article-header">
                  <a href="#">
                    <div class="article-image" data-background="{{url('frontend/assets/img/images/bglab.jpg')}}">
                    </div>
                  </a>
                </div>
              </article>
            </div> --}}
          </div>
        </section>
    </div>
@endsection	
