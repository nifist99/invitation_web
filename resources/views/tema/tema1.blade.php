<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{$row->nama}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{CRUDBooster::getSetting('favicon')}}" rel="icon">
  <link href="{{CRUDBooster::getSetting('favicon')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300;1,500&family=Poppins:wght@200&family=Rubik:wght@600&family=Tangerine&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('tema/tema1/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('tema/tema1/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('tema/tema1/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('tema/tema1/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('tema/tema1/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->

  <link href="{{url('tema/tema1/assets/css/main.css')}}" rel="stylesheet">
   <link href="{{url('tema/tema1/assets/css/sweetalert2.min.css')}}" rel="stylesheet">


<style type="text/css">
#particles-js {
  background-image: url("{{url($row->foto)}}");
  width: 100%;
  height: 100vh;
  background-position: top;
  background-size: cover;
  background-repeat: no-repeat;
}

#map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}

@media (max-width: 780px) {
  #particles-js  {
  background-image: url("{{url($row->foto)}}");
  width: 100%;
  height: 130vh;
  background-position: bottom;
  background-size: cover;
  background-repeat: no-repeat;
  }
}


</style>

</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="header">
    <div class="row">
        <div class="col-sm-12">
  <div id="particles-js">
  </div>
  <div class="container d-flex align-items-center justify-content-center text-center h-100">
      <div class="text" >
      <p class="font-heading1"><b>The Wedding Of</b></p>
      <h1 class="mb-3 font-heading">{{$row->nama}}</h1>
      <p class="mb-4 font-heading2">{{$tanggal_wedding}}</p>
