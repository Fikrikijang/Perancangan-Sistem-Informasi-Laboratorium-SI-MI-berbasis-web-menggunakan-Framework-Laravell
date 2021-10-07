@extends('template_backend.home')
@section('sub-judul','Tambah Data Mahasiswa')
@section('content')

  
  @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{ $error }}
  </div>      
    @endforeach
  @endif

  <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label for="name">Nama</label>
      <input name="name" type="text" class="form-control" id="name" placeholder="Masukkan Nama">
  </div>
  <div class="form-group">
      <label for="npm">NPM</label>
      <input name="npm" type="text" class="form-control" id="npm" placeholder="Masukkan NPM">
  </div>
  <div class="form-group">
      <label for="tgl_lahir">Tanggal Lahir</label>
      <input name="tgl_lahir" type="text" class="form-control" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
  </div>
  <div class="form-group">
      <label for="kelas">Kelas</label>
      <input name="kelas" type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas">
  </div>
  <div class="form-group">
      <label for="email">Email</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan Email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
</div>
  <div class="form-group">
      <label>Foto</label>
      <input type="file" name="foto" class="form-control">
  </div>
  <div class="form-group">
    <label for="status">Status</label>
    <select name="status" class="form-control" id="status">
    <option>Aktif</option>
    <option>Tidak Aktif</option>
    </select>
  </div>
  <input type="hidden" class="form-control" name="bio" value="-">
  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Data</button>
  </div>

  </form>

@endsection