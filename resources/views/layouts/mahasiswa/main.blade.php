<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ILABSIMI STMIK Jakarta STI&K @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/playlist.css')}}">

  </head>
  <body>

        <section class="navbar-atas">
            <div class="container">
                <nav class="row navbar navbar-dark fixed-top navbar-expand-lg" style="background-color: #080446fa;">
                    <a href="#" class="navbar-brand">
                        <img src="{{url('frontend/assets/img/logolab.png')}}" alt="ini logo">
                    </a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navb">
                        <ul class="navbar-nav ml-auto mr-3">
                            <li class="nav-item zmx-md-2">
                                <a href="{{ url('/student') }}" class="nav-link active">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Belajar
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/student/kelas') }}">Kelas</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle" src="{{ asset(\Auth::guard('student')->user()->foto ) }}" width="60px" height="60px">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/student/profil', \Auth::guard('student')->user()->id) }}">Profil</a>
                                    <a class="dropdown-item" href="{{ url('/student/logout') }}">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>

   @yield('content')

        <section class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="logo-footer">
                            <img src="{{url('frontend/assets/img/logolab.png')}}" class="footer-logo" alt="logolab">
                        </div><br>
                        <p>Dorong kemampuan pemrograman Anda ke tingkat berikutnya, melalui seri-seri yang ada disini seperti PHP, Python, Javascript, CSS, Android, Java, C++, dan banyak lagi.</p>
                        <a href="#" class="btn btn-lg tombol-sosmed"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="btn btn-lg tombol-sosmed"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-lg tombol-sosmed"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-md-3 col-lg-3 footer-bag2">
                        <h4><b>kontak</b></h4>
                        <span class="fa fa-phone" aria-hidden="true"></span>&nbsp;&nbsp;(021) 739 7973
                        <br>
                        <span class="fa fa-envelope" aria-hidden="true"></span>&nbsp;&nbsp; Labsimi@gmail.com
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <h4><b>Alamat</b></h4>
                        <span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;&nbsp;Lt.2 Gd.2 Jl. BRI Radio Dalam No.17, Gandaria Utara, Kebayoran Baru, Jakarta Selatan.
                    </div>
                    <div class="col-md-12 col-lg-12 text-center cpright">
                        <hr>
                        <h6>Copyright &copy; 2020 Integrated Laboratory SI/MI. <br>
                          STMIK JAKARTA STI&K Design By Ade Fikriatul Ilmi</h6>
                    </div>
                </div>
            </div>
        </section>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/retina.min.js')}}"></script>
    <script src="{{ asset('assets/js/fontawesome.min.js')}}"></script>
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
  @if(session('error'))
    <script type="text/javascript">
        Swal.fire({
      title: 'Error ...',
      icon: 'error',
      text: '{{ session("error") }}',
      showClass: {
        popup: 'animated bounceInDown slow'
      },
      hideClass: {
        popup: 'animated bounceOutDown slow'
      }
    })
    </script>
  @endif
        
</body>

</html>