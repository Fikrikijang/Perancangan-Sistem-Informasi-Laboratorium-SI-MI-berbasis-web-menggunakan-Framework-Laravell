@extends('template_backend.home')
@section('sub-judul','Ubah Struktur Laboratorium')
@section('content')

  @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  <form action="{{ route('strukturlab.update', $strukturlab->id ) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" name="nama" value="{{ $strukturlab->nama }}">
  </div>
  <div class="form-group">
    <label for="jabatan">Pilih Jabatan</label>
    <select name="jabatan" class="form-control" id="jabatan">
        <option value="Kepala Laboratorium SI/MI" @if($strukturlab->jabatan == 'Kepala Laboratorium SI/MI') selected @endif>Kepala Laboratorium SI/MI</option>
        <option value="Staff Administrasi Laboratorium SI/MI" @if($strukturlab->jabatan == 'Staff Administrasi Laboratorium SI/MI') selected @endif>Staff Administrasi Laboratorium SI/MI</option>
        <option value="Staff Maintenance Laboratorium SI/MI" @if($strukturlab->jabatan == 'Staff Maintenance Laboratorium SI/MI') selected @endif>Staff Maintenance Laboratorium SI/MI</option>
    </select>
 </div>
 <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="email" value="{{ $strukturlab->email }}">
  </>
  <div class="form-group">
      <label>Foto</label>
      <input type="file" name="gambar" class="form-control">
  </div>
  
  <div class="form-group">
      <button class="btn btn-primary btn-block">Ubah Data</button>
  </div>

  </form>

@endsection