<!--       <a href="about.html" class="btn btn-sm btn-success bounce mt-5">Buka undangan <i class="fa fa-arrow-down"></i></a> -->
    </div>
  </div><!-- End Hero -->
    </div>
    </div>
  </section>

  <section id="data" class="pt-50">
    <div class="container" data-aos="fade-up">
      <div class="text-center">
        <h3 class="font-section">Bismillah hirrohmani rohim</h3>
      </div>

      <div class="row">
        

        <div class="col-sm-12">
            <div class="text-center pt-30">
              <p class="font-data">“Dan diantara tanda-tanda kekuasaan-Nya ialah diciptakan Nya untukmu pasangan hidup dari jenismu <br>
              sendiri supaya kamu mendapat ketenangan hati dan dijadikan-Nya kasih sayang diantara kamu.<br>
              Sesungguhnya yang demikian menjadi tanda-tanda kebesaran-Nya bagi orang-orang yang berfikir.”</p>
              <p class="font-data">(Ar-Rum: 21)</P>
              <img src="{{url('tema/tema1/assets/img/daun.png')}}" width="100px">
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="d-flex justify-content-center">
          <img src="{{url('tema/tema1/assets/img/pria.png')}}" width="200px" height="200px">
          </div>
           <div class="text-center">
          <p class="font-data1">Nama {{$pria->nama}}</p>
          <p class="font-data2">Putra dari pasangan <br> {{$pria->nama_ortu}}</p>
        </div>
        </div>

         <div class="col-lg-6 col-md-12">
          <div class="d-flex justify-content-center">
          <img src="{{url('tema/tema1/assets/img/wanita.png')}}" width="200px" height="200px">
        </div>
            <div class="text-center">
          <p class="font-data1">Nama {{$wanita->nama}}</p>
          <p class="font-data2">Putri dari pasangan <br> {{$wanita->nama_ortu}}</p>
        </div>
        </div>
        
      </div>
    </div>
  </section>

  <section id="waktu" class="pt-50">
    <div class="container" data-aos="fade-up">
      <div class="section-title text-center">
        <img src="{{url('tema/tema1/assets/img/daun.png')}}" width="100px">
        <h2 class="font-section-waktu">Bergabunglah di Moment Spesial Kami</h2>
      </div>
      <div class="row pt-30">
        <div class="col-lg-12 col-md-12">
          <div class="d-flex justify-content-center">
              <div class="card">
              <div class="card-body">
                <div class="text-center">
                    <h6 class="font-waktu pt-10"><b>Resepsi</b></h6>
                    <img src="{{url('tema/tema1/assets/img/schedule.png')}}" width="40px" />
                    <h6 class="font-waktu1 pt-10">{{$tanggal_wedding}}</h6>
                    <p class="font-waktu1"><i class="fa fa-clock-o"></i>&nbsp;{{$row->waktu_resepsi}} WIB</p>
                    <img src="{{url('tema/tema1/assets/img/location.png')}}" width="40px" />
                    <p class="font-waktu1">{{{$row->alamat}}}</p>
                    @if($row->latitude && $row->longitude)
                    <div id="map"></div>
                    <a href="cursor:pointer;" onclick="myNavFunc()" class="btn btn-sm btn-font mt-10"><i class="fa fa-map-marker"></i>&nbsp;Google Maps</a>
                    @endif
                  </div>
              </div>
              </div>
            </div>
        </div>

      </div>
    </div>
  </section>

  <section id="protokol" class="pt-50 protokol-img">
    <div class="container" data-aos="fade-up">
      
      <div class="section-title text-center">
        <h2 class="font-section-protokol">Protokol Kesehatan</h2>
        <button class="btn btn-sm btn-warning font-protokol" style="border-radius: 50px">COVID 19</button>
        <div class="pt-5">
        <p class="font-protokol1">Untuk mematuhi himbauan pemerintah dalam pencegahan penyebaran Covid-19,<br> maka diharapkan Bapak/Ibu/Saudara/i tamu undangan untuk:</p>
      </div>
      </div>

      <div class="row pt-10">
        <div class="col-lg-6 col-md-12 img-protokol">
          <div class="d-flex justify-content-center">
            <img src="{{url('tema/tema1/assets/img/Covid1.png')}}" width="100%">
          </div>

        </div>
         <div class="col-lg-6 col-md-12 img-protokol">
            <div class="d-flex justify-content-center">
              <img src="{{url('tema/tema1/assets/img/Covid2.png')}}" width="100%">
            </div>
        </div>
      
        <div class="col-lg-6 col-md-12 img-protokol">
          <div class="d-flex justify-content-center">
            <img src="{{url('tema/tema1/assets/img/Covid3.png')}}" width="100%">
          </div>
        </div>
         <div class="col-lg-6 col-md-12 img-protokol">
          <div class="d-flex justify-content-center">
            <img src="{{url('tema/tema1/assets/img/Covid4.png')}}" width="100%">
          </div>
        </div>
      </div>

      <div class="row pt-30">
        <div class="col-sm-12">
        <div class="text-center" id="be_safe">
          <h4 class="font-white">Be safe, for you, and others</h4>
        </div>
        
      </div>
      </div>

    </div>

    
  </section>

@if($row->video_url)
  <section id="video" class="pt-50">
    <div class="container" data-aos="fade-up">
       <div class="section-title text-center">
        <h2 class="font-section-galeri">Wedding Video</h2>
        <p class="font-galeri">Video Prewedding</p>
      </div>
      <div class="row">
      <div class="col-sm-12">
        <div class="d-flex justify-content-center">
         <iframe width="100%" height="400px" src="https://www.youtube.com/embed/lEfXsP650ks" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      </div>
    </div>
    </div>
  </section>
  @endif

    <!-- ======= Portfolio Section ======= -->
@if(count($foto)!=0)
    <section id="portfolio" class="portfolio pt-50">
      <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
          <img src="{{url('tema/tema1/assets/img/daun.png')}}" width="100px">
          <h2 class="font-section-galeri">Galery</h2>
          <p class="font-galeri">Our Memories</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".engagement">Engagement</li>
              <li data-filter=".prewedding">Prewedding</li>
              <li data-filter=".memories">Memories</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          @foreach($foto as $img)
          <div class="col-lg-4 col-md-6 portfolio-item {{$img->kategori}}">
            <div class="portfolio-wrap">
              <img src="{{url($img->foto)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$img->nama}}</h4>
                <p>{{$img->kategori}}</p>
                <div class="portfolio-links">
                  <a href="{{url($img->foto)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$img->nama}}"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->
