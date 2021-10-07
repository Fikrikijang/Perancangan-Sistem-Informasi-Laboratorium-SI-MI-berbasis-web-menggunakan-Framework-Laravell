@extends('template_backend.home')
@section('sub-judul','Detail Calon Asisten LAB')
@section('content')

<div class="row" >
    <div class="col-12 col-md-12 col-lg-8 mx-auto">
        <div class="card profile-widget ">
          <div class="profile-widget-header">
            <img alt="image" src="{{ asset( $calas->foto ) }}" class="rounded-circle profile-widget-picture">
            <div class="profile-widget-items">
              <div class="profile-widget-item">
                <div class="profile-widget-item-value">{{ $calas->nama }}</div>
              </div>
            </div>
          </div>
          <div class="profile-widget-description">
            <div class="profile-widget-name">
              <div class="text-dark d-inline font-weight-normal">
                {{ $calas->npm }}
              </div>
            </div>
            <span>
                <table class="table table-md">
                    <tbody>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: {{ $calas->jk }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: {{ $calas->email }}</td>
                        </tr>
                        <tr>
                            <td>IPK</td>
                            <td>: {{ $calas->ipk }}</td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>: {{ $calas->telp }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: {{ $calas->alamat }}</td>
                        </tr>
                    </tbody>
                </table>

            </span>
          </div>
          <div class="card-footer text-center">
            <a href="{{ route('calas.index') }}" class="btn btn-primary">Kembali</a>
          </div>
        </div>
      </div>
</div>
	


      @endsection