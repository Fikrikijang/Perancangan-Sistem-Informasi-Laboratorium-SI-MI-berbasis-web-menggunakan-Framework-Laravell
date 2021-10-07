@extends('template_backend.home')
@section('sub-judul','Tambah Kategori - Playlist')
@section('content')

  @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  <form action="{{ route('kategoris.store') }}" method="POST">
  @csrf
  <div class="form-group">
      <label>Kategori Playlist</label>
      <input type="text" class="form-control" name="name">
  </div>

  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Kategori Playlist</button>
  </div>

  </form>


@endsection