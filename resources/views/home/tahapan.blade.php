@extends('layouts.home.app')

@section('title', 'ILAB STMIK JAKARTA STI&K')

@section('content')
<div class="main-content">
  <section class="section container">
    <div class="section-header">
      <h1 class="text-center">Tahapan Praktikum</h1>
    </div>

    <div class="section-body mt-4">
      <h2 class="section-title text-center">Tahapan Praktikum</h2>
      <p class="section-lead text-center">Tahapan Praktikum lab sistem informasi dan manajemen informatika.</p>
      

      <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <img src="{{url('frontend/assets/img/images/labsimi1.jpg')}}" class="img-fluid" alt="Responsive image" width="400px">
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <img src="{{url('frontend/assets/img/images/labsimi2.jpg')}}" class="img-fluid" alt="Responsive image" width="400px">  
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <img src="{{url('frontend/assets/img/images/labsimi3.jpg')}}" class="img-fluid" alt="Responsive image" width="400px">    
        </div>
      </div>
    </div>
  </section>
</div>
@endsection