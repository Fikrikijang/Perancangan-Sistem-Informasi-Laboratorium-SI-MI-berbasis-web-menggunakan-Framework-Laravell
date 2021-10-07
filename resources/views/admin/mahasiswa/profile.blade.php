@extends('template_backend.home')
@section('sub-judul','Daftar Nilai')
@section('content')

  <div class="section-body">
    <div class="row mt-sm-4">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card profile-widget">
          <div class="profile-widget-header">
            <img alt="image" src="{{ asset( $mahasiswa->gambar ) }}" class="rounded-circle profile-widget-picture">
            <div class="profile-widget-items">
              <div class="profile-widget-item">
                <div class="profile-widget-item-label">Praktikum</div>
                <div class="profile-widget-item-value">{{$mahasiswa->matkul->count()}}</div>
              </div>
            </div>
          </div>
          <div class="profile-widget-description">
            <div class="profile-widget-name">{{$mahasiswa->npm}} 
              <div class="text-muted d-inline font-weight-normal">
                <div class="slash">
                  </div> {{$mahasiswa->nama}}</div>
                </div>
            <h3 class="text-center">{{ $mahasiswa->kelas }}</h3>
          </div>
          
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-8">
        <a href="/mahasiswa/{{ $mahasiswa->id }}/tambah" class="btn btn-info btn-sm">Tambah Nilai</a>
        <div class="card">
          <div class="card-header">
            <h4>Praktikum Laboratorium</h4>
          </div>
          <div class="card-body mt-2">
            <div class="table-responsive">
              <table class="table table-striped table-md">
                <thead>
                  <tr>
                    <th>KODE</th>
                    <th>NAMA</th>
                    <th>SEMESTER</th>
                    <th>PERTEMUAN</th>
                    <th>NILAI</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($mahasiswa->matkul as $item)
                  <tr>
                    <td>{{ $item->kode }}</td>
                    <td>{{ $item->nama  }}</td>
                    <td>{{ $item->semester }}</td>
                    <td>{{ $item->pivot->pertemuan }}</td>
                    <td>{{ $item->pivot->nilai }}</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
            </div>
          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>




@stop