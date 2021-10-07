@extends('layouts.mahasiswa.main')

@section('title', 'Playlist')

@section('content')

<section class="content-playlist mt-1">
    
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12 col-lg-12 header-playlist">
                <div class="jumbotron header-all">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 headerpl-kiri">
                            @foreach($kelas->kategoris as $kategori)
                            <h5>
                                <span class="badge badge-secondary">{{ $kategori->name }}</span>
                            </h5>
                            @endforeach

                            <h2>{{ $kelas->judul }}</h2>
                            <p>{{ (strip_tags($kelas->content))}}</p>
                            <a href="#mulai" class="btn btn-lg btn-login tombol-mulai">Mulai Belajar</a>
                        </div>
                        <div class="col-md-6 col-lg-6 headerpl-kanan d-none d-lg-block">
                            <div class="card text-center shadow-lg">
                                <img src="{{url('frontend/assets/img/images/bglab.jpg')}}" class="gambar-playlist" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-12 list-playlist" id="mulai">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 tb-share">
                            <a href="#" class="btn btn-lg share-link"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" class="btn btn-lg share-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-lg share-link"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-md-8 col-lg-8 playlist-all">
                            <div class="card shadow">
                                <div class="card-header">
                                  Menu Playlist
                                </div>
                                <ul class="list-group list-group-flush">
                                  @foreach ($kelas->playlists as $hasil)
                                        <li class="list-group-item"><i class="fa fa-play"></i><a href="{{ url('/student/play_video',$hasil->id) }}" class="text-dark">  {{ $hasil->pertemuan }} ({{ $hasil->judul }})</a></li>
                                  @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 modul-all">
                            <div class="card shadow">
                                <div class="card-header">
                                  Download Modul!
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach ($kelas->playlists as $hasil)
                                        <a href="{{ url('/student/download',$hasil->file) }}" class="text-dark">
                                            <li class="list-group-item"><i class="fa fa-download"></i> |  Modul {{ $hasil->pertemuan }}</li>
                                        </a>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

@endsection