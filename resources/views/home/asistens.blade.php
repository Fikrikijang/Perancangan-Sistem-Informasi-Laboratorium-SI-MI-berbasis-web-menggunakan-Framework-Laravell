@extends('layouts.home.app')

@section('title', 'ILAB STMIK JAKARTA STI&K')

@section('content')

<section class="content-playlist mt-5">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 list-playlist">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-8 col-sm-12 col-xs-12 mt-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h3 class="mt-0"><b>Asisten Laboratorium SI/MI</b></h3>

                                    <div class="container">
                                        <div class="row">
                                            @foreach ($asisten as $result => $hasil)
                                                    @if($hasil->status==(1) AND ($hasil->akun==(1)))
                                                        <div class="col">
                                                            <img src="{{ asset( $hasil->gambar ) }}" width="300" height="300" style="display: block; margin: auto;">
                                                            <div class="card-body text-center">
                                                                <h5 class="card-title"><b>Asisten Laboratorium</b></h5>
                                                                <p class="card-text">{{ $hasil->nama }}</p>
                                                            </div>
                                                        </div>
                                                    @endif
                                            @endforeach
                                        </div>
                                      </div>
                                      <div class="text-center">
                                        <nav class="d-inline-block">
                                            {{ $asisten->onEachSide(1)->links() }}
                                        </nav>
                                      </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-lg-4 mt-2">
                            <div class="row">
                                @foreach ($kelas as $result => $hasil)
                                <div class="col-md-12 col-lg-12 mt-2">
                                    <div class="card small-content">
                                        <a href="#">
                                            <img src="{{ asset( $hasil->gambar ) }}" class="card-img-top image-besar" alt="...">
                                        </a>
                                        <div class="card-body">
                                            @foreach($hasil->kategoris as $kategori)
                                                <ul>
                                                    <h5><span class="badge badge-info">{{ $kategori->name }}</span></h5>
                                                </ul>
                                            @endforeach	
                                            <a href="#">
                                                <h6 class="card-title">{{ $hasil->judul }}</h6>
                                            </a>
                                            <p class="card-text"><small class="text-muted">{{ $hasil->created_at->diffForHumans() }}</small></p>
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