@endif

@if(count($rekening)!=0)
    <section id="hadiah" class="pt-50">
        <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <p class="font-galeri">Kirim Hadiah</p>
          <p class="font-hadiah">Silahkan klik disini untuk memberikan hadiah ke pengantin :)</p>
        </div>

        <div class="row">
        <div class="col-sm-12 d-flex justify-content-center">
          <button type="button" onclick="book()" class="btn btn-lg btn-font">Kirim Amplop Undangan</button>
        </div>
        <div class="col-sm-12 d-flex justify-content-center">
            <img src="{{url('tema/tema1/assets/img/giftcard.png')}}" width="50%" height="auto">
          </div>
        </div>

        </div>

    </section>
@endif

    <section id="book" class="pt-50">
      <div class="container" data-aos="fade-up">
      <div class="section-title text-center">
        <img src="{{url('tema/tema1/assets/img/daun.png')}}" width="100px">
        <h2 class="font-section-galeri">Guest Book</h2>
        <p class="font-galeri">Buku Tamu</p>
      </div>

      <div class="row">
        <div class="col-sm-12 d-flex justify-content-center">
          <div id="komentar" class="form-book">
            @foreach($pesan as $pes)
            <div>
              <p class="font-book1">{{$pes->nama}}</p>
              <p class="font-book">{{$pes->pesan}}</p>
              <hr style="border: 1px solid black!important">
            </div>
            @endforeach
         
          </div>
        </div>

      </div>

      <div class="col-sm-12 mt-30 d-flex justify-content-center">
               <form id="message" method="POST" role="form" class="form-book">
    
              <div class="row">
                <input type="hidden" name="id_day_wedding" value="{{$row->id}}">
                <div class="col-md-12 form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="pesan" rows="5" placeholder="Masukan Pesan" required></textarea>
              </div>
              <br>
              <div class="col-md-12 form-group">
                <button style="width: 100%" class="btn btn-font btn-sm btn-block" type="submit" id="kirim">Kirim</button>
              </div>
            </form>
        </div>

      </div>
    </section>


    <!-- Modal -->
    <footer id="footer" class="d-flex justify-content-center align-items-center">

            <p class="font-footer">E-invitation by daymahar - Made with Love</p>
           
           

  </footer><!-- End  Footer -->

  <div class="fixed-bottom">
    <button class="btn btn-sm music" onclick="myFunction()"><i id="icon_play" class="fa fa-play"></i></button>
    <span id="name_music"></span>
  </div>

   <audio src="{{url($row->url_music)}}" id="my_audio" loop="loop"></audio>

  <!-- Vendor JS Files -->
  <script src="{{url('tema/tema1/assets/vendor/aos/aos.js')}}"></script>
   <script src="{{url('tema/tema1/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{url('tema/tema1/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
   <script src="{{url('tema/tema1/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('tema/tema1/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('tema/tema1/assets/js/main.js')}}"></script>
   <script src="{{url('tema/tema1/assets/js/particles.js')}}"></script>
  <script src="{{url('tema/tema1/assets/js/app.js')}}"></script>
  <script src="{{url('tema/tema1/assets/js/sweetalert2.min.js')}}"></script>
  <script src="{{url('tema/tema1/assets/js/jquery.min.js')}}"></script>

 


  <template id="my-template">
        <swal-title>
          Kasih Hadiah 
        </swal-title>
        @foreach($rekening as $rek)
          <swal-html>A.n {{$rek->nama}} : {{$rek->norek}}</swal-html>
          <swal-image src="{{url($rek->foto_atm)}}" width="200" height="150" />
        @endforeach
        <swal-button type="confirm">
          OK
        </swal-button>
  </template>

  <script type="text/javascript">
    var music = document.getElementById("my_audio"); 
    var icon = document.getElementById("icon_play"); 

    function myFunction() {
        console.log(icon.classList.value);
        if(icon.classList.value == 'fa fa-play'){
          icon.classList.toggle('fa-pause');
          music.play(); 
        }else{
          music.pause();
          icon.classList.remove('fa-pause');
          icon.classList.toggle('fa fa-play');
        }
      }


  </script>

  <script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){

    const swalimg = Swal.mixin({
        customClass: {
          image: 'rounded-circle',
          title: 'font-heading2',
          html: 'font-data1'
        },
      })

      swalimg.fire({
        title: 'Undangan Pernikahan',
        @if($_GET['nama'])
        html: '<p><b><i>Nama Tamu : {{$_GET["nama"]}}</i></b></p>',
        @else
          html: '<p><b><i>{{$row->nama}}</i></b></p>',
        @endif
        imageUrl: "{{url($row->foto)}}",
        imageWidth: 200,
        imageHeight: 200,
        imageAlt: 'Wedding E-invitation',
        confirmButtonText:
        '<i class="fa fa-envelope"></i> Buka Undangan',
        confirmButtonColor: '#B8803A',
      }).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    icon.classList.toggle('fa-pause');
          music.play(); 
    }})


});
  </script>


  <script type="text/javascript">
    function book() {
        Swal.fire({
        html: '<p>a.n Putra</p><b> no-rek : 00009999000</b>',
        imageUrl: "{{url('tema/tema1/assets/img/bri.png')}}",
        imageWidth: 200,
        imageHeight: 100,
        imageAlt: 'Custom image',
        confirmButtonColor: '#B8803A',
      })
  }
  </script>

