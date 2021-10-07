@extends('template_backend.home')
@section('sub-judul','Profil')
@section('content')

  @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	  </div>  		
  	@endforeach
  @endif

  @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	  </div> 
  	
  @endif

	    <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-5">
          <div class="card profile-widget">
            <div class="profile-widget-header">
              <img alt="image" src="{{ asset( $user->foto ) }}" class="rounded-circle profile-widget-picture">
              <div class="profile-widget-items">
                <div class="profile-widget-item">
                  <div class="profile-widget-item-value">{{ $user->name }}</div>
                </div>
              </div>
            </div>
            <div class="profile-widget-description">
              <div class="profile-widget-name">
                <div class="text-muted d-inline font-weight-normal">
                  @if($user->tipe)
                    Admin Laboratorium
                    @else
                    Staff Laboratorium
                  @endif
                </div>
              </div>
              Konsep integrated laboratory, merupakan konsep mengintegrasikan semua elemen kegiatan pada laboratorium.
            </div>
            <div class="card-footer text-center">
              <div class="font-weight-bold mb-2"></div>
              <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="btn btn-social-icon btn-github mr-1">
                <i class="fab fa-github"></i>
              </a>
              <a href="#" class="btn btn-social-icon btn-instagram">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form action="{{ route('profil.update', $user->id ) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="card-header">
                <h4>Edit Profile</h4>
              </div>
              <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6 col-12">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="name" value="{{ $user->name }}" >
                      <div class="invalid-feedback">
                       
                      </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" >
                        <div class="invalid-feedback">
                          Please fill in the email
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6 col-12">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" >
                        <div class="invalid-feedback">
                          Please fill in the last name
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>Foto</label>
                      <input type="file" name="foto" class="form-control">
                    </div>
                  </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Ubah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
	


      @endsection