@extends('template_backend.home')
@section('sub-judul','Ubah Buku Praktikum')
@section('content')

  @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  <form action="{{ route('buku.update', $buku->id ) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" name="nama_buku" value="{{ $buku->nama_buku }}">
  </div>
  <div class="form-group">
      <label>File Dokument</label>
      <input type="file" name="file" class="form-control">
  </div>
  
  <div class="form-group">
      <button class="btn btn-primary btn-block">Ubah Data</button>
  </div>

  </form>

@endsection