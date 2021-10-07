@extends('template_backend.home')
@section('sub-judul','Ubah Kategori - Playlist')
@section('content')

  @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  <form action="{{ route('kategoris.update', $kategoris->id ) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group">
      <label>Kategori Playlist</label>
      <input type="text" class="form-control" name="name" value="{{ $kategoris->name }}">
  </div>

  <div class="form-group">
      <button class="btn btn-primary btn-block">Update Kategori</button>
  </div>

  </form>


@endsection