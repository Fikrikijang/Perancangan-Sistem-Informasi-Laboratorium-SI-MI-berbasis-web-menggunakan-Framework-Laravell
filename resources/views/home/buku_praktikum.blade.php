@extends('layouts.home.app')

@section('title', 'ILAB STMIK JAKARTA STI&K')

@section('content')
<div class="main-content">
    <section class="section container">
      <div class="section-header">
        <h1>Buku Praktikum</h1>
      </div>

      <div class="section-body mt-4">
        <h2 class="section-title text-center">Buku Praktikum</h2>
        <p class="section-lead text-center">Buku Praktikum lab sistem informasi dan manajemen informatika.</p>
        <div class="card">
          <div class="card-header">
            <h4>DAFTAR BUKU PRAKTIKUM LABORATORIUM SI/MI</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hovered">
                  <thead>
                    <tr class="text-center">
                        <th>NO.</th>
                        <th>NAMA BUKU PRAKTIKUM</th>
                        <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($bukus as $result => $hasil)
                    <tr>
                        <td class="text-center">{{ $result + $bukus->firstitem() }}</td>
                        <td>{{ $hasil->nama_buku }}</td>
                        <td class="text-center">
                          <a href="/download/{{ $hasil->file }} " class="btn btn-success btn-sm"> <i class="fa fa-download"></i> Download</a>
                        </td>
                    </tr>
                  @endforeach 
                  </tbody>
                </table>
            </div>
          </div>
        </div>
    </section>
  </div>
@endsection