<script>
 function book() {
        Swal.fire({
        template: '#my-template'
      })
  }

  const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

  </script>

  <script>
$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#kirim').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');

        var nama     = $('#nama').val();
                var pesan    = $('#pesan').val();

                if(nama==''||pesan==''){
                    $('#daftar').trigger("reset");
                    $('#kirim').html('Kirim');
                    Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: "Silahkan Lengkapi Buku Tamu",
                            showConfirmButton: false,
                            timer: 5000
                            })
                }else{

        $.ajax({
          data: $('#message').serialize(),
          url: "{{url('komentar/pesan')}}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
            var post='<div>';
            post +='<p class="font-book1">'+data.nama+'</p>';
            post +='<p class="font-book">'+data.pesan+'</p>';
            post +='</div>';
            
            $('#komentar').append(post);

            $('#message').trigger("reset");
            $('#kirim').html('Kirim');

            Toast.fire({
              icon: 'success',
              title: 'successfully'
            })

          },
          error: function (data) {
              $('#message').trigger("reset");
              $('#kirim').html('Kirim');
              console.log('Error:', data);
              Toast.fire({
              icon: 'Error',
              title: 'Error Send Message'
            })
          }
      });
    }
    });


})
  </script>

@if($row->latitude && $row->longitude)
  <script>
    // Initialize and add the map
  function initMap() {
    // The location of Uluru
    const uluru = { lat:{{$row->latitude}}, lng:{{$row->longitude}} };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 12,
      center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
  }
  </script>

  <script>
    function myNavFunc(){
      // If it's an iPhone..
      if( (navigator.platform.indexOf("iPhone") != -1) 
          || (navigator.platform.indexOf("iPod") != -1)
          || (navigator.platform.indexOf("iPad") != -1))
          window.open("maps://www.google.com/maps/dir/?api={{CRUDBooster::getSetting('google_api_key')}}&travelmode=driving&layer=traffic&destination={{$row->latitude}},{{$row->longitude}}");
      else
          window.open("https://www.google.com/maps/dir/?api={{CRUDBooster::getSetting('google_api_key')}}&travelmode=driving&layer=traffic&destination={{$row->latitude}},{{$row->longitude}}");
  }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key={{CRUDBooster::getSetting('google_api_key')}}&callback=initMap"
      async defer></script>

@endif

</body>

</html>