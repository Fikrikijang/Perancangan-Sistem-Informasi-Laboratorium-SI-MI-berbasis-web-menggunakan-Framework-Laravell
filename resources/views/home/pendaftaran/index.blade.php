@extends('layouts.home.app')

@section('title')

@section('content')
@if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
  	
  @endif
  

<div class="main-content">
    <section class="section container">
      <div class="section-header">
        <h1>Daftar Asisten</h1>
      </div>

      <div class="section-body mt-4">
        <h2 class="section-title text-center">Pendaftaran Asisten Baru</h2>
        <p class="section-lead text-center">Daftar Asisten Lab Sistem Informasi dan Manajemen Informatika.</p>
        <div class="card">
          <div class="card-header text-center bg-primary text-white">
            <h4><b>FORMULIR PENDAFTARAN ASISTEN BARU</b></h4>
          </div>
          <div class="card-body">
            <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control"  name="nama" id="nama" placeholder="Masukkan Nama Lengkap">
              </div>
              <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" name="npm" class="form-control" id="npm" placeholder="Masukkan NPM">
              </div>
              <div class="form-group">
                <label for="email">Email </label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email ">
              </div>
              <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select name="jk" class="form-control" id="jk">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="ipk">IPK</label>
                  <input type="text" name="ipk" class="form-control" id="ipk" placeholder="Masukkan Nilai IPK">
              </div>
              <div class="form-group">
                  <label for="foto">Upload Foto</label>
                  <input type="file" name="foto" class="form-control" id="foto">
              </div>
              <div class="form-group">
                  <label for="krs">Upload KRS</label>
                  <input type="file" name="krs" class="form-control" id="krs">
              </div>
              <div class="form-group">
                  <label for="dns">Upload DNS</label>
                  <input type="file" name="dns" class="form-control" id="dns">
              </div>
              <div class="form-group">
                  <label for="telp">Telepon/Hp</label>
                  <input type="text" name="telp" class="form-control" id="telp" placeholder="Masukkan telp">
                </div>
              <div class="form-group">
                <label for="alamat">Alamat Lengkap</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-lg btn-block">KIRIM</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@section('footer')

@if(session('success'))
        <script type="text/javascript">
            Swal.fire({
        title: 'Sukses ...',
        icon: 'success',
        text: '{{ session("success") }}',
        showClass: {
            popup: 'animated bounceInDown slow'
        },
        hideClass: {
            popup: 'animated bounceOutDown slow'
        }
        })
        </script>
    @endif


@stop