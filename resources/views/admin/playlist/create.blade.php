@extends('template_backend.home')
@section('sub-judul','Tambah Playlist')
@section('content')


  <form action="{{ route('playlist.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label>Pertemuan</label>
      <input type="text" class="form-control" name="pertemuan">
  </div>
  <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" name="judul">
  </div>
  <div class="form-group">
      <label>Praktikum</label>
      <select class="form-control" name="praktikum_id">
      	<option value="" holder>Pilih Praktikum</option>
      	@foreach($praktikum as $result)
      	<option value="{{ $result->id }}">{{  $result->name }}</option>
      	@endforeach
      </select>
  </div>
  <div class="form-group">
      <label>Kelas</label>
      <select class="form-control" name="kelas_id">
      	<option value="" holder>Pilih Kelas</option>
      	@foreach($kelas as $result)
      	<option value="{{ $result->id }}">{{  $result->judul }}</option>
      	@endforeach
      </select>
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
      <label>Modul</label>
      <input type="file" name="file" class="form-control">
  </div>
  <div class="form-group">
    <label>Video</label>
    <input type="text" name="video" class="form-control" placeholder="Kode Video Youtube" value="{{ old('video') }}" required>
						<small class="text-gray">Contoh: <span class="text-success">https://www.youtube.com/watch?v=</span><strong class="text-danger">IvjxrQ8c4-w</strong>.
							<br>Copy kode <strong class="text-danger">IvjxrQ8c4-w</strong> sebagai kode Youtube.</small>
</div>

  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Playlist</button>
  </div>

  </form>

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script >
  CKEDITOR.replace( 'content' );

</script>

@endsection