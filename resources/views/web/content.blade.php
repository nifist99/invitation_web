<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{CRUDBooster::getSetting('appname')}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="{{CRUDBooster::getSetting('favicon')}}" rel="icon">
  <link href="{{CRUDBooster::getSetting('favicon')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="web/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300;1,500&family=Poppins:wght@200&family=Rubik:wght@600&family=Tangerine&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{url('web/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('web/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('web/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('web/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('web/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{url('tema/tema1/assets/css/sweetalert2.min.css')}}" rel="stylesheet">

  {{-- cdn --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="{{url('web/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{url('web/assets/css/custom.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno - v4.7.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>

<body >

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{url('/')}}">{{CRUDBooster::getSetting('appname')}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          @if($view=='home')
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Informasi</a></li>
          <li><a class="nav-link scrollto" href="#services">Fitur</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Desain</a></li>
          <li><a class="nav-link scrollto" href="#harga">Harga</a></li>
          <li><a class="nav-link" href="{{url('daftar')}}">Buat Undangan</a></li>
          <li><a class="nav-link" href="{{url('admin/login')}}">Login</a></li>
          @else
          <li><a class="nav-link" href="{{url('/')}}">Home</a></li>
          <li><a class="getstarted scrollto" href="{{url('admin/login')}}">Login</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    @yield('content');

        <a href="https://api.whatsapp.com/send?phone=088223348715&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="wa" target="_blank">
        <i class="fa fa-whatsapp my-wa"></i>
        </a>


  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>{{CRUDBooster::getSetting('appname')}}</h3>
            <p><b>Event Organizer</b> terbaik karena kami berkaloborasi dengan talenta muda dengan berbagai bidang
            di dunia EO khususnya berkaitan dengan wedding</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form id="suscribe" method="post">
              <input type="email" id="email" name="email" placeholder="Enter your Email">
              <button type="submit" id="btn_suscribe" class="btn btn-sm btn-success">Subscribe</button>
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>{{CRUDBooster::getSetting('appname')}}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('tema/tema1/assets/js/jquery.min.js')}}"></script>
  <script src="{{url('web/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{url('web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('web/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('web/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('web/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  {{-- <script src="{{url('web/assets/vendor/php-email-form/validate.js')}}"></script> --}}
  <script src="{{url('tema/tema1/assets/js/sweetalert2.min.js')}}"></script>

  {{-- cdn --}}
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Template Main JS File -->
  <script src="{{url('web/assets/js/main.js')}}"></script>
  @stack('js');

  <script>
    $(function () {
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
    
        $('#btn_suscribe').click(function (e) {
            e.preventDefault();
            $(this).html('Sending..');
            var email    = $('#email').val();

            if(email==''){
                $('#suscribe').trigger("reset");
                $('#btn_suscribe').html('Subscribe');
                Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: "Silahkan isi email dengan benar",
                        showConfirmButton: false,
                        timer: 5000
                        })
            }else{
                $.ajax({
                data: $('#suscribe').serialize(),
                url: "{{url('suscribe')}}",
                type: "POST",
                dataType: 'json',
                success: function (respon) {
                    if(respon.api_status=='success'){
                        $('#suscribe').trigger("reset");
                        $('#btn_suscribe').html('Subscribe');
                            Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: respon.api_message,
                            showConfirmButton: false,
                            timer: 5000
                            })
                    }else{
                        $('#suscribe').trigger("reset");
                        $('#btn_suscribe').html('Subscribe');
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: respon.api_message,
                            showConfirmButton: false,
                            timer: 5000
                            })
                    }    
                },
                error: function (respon) {
                    $('#suscribe').trigger("reset");
                    $('#btn_suscribe').html('Subscribe');
                    console.log('Error:', data);
                    Toast.fire({
                    icon: 'Error',
                    title: respon.api_message
                    })
                }
            });
        }
            });
    
    
    })
    </script>

</body>

</html>