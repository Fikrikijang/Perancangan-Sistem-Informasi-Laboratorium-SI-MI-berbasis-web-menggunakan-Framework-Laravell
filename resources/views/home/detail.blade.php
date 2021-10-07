@extends('layouts.home.app')

@section('title', 'ILAB STMIK JAKARTA STI&K')

@section('content')

<section class="content-playlist mt-5">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 list-playlist">
                
                    <div class="row">
                        <div class="container">
                            <div class="col-md-11">
                                <div class="row">
                                    <div class="col-md-9 mt-3"> 
                                        @foreach($post->tags as $tag)
                                            <h5>{{ $tag->name }} / {{ $post->category->name }}</h5>
                                        @endforeach	
                                    </div>
                                    <div class="col-md-9 ">
                                        <h2>{{ $post->judul }}</h2>
                                        <div class="">
                                            <h5>
                                                <strong>
                                                    @if($post->tipe == 1)
                                                        Admin Laboratorium SI/MI
                                                    @else
                                                        Staff Laboratorium SI/MI
                                                    @endif - 
                                                </strong>
                                                {{ $post->created_at }}
                                            </h5>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-9 ">
                                        <a href="" title="Share on Twitter" target="_blank" class="btn btn-info">
                                            <i class="fab fa-twitter"></i> Twitter</a>
                                        <a href="" title="Share on Facebook" target="_blank" class="btn btn-primary">
                                            <i class="fab fa-facebook"></i> Facebook</a>
                                        <a href="" title="Share on Instagram" target="_blank" class="btn btn-danger">
                                            <i class="fab fa-instagram"></i> Instagram</a>
                                    </div>
                                
                                    <div class="col-md-9 ">
                                        <div class="row">
                                            <div class="col-md-12 view mt-3">
                                                <img src="{{ asset( $post->gambar ) }}" width="500" height="300" style="display: block; margin: auto;">
                                                <p>{!! $post->content !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="card" style="width: 18rem;">
                                            <div class="card-header text-white" style="background-color: #05056d;">
                                                Artikel Terbaru
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                @foreach ($posts as $result => $hasil)
                                                    <a href="{{ route('detail.show', $hasil->id ) }}" class="text-dark"><li class="list-group-item"><i class="fa fa-newspaper"></i> {{ $hasil->judul }}</li></a> 
                                                @endforeach
                                            </ul>
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