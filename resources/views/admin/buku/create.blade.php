@extends('template_backend.home')
@section('sub-judul','Tambah Buku Praktikum')
@section('content')

  
  @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{ $error }}
  </div>      
    @endforeach
  @endif

  <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label for="nama_buku">Nama Buku</label>
      <input name="nama_buku" type="text" class="form-control" id="nama_buku" placeholder="Masukkan Nama Buku">
  </div>
  <div class="form-group">
      <label>File Dokument</label>
      <input type="file" name="file" class="form-control">
  </div>
  
  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Data</button>
  </div>

  </form>

@endsection