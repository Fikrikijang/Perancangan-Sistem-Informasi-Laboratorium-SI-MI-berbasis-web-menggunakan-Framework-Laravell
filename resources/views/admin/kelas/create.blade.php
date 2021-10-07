@extends('template_backend.home')
@section('sub-judul','Tambah Kelas Praktikum Labsimi')
@section('content')

  @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  <form action="{{ route('kelas.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" name="judul">
  </div>
  <div class="form-group">
      <label>Gambar</label>
      <input type="file" name="gambar" class="form-control">
  </div>
  <div class="form-group">
      <label>Pilih Kategori</label>
      <select class="form-control select2" multiple="" name="kategoris[]">
          @foreach($kategoris as $kategori)
          <option value="{{ $kategori->id }}">{{ $kategori->name }}</option> 
          @endforeach
      </select>
  </div>
  <div class="form-group">
      <label>Konten</label>
      <textarea class="form-control" name="content" id="content"></textarea>
  </div>

  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Kelas</button>
  </div>

  </form>

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script >
  CKEDITOR.replace( 'content' );

</script>

@endsection