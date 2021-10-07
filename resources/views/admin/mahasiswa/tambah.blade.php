@extends('template_backend.home')
@section('sub-judul','Tambah Nilai Praktikum')
@section('content')

  
  @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{ $error }}
  </div>      
    @endforeach
  @endif

<form action="/mahasiswa/{{ $mahasiswa->id }}/addnilai" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="card-body">
    <div class="row">
      <div class="form-group col-md-12 col-12">
        <div class="form-group">
          <label for="matkul">Praktikum Lab</label>
          <select class="form-control" name="matkul" id="matkul">
            @foreach($matkul as $hasil)
              <option value="{{ $hasil->id }}">{{ $hasil->nama }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group col-md-12 col-12">
        <label for="pertemuan">Pertemuan</label>
        <input name="pertemuan" type="text" class="form-control" id="pertemuan" placeholder="Masukkan Pertemuan">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-12 col-12">
        <label for="nilai">Nilai Praktikum</label>
        <input name="nilai" type="text" class="form-control" id="nilai" placeholder="Masukkan Nilai">
      </div>
    </div>
      <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
  </div>
</form>

@endsection