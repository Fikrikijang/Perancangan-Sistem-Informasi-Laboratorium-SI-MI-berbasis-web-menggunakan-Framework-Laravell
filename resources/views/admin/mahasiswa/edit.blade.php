@extends('template_backend.home')
@section('sub-judul','Ubah Data Mahasiswa')
@section('content')

  @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  <form action="{{ route('mahasiswa.update', $mahasiswa->id ) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" name="name" value="{{ $mahasiswa->name }}">
  </div>
  <div class="form-group">
      <label>NPM</label>
      <input type="text" class="form-control" name="npm" value="{{ $mahasiswa->npm }}">
  </div>
  <div class="form-group">
      <label>Tanggal Lahir</label>
      <input type="text" class="form-control" name="tgl_lahir" value="{{ $mahasiswa->tgl_lahir }}">
  </div>
  <div class="form-group">
      <label>Kelas</label>
      <input type="number" class="form-control" name="kelas" value="{{ $mahasiswa->kelas }}">
  </div>
  <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="email" value="{{ $mahasiswa->email }}">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" name="password">
</div>
  <div class="form-group">
      <label>Foto</label>
      <input type="file" name="foto" class="form-control">
  </div>
  <div class="form-group">
    <label for="status">Pilih status</label>
    <select name="status" class="form-control" id="status">
        <option value="Aktif" @if($mahasiswa->status == 'Aktif') selected @endif>Aktif</option>
        <option value="Tidak Aktif" @if($mahasiswa->status == 'Tidak Aktif') selected @endif>Tidak Aktif</option>
    </select>
</div>
  <div class="form-group">
      <button class="btn btn-primary btn-block">Update Mahasiswa</button>
  </div>

  </form>

@endsection