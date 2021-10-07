@extends('layouts.home.app')

@section('title')

@section('content')

<section class="content-playlist mt-5">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 list-playlist">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-8 col-sm-12 col-xs-12 mt-2">
                            <div class="card shadow">
                                <div class="card">
                                    <div class="card text-white bg-danger">
                                        <h3 class="text-center"><b>~" Berita dan Kegiatan Laboratorium SI/MI "~</b></h3>
                                    </div>
                                    <div class="container mt-2">
                                        <div class="row">
                                            @foreach( $artikelsAwal as $artikel )
                                                <div class="card big-content">
                                                    <img src="{{ asset( $artikel->gambar) }}"
                                                        class="card-img-top img-fluid image-besar" alt="...">
                                                    <div class="card-body">
                                                        <h4>
                                                            <a href="#"><span class="badge badge-danger"><i class="fas fa-fire"></i> Trending</span></a>
                                                            <a href="#"><span class="badge badge-success">{{  $artikel->category->name }}</span></a>
                                                        </h4>
                                                        <a href="#">
                                                            <h5 class="card-title">{{$artikel->judul}}</h5>
                                                        </a>
                                                        <div class="desc-content d-none d-lg-block">
                                                            <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($artikel->content), $limit= 150, "Selengkapnya ...")}} <a href="{{ route('detail.show', $artikel->id ) }}" class="text-dark">Selengkapnya ->>></a>
                                                            </p>
                                                        </div>
                                                        <p class="card-text"><small class="text-muted">{{$artikel->created_at->diffForHumans()}}</small></p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-lg-4 mt-2">
                            <div class="row">
                                @foreach( $artikels as $artikel )
                                <div class="col-md-12 col-lg-12 mt-2">
                                    <div class="card small-content">
                                        <a href="{{ route('detail.show', $artikel->id ) }}">
                                            <img src="{{ asset( $artikel->gambar) }}"
                                                class="card-img-top image-besar" alt="...">
                                        </a>
                                        <div class="card-body">
                                            <h5>
                                                <a href="#"><span class="badge badge-success">{{  $artikel->category->name }}</span></a>
                                            </h5>
                                            <a href="{{ route('detail.show', $artikel->id ) }}">
                                                <h5 class="card-title">{{$artikel->judul}}</h5>
                                            </a>
                                            <p class="card-text"><small class="text-muted">{{$artikel->created_at->diffForHumans()}}</small></p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection