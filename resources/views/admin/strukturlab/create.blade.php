@extends('template_backend.home')
@section('sub-judul','Tambah Struktur Laboratorium')
@section('content')

  
  @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{ $error }}
  </div>      
    @endforeach
  @endif

  <form action="{{ route('strukturlab.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label for="nama">Nama</label>
      <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
  </div>
  <div class="form-group">
    <label for="jabatan">Jabatan</label>
    <select name="jabatan" class="form-control" id="jabatan">
    <option selected>Pilih Jabatan</option>
    <option>Kepala Laboratorium SI/MI</option>
    <option>Staff Administrasi Laboratorium SI/MI</option>
    <option>Staff Maintenance Laboratorium SI/MI</option>
    </select>
  </div>
  <div class="form-group">
      <label for="email">Email</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan email">
  </div>
  <div class="form-group">
      <label>Foto</label>
      <input type="file" name="gambar" class="form-control">
  </div>
  
  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Data</button>
  </div>

  </form>

@endsection