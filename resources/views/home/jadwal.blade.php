@extends('layouts.home.app')

@section('title', 'ILAB STMIK JAKARTA STI&K')

@section('content')
<div class="main-content">
    <section class="section container">
      <div class="section-header">
        <h1>Jadwal Praktikum</h1>
      </div>

      <div class="section-body mt-4">
        <h2 class="section-title text-center">Jadwal Praktikum</h2>
        <p class="section-lead text-center">Jadwal praktikum lab sistem informasi dan manajemen informatika.</p>
        <div class="card">
          <div class="card-header">
            <h4>JADWAL LAB NCOMPUTING ( DEPAN )</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hovered text-center">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>NAMA PRAKTIKUM</th>
                        <th>KELAS</th>
                        <th>HARI</th>
                        <th>SHIFT</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($jadwalnc as $result => $hasil)
                    <tr>
                        <td>{{ $result + $jadwalnc->firstitem() }}</td>
                        <td>{{ $hasil->praktikum->name }}</td>
                        <td>{{ $hasil->kelas_pr }}</td>
                        <td>{{ $hasil->hari_pr }}</td>
                        <td>{{ $hasil->jam_pr }}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                <div class="text-right">
                  <nav class="d-inline-block">
                    {{ $jadwalnc->onEachSide(1)->links() }}
                  </nav>
                </div>
            </div>
          </div>
        </div>

        <div class="card mt-5">
            <div class="card-header">
              <h4>JADWAL LAB PC ( BELAKANG )</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hovered text-center">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>NAMA PRAKTIKUM</th>
                          <th>KELAS</th>
                          <th>HARI</th>
                          <th>SHIFT</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($jadwalpc as $result => $hasil)
                        <tr>
                            <td>{{ $result + $jadwalpc->firstitem() }}</td>
                            <td>{{ $hasil->praktikum->name }}</td>
                            <td>{{ $hasil->kelas_pr }}</td>
                            <td>{{ $hasil->hari_pr }}</td>
                            <td>{{ $hasil->jam_pr }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="text-right">
                    <nav class="d-inline-block">
                      {{ $jadwalpc->onEachSide(1)->links() }}
                    </nav>
                  </div>
              </div>
            </div>
          </div>
      </div>
    </section>
  </div>
@endsection