@extends('layouts.mahasiswa.main')

@section('title', 'Playlist')

@section('content')

<section class="content-episode">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12 col-lg-12 header-episode">
                <div class="episode-all">
                    <div class="row">
                        <div class="col-md-12 col-lg-9 video-episode">
                            <div class="card shadow play-video">
                                <div class="embed-responsive embed-responsive-16by9 video-all">
                                   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $playlist->video }}?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-3">
                            <div class="card shadow play-list">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row">
                                            @foreach ($playlists as $hasil)
                                                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"><i class="fa fa-play"></i></div>
                                                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10"> {{ $hasil->judul }}</div>
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-12 stats-episode">
                <h5> <i class="fa fa-info-circle"> </i> Playlist </h5>
            </div>

            <div class="col-md-12 col-lg-12 desc-episode">
                <div class="row">
                    <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 text-center">
                        <i class="fa fa-photo-video logo-video"></i><br>
                    </div>
                    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10">
                        <h4>{{ $playlist->judul}}</h4>
                            
                        @foreach($playlist->kategoris as $kategori)
                        <h5>
                            <a href="#" class="badge badge-primary">{{ $kategori->name }}</a>
                        </h5>
                        @endforeach
                        <p>{{ (strip_tags($playlist->content))}}
                        </p>
                        <hr>
                        <p><b>JUDUL VIDEO</b></p>
                        <a href="{{ url('/student/download',$playlist->file) }}" class="btn btn-sm btn-primary">Download Modul</a>
                        <p><small><i class="fa fa-file-upload"></i> {{ $playlist->created_at}} | <i class="fa fa-clock"></i> Runtime 4:00 | <b>Admin</b></small></p>
                    </div>
                </div><hr>
            </div>
            
        </div>
    </div>
</section>

@endsection