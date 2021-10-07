<footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Ilabsimi - <a href="">Ade Fikriatul Ilmi</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/modules/popper.js') }}"></script>
  <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>
  <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
  <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
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
 
 
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
    @if(Session::has('sukses'))
        toastr.success("{{ Session::get('sukses') }}", 'Sukses ...')
    @endif
  </script>
  @yield('footer')

</body>
</html>