@extends('layouts.home.app')

@section('title', 'ILAB STMIK JAKARTA STI&K')

@section('content')
<section class="content-playlist mt-5">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 list-playlist">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 col-lg-9 playlist-all">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h3 class="mt-0"><b>Struktur Organisasi</b></h3>

                                    <div class="container">
                                        <div class="row">
                                            @foreach ($strukturlab as $result => $hasil)
                                          <div class="col">
                                            <img src="{{ asset( $hasil->gambar ) }}" width="250" height="300" style="display: block; margin: auto;">
                                            <div class="card-body text-center">
                                                <h5 class="card-title"><b>{{ $hasil->jabatan }}</b></h5>
                                                <p class="card-text">{{ $hasil->nama }}</p>
                                            </div>
                                            @endforeach
                                          </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($strukturlabs as $result => $hasil)
                                                <div class="col">
                                                    <img src="{{ asset( $hasil->gambar ) }}" width="250" height="300" style="display: block; margin: auto;">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title"><b>{{ $hasil->jabatan }}</b></h5>
                                                        <p class="card-text">{{ $hasil->nama }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                      </div>


                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-lg-3 mt-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-header text-white" style="background-color: #05056d;">
                                    Artikel Terbaru
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach ($artikels as $result => $hasil)
                                        <a href="{{ route('detail.show', $hasil->id ) }}" class="text-dark">
                                            <li class="list-group-item"><i class="fa fa-newspaper"></i> {{ $hasil->judul }}</li>
                                        </a> 
                                    @endforeach
                                </ul>
                            </div>
                            <div class="card mt-5" style="width: 18rem;">
                                @foreach ($artikelsAwal as $result => $hasil)
                                <a href="{{ route('detail.show', $hasil->id ) }}" >
                                    <img src="{{ asset( $hasil->gambar) }}" class="card-img-top" alt="...">
                                </a>
                                    <div class="card-body">
                                        <span class="badge badge-primary mt-1">{{  $hasil->category->name }}</span>
                                        <h5 class="card-title"><a href="{{ route('detail.show', $hasil->id ) }}" class="text-dark">{{$hasil->judul}}</a></h5>
                                        <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($hasil->content), $limit= 20, "...")}}</p>
                                        <div class="bullet"></div> <a href="#">{{$hasil->created_at->diffForHumans()}}</a></div>
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