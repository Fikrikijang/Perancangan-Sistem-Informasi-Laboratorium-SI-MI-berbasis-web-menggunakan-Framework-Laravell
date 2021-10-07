@extends('template_backend.home')
@section('sub-judul','Tambah Asisten')
@section('content')

  
  @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{ $error }}
  </div>      
    @endforeach
  @endif

  <form action="{{ route('asisten.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label for="nama">Nama</label>
      <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
  </div>
  <div class="form-group">
      <label for="npm">NPM</label>
      <input name="npm" type="text" class="form-control" id="npm" placeholder="Masukkan npm">
  </div>
  <div class="form-group">
      <label for="tgl_lahir">Tanggal Lahir</label>
      <input name="tgl_lahir" type="text" class="form-control" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
  </div>
  <div class="form-group">
      <label for="email">Email</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan email">
  </div>
  <div class="form-group">
      <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
      <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
      <option>Laki-laki</option>
      <option>Perempuan</option>
      </select>
  </div>
  <div class="form-group">
      <label for="agama">Agama</label>
      <input name="agama" type="text" class="form-control" id="agama" placeholder="Masukkan agama">
  </div>
  <div class="form-group">
      <label for="no_hp">Nomor Handphone</label>
      <input name="no_hp" type="text" class="form-control" id="no_hp" placeholder="Masukkan Handphone">
  </div>
  <div class="form-group">
      <label for="status">Status</label>
      <select name="status" class="form-control" id="status">
      <option value="1">Aktif</option>
      <option value="0">Tidak Aktif</option>
      </select>
  </div>
  <div class="form-group">
      <label for="akun">Status Akun</label>
      <select name="akun" class="form-control" id="akun">
      <option value="1">Asisten Laboratorium</option>
      <option value="2">Staf Laboratorium</option>
      </select>
  </div>
  <div class="form-group">
      <label>Foto</label>
      <input type="file" name="gambar" class="form-control">
  </div>
  <div class="form-group">
      <label for="alamat">Alamat</label>
      <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
  </div>

  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Data</button>
  </div>

  </form>

@endsection