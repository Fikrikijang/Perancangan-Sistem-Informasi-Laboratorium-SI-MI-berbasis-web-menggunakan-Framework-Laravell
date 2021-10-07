@extends('template_backend.home')
@section('sub-judul','Edit Asisten')
@section('content')

  @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  <form action="{{ route('asisten.update', $asisten->id ) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" name="nama" value="{{ $asisten->nama }}">
  </div>
  <div class="form-group">
      <label>NPM</label>
      <input type="text" class="form-control" name="npm" value="{{ $asisten->npm }}">
  </div>
  <div class="form-group">
      <label>Tanggal Lahir</label>
      <input type="text" class="form-control" name="tgl_lahir" value="{{ $asisten->tgl_lahir }}">
  </div>
  <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="email" value="{{ $asisten->email }}">
  </div>
  <div class="form-group">
      <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
      <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
      <option value="Laki-laki" @if($asisten->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
      <option value="Perempuan" @if($asisten->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
      </select>
  </div>
  <div class="form-group">
      <label for="agama">Agama</label>
      <input name="agama" type="text" class="form-control" id="agama" value="{{ $asisten->agama }}">
  </div>
  <div class="form-group">
      <label for="no_hp">Nomor Handphone</label>
      <input name="no_hp" type="text" class="form-control" id="no_hp" value="{{ $asisten->no_hp }}">
  </div>
  
  <div class="form-group">
      <label>Thumbnail</label>
      <input type="file" name="gambar" class="form-control">
  </div>
  <div class="form-group">
      <label for="alamat">Alamat</label>
      <textarea name="alamat" class="form-control" id="alamat" rows="3">{{ $asisten->alamat }}</textarea>
  </div>
  <div class="form-group">
      <label for="status">Pilih Status</label>
      <select name="status" class="form-control" id="status">
          <option value="1" @if($asisten->status == '1') selected @endif>Aktif</option>
          <option value="0" @if($asisten->status == '0') selected @endif>Tidak Aktif</option>
      </select>
  </div>
  <div class="form-group">
      <label for="akun">Pilih Status Akun</label>
      <select name="akun" class="form-control" id="akun">
          <option value="1" @if($asisten->akun == '1') selected @endif>Asisten Laboratorium</option>
          <option value="2" @if($asisten->akun == '2') selected @endif>Staf Laboratorium</option>
      </select>
  </div>
  <div class="form-group">
      <button class="btn btn-primary btn-block">Update Kategori</button>
  </div>

  </form>

@endsection