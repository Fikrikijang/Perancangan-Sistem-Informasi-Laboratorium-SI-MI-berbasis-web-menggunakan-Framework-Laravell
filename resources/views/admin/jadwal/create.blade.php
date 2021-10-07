@extends('template_backend.home')
@section('sub-judul','Tambah Jadwal Praktikum')
@section('content')

  <div class="col-12">
    <div class="card">
      <form action="{{ route('jadwal.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <div class="row">
              <div class="form-group col-md-6 col-12">
                <label for="ruang_pr">LABORATORIUM</label>
                <select name="ruang_pr" class="form-control" id="ruang_pr">
                    <option>Pilih Laboratorium</option>
                    <option>LAB NComputing</option>
                    <option>LAB PC</option>
                </select>
              </div>
              <div class="form-group col-md-6 col-12">
                <label for="hari_pr">HARI</label>
                <select name="hari_pr" class="form-control" id="hari_pr">
                    <option>Pilih Hari Praktikum</option>
                    <option>Senin</option>
                    <option>Selasa</option>
                    <option>Rabu</option>
                    <option>Kamis</option>
                    <option>Jum'at</option>
                    <option>Sabtu</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6 col-12">
                <label for="kelas_pr">KELAS</label>
                <input name="kelas_pr" type="text" class="form-control" id="kelas_pr" placeholder="Masukkan Kelas">
              </div>
              <div class="form-group col-md-6 col-12">
                <label for="jam_pr">SHIFT</label>
                <input name="jam_pr" type="text" class="form-control" id="jam_pr" placeholder="Masukkan Shif Praktikum">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-12">
                <label>PRAKTIKUM</label>
                <select class="form-control" name="praktikum_id">
                    <option value="" holder>Pilih Praktikum</option>
                    @foreach($praktikum as $result)
                    <option value="{{ $result->id }}">{{  $result->name }}</option>
                    @endforeach
                </select>
              </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary btn-block">Simpan Jadwal</button>
        </div>
      </form>
    </div>
  </div>

@endsection