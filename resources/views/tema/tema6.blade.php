<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{$row->nama}}</title>

  <!-- Favicons -->
  @if($row->favicon)
  <link href="{{url($row->favicon)}}" rel="icon">
  <link href="{{url($row->favicon)}}" rel="apple-touch-icon">
  @else
  <link href="{{url(CRUDBooster::getSetting('favicon'))}}" rel="icon">
  <link href="{{url(CRUDBooster::getSetting('favicon'))}}" rel="apple-touch-icon">
  @endif


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

  <link href="{{url('tema/tema6/css/main.css')}}" rel="stylesheet">
   <link href="{{url('tema/tema1/assets/css/sweetalert2.min.css')}}" rel="stylesheet">


<style type="text/css">
#particles-js {
  background-image: url("{{url($row->foto)}}");
  height: 100vh;
  background-position: top;
  background-size: cover;
  background-repeat: no-repeat;
}

#header{
  background-image: url("{{url($row->foto)}}");
  height: 100vh;
  background-position: top;
  background-size: cover;
  background-repeat: no-repeat;
}

#img-section{
  background-image: url("{{url($back3->foto)}}");
  height: 100vh;
  background-position: center;
  background-size:cover ;
  background-repeat: no-repeat;
}
.img-back-waktu{
  background-image: url("{{url($back2->foto)}}");
  height: auto;
  background-position: top;
  background-size: cover;
  background-repeat: no-repeat;
}

body{
	margin:0;
	padding:0;
	border:0;
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
  height: 100vh;
  background-position: bottom;
  background-size: cover;
  background-repeat: no-repeat;
  }
}
.nav {
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 55px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    background-color: #ffffff;
    display: flex;
    overflow-x: auto;
}

.nav__link {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-grow: 1;
    min-width: 50px;
    overflow: hidden;
    white-space: nowrap;
    font-family: sans-serif;
    font-size: 13px;
    color: #444444;
    text-decoration: none;
    -webkit-tap-highlight-color: transparent;
    transition: background-color 0.1s ease-in-out;
}

.nav__link:hover {
    background-color: #eeeeee;
}

.nav__link--active {
    color: #009578;
}

.nav__icon {
    font-size: 18px;
}


</style>

</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="header" >
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
  <div id="particles-js">
  </div>
  <div class="container d-flex align-items-center justify-content-center text-center" id="home">
      <div class="text" >
      <p class="font-heading1" style="color: black!important;"><b>The Wedding Of</b></p>
      <h1 class="mb-3 font-heading" style="color: black!important;">{{$row->nama}}</h1>
      <p class="mb-4 font-heading2" style="color: black!important;">{{$end_tanggal}}</p>
    </div>
  </div><!-- End Hero -->
    </div>
    </div>
    </div>
  </section>

  <section id="data" class="pt-50">
    <div class="container" data-aos="fade-up">
      <div class="text-center">
        <h3 class="font-section-waktu">Bismillah hirrohmani rohim</h3>
      </div>

      <div class="row">
        <div class="col-sm-12">
            <div class="text-center pt-30">
              <p class="font-data">???Dan diantara tanda-tanda kekuasaan-Nya ialah diciptakan Nya untukmu pasangan hidup dari jenismu <br>
              sendiri supaya kamu mendapat ketenangan hati dan dijadikan-Nya kasih sayang diantara kamu.<br>
              Sesungguhnya yang demikian menjadi tanda-tanda kebesaran-Nya bagi orang-orang yang berfikir.???</p>
              <p class="font-data">(Ar-Rum: 21)</P>
              <img src="{{url('tema/tema1/assets/img/daun.png')}}" width="100px">
            </div>
        </div>
       
        <div class="col-md-12 mt-20">
          <div class="text-center">
            @if($back->foto)
            <img src="{{url($back->foto)}}" class="card-foto" style="border-radius: 10px">
            @endif
          </div>
        </div>

        <div class="col-sm-12">
            <div class="text-center pt-30">
              <p class="font-data"> "A grate merriage is not when the perfect couple comes together. 
                  It is when an imperfect couple learns to enjoy their differences."</p>
            </div>
        </div>
        

        </div>

      </div>
  </section>

  @php
$kisah=DB::table('day_story')->where('id_cms_users',$row->id_users)->get();    
@endphp
@if(count($kisah) !=0)
  <section id="kisah" class="pt-50">
    <div class="container" data-aos="fade-up">
       <div class="section-title text-center">
        <h2 class="font-section-galeri">Story Of Memories</h2>
        <p class="font-galeri">Story</p>
      </div>
      <div class="row">
      <div class="col-sm-12">
        <div class="timeline">
            @foreach($kisah as $k)
            @if($k->posisi=='left')
            <div class="container-timeline left">
              <div class="content">
                <h4 class="font-story">{{Daymahar::tanggal_indo($k->date)}}</h4>
                <p class="font-timeline">{{$k->content}}</p>
              </div>
            </div>
            @else

            <div class="container-timeline right">
              <div class="content">
                <h4 class="font-story">{{Daymahar::tanggal_indo($k->date)}}</h4>
                <p class="font-timeline">{{$k->content}}</p>
              </div>
            </div>
            @endif
            @endforeach
          </div>
      </div>

      <div class="col-md-12 mt-20">
        <div class="text-center">
          @if($back2->foto)
          <img src="{{url($back2->foto)}}" class="card-foto2" style="border-radius: 10px">
          @endif
        </div>
      </div>

      </div>
    </div>
  </section>
  @endif

  <section id="couple" class="pt-50">
    <div class="container" data-aos="fade-up">
        <div class="row">
        @if($row->ucapan_atas)
          <div class="col-sm-12 mt-30">
            <div class="text-center">
              <h3 class="font-salam">Assala mu'alaikum Wr. Wb</h3>
            </div>
              <div class="text-center pt-30">
                <p class="font-data">
                  {{$row->ucapan_atas}}
                </p>
                <img src="{{url('tema/tema1/assets/img/daun.png')}}" width="100px">
              </div>
          </div>
        @endif

        <div class="col-md-6 col-sm-12 mt-20" >
          <div class="d-flex justify-content-center">
            @if($pria->foto)
                <img src="{{url($pria->foto)}}" width="200px" height="200px">
            @else
                <img src="{{url('tema/tema1/assets/img/pria.png')}}" class="card-foto3">
            @endif
          </div>
          <div class="text-center mt-10">
                <p class="font-data1">{{$pria->nama}}</p>
                <p class="font-data2">Putra dari pasangan <br> {{$pria->nama_ortu}}</p>
        </div>
        </div>

         <div class="col-lg-6 col-md-12">
            <div class="d-flex justify-content-center">
            @if($wanita->foto)
                <img src="{{url($wanita->foto)}}" width="200px" height="200px">
            @else
                <img src="{{url('tema/tema1/assets/img/wanita.png')}}" class="card-foto3">
            @endif
            </div>
                    <div class="text-center mt-10">
                <p class="font-data1">{{$wanita->nama}}</p>
                <p class="font-data2">Putri dari pasangan <br> {{$wanita->nama_ortu}}</p>
            </div>
        </div>
        
      </div>
    </div>
  </section>

  <section id="waktu" class="pt-50 img-back-waktu">
    <div class="container" data-aos="fade-up">
      <div class="section-title text-center">
        <img src="{{url('tema/tema1/assets/img/daun.png')}}" width="100px">
        <h2 class="font-section-waktu">Mohon do'a & restu</h2>
      </div>
      <div class="row pt-30">
        <div class="col-lg-12 col-md-12">
          <div class="d-flex justify-content-center">
              <div class="card">
              <div class="card-body">
                <div class="text-center">
                    <h6 class="font-waktu pt-10"><b>Waktu Akad</b></h6>
                    <img src="{{url('tema/tema1/assets/img/schedule.png')}}" width="40px" />
                    <p class="font-waktu1"><i class="fa fa-clock-o"></i>&nbsp;{{$row->waktu_akad}} WIB</p>
                    <h6 class="font-waktu1 pt-10">{{$end_tanggal}}</h6>
                    
                    @if($row->resepsi_status=='active')
                    <h6 class="font-waktu pt-10"><b>Resepsi</b></h6>
                    <img src="{{url('tema/tema1/assets/img/schedule.png')}}" width="40px" />
                    <p class="font-waktu1"><i class="fa fa-clock-o"></i>&nbsp;{{$row->waktu_resepsi}} WIB</p>
                    <h6 class="font-waktu1 pt-10">
                      @if($tanggal_wedding==null){{$tanggal_wedding}}<br> s/d </br>  {{$end_tanggal}} 
                      @else
                      {{$end_tanggal}} 
                      @endif
                    </h6>
                    @endif

                    <img src="{{url('tema/tema1/assets/img/location.png')}}" width="40px" />
                    <p class="font-waktu1">{{{$row->alamat}}}</p>
                    @if($row->latitude && $row->longitude)
                    <div id="map"></div>
                     <a href="https://maps.google.com/?q={{$row->latitude}},{{$row->longitude}}" class="btn btn-sm btn-font mt-10"><i class="fa fa-map-marker"></i>&nbsp;Google Maps</a>
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
        <h2 class="font-section-count">Counting Down To The Big Day</h2>
      </div>

      <div class="row pt-10">
        <div class="col-sm-12">
            <div class="text-center">
                <p class="font-count" id="demo"></p>
                <p class="font-count2">Days&nbsp;Hours&nbsp;Minutes&nbsp;Second</p>
            </div>
        </div>
      </div>
    </div>

    
  </section>

  <section id="img-section" class="pt-50">

  </section>


@if($row->video_url || $row->video)
  <section id="video" class="pt-50">
    <div class="container" data-aos="fade-up">
       <div class="section-title text-center">
        <h2 class="font-section-galeri">Wedding Video</h2>
        <p class="font-galeri">Video Prewedding</p>
      </div>
      <div class="row">
      <div class="col-sm-12">
        <div class="d-flex justify-content-center">
            <iframe src="{{$row->video_url}}" width="100%" height="500px" allowfullscreen></iframe>

        @if($row->video)
        <video controls width="300px">

                <source src="{{url($row->video)}}"
                        type="video/webm">
            
                <source src="{{url($row->video)}}"
                        type="video/mp4">
            
                Sorry, your browser doesn't support embedded videos.
            </video>
        @else
        
         @endif
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
          <p class="font-galery-sub">"Marriage is the golden ring in a chain whose beginning is a glance and whose ending is eternity"</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".engagement">Engagement</li>
              <li data-filter=".prewedding">Prewedding</li>
              <!--<li data-filter=".memories">Memories</li>-->
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
          <p class="font-gift">Wedding Gift</p>
          <p class="font-hadiah" style="color: black">
            Bagi keluarga dan sahabat yang ingin mengirimkan hadiah silahkan mengirimkanya melalui tautan berikut :
        </p>
        </div>

        <div class="row">
        <div class="col-sm-12 d-flex justify-content-center">
          <!--<button type="button" onclick="book()" class="btn btn-lg btn-font">Kirim Amplop Undangan</button>-->
          <button type="button" class="btn btn-lg btn-font" data-bs-toggle="modal" data-bs-target="#exampleModal">Kirim Amplop</button>
        </div>
        <div class="col-sm-12 d-flex justify-content-center mt-20">
            <img src="{{url('web/assets/img/gift.png')}}" width="50%" height="auto">
          </div>
        </div>

        </div>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gift Untuk Mempelai</h5>
      </div>
      
      
       <form action="{{url('giftpost')}}" method="post" class="modal-color" enctype='multipart/form-data' id="gift">
      <div class="modal-body modal-color">
           @csrf
           <input type='hidden' name='id_day_wedding' value='{{$row->id}}'>
          <div class="form-group">
              <input type="text" class="form-control" name='nama' placeholder="nama" required>
          </div>
          <div class="form-group" style="margin-top: 10px;">
              <input type="text" class="form-control" id="nominal" name='nominal' placeholder="nominal" required>
          </div>
        <div class="form-group" style="margin-top: 10px;">
          <input type="file" class="form-control" id="tf" name='foto' placeholder="bukti tf" required>
          <span style="color:#565656;font-size: 14px;"><b>kirim bukti transfer</b></span>
        </div>
      <hr>
      
      @foreach($rekening as $r)
      <div class='d-flex align-items-center'>
          <img src="{{url($r->foto_atm)}}" width="60" height="50">&nbsp;
          <p><b>A.n {{$r->nama}} : {{$r->norek}}</b></p>
      </div>
        
      @endforeach

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
      
        </form>
      
      
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
        <p class="font-hadiah" style="color: white">
            Kami tidak sabar menunggu hari pernikahan kami bersama
            Bapak/Ibu/Saudara/i, mohon konfirmasi kehadiran Bapak/Ibu/i.
            Terimakasih
        </p>
      </div>

      <div class="row">
        <div class="col-sm-12 d-flex justify-content-center">
          <div id="komentar" class="form-book">
            @foreach($pesan as $pes)
            <div>
              <p class="font-book1">{{$pes->nama}}&nbsp;
                @if($pes->kehadiran)
                <span>({{$pes->kehadiran}})</span>
                @endif</p>
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
              <select class="form-select mt-10" aria-label="Kehadiran" name="kehadiran" id="kehadiran" required>
                <option value="hadir">hadir</option>
                <option value="tidak hadir">tidak hadir</option>
              </select>
              <div class="form-group mt-3">
                <textarea class="form-control" id="pesan" name="pesan" rows="5" placeholder="Masukan Pesan" required></textarea>
              </div>
              <br>
              <div class="col-md-12 form-group">
                <button style="width: 100%" class="btn btn-font btn-sm btn-block" type="submit" id="kirim">Kirim</button>
              </div>
            </form>
        </div>

      </div>
    </section>

    @if($row->ucapan_bawah)
    <section id="salam" class="pt-50">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-sm-12">
            <div class="text-center pt-30">
              <p class="font-data">
                {{$row->ucapan_bawah}}
              </p>
            </div>
          </div>
        </div>

        <div class="text-center">
          <h3 class="font-salam">Wassala mu'alikum Wr. Wb</h3>
        </div>
        <div class="text-center">
          <p class="font-salam">{{$row->nama}}</p>
          <img src="{{url('tema/tema1/assets/img/daun.png')}}" width="100px">
        </div>
       
      </div>
    </section>
    @endif


    <!-- Modal -->
    <footer id="footer" class="d-flex justify-content-center align-items-center">

            <p class="font-footer">E-invitation by daymahar - Made with Love</p>
           
           

  </footer><!-- End  Footer -->

  <div class="mt-20"></div>


   <audio src="{{url($row->url_music)}}" id="my_audio" loop="loop"></audio>


   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<nav class="nav" id="mainnav">
  <a href="javascript:void(0)" onclick="home()" class="nav__link" class="awesome-tooltip">
    <i class="material-icons nav__icon">home</i>
    <span class="nav__text">Home</span>
  </a>
  {{-- <a href="javascript:void(0)" onclick="couple()" class="nav__link">
    <i class="material-icons nav__icon">group</i>
    <span class="nav__text">Couple</span>
  </a> --}}
  <a href="javascript:void(0)" onclick="waktu()" class="nav__link">
    <i class="material-icons nav__icon">event</i>
    <span class="nav__text">Event</span>
  </a>
  <a href="javascript:void(0)" onclick="galery()" class="nav__link">
    <i class="material-icons nav__icon">photo</i>
    <span class="nav__text">Gallery</span>
  </a>
  <a href="javascript:void(0)" onclick="books()" class="nav__link">
    <i class="material-icons nav__icon">book</i>
    <span class="nav__text">Books Guest</span>
  </a>
  <a href="javascript:void(0)" onclick="myFunction()" class="nav__link nav__link--active">
    <i id="icon_play" class="fa fa-play"></i>
    <span class="nav__text">Music</span>
  </a>
</nav>

  <!-- Vendor JS Files -->
  <script src="{{url('tema/tema1/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{url('tema/tema1/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{url('tema/tema1/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('tema/tema1/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('tema/tema1/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script src="{{url('tema/tema1/assets/js/main.js')}}"></script>
  <script src="{{url('tema/tema5/assets/js/particles.js')}}"></script>
  <script src="{{url('tema/tema5/assets/js/custom.js')}}"></script>
  <script src="{{url('tema/tema1/assets/js/sweetalert2.min.js')}}"></script>

  <script>
    function home() {
      const home = document.getElementById("header");
      home.scrollIntoView();
    }

    function books() {
      const books = document.getElementById("book");
      books.scrollIntoView();
    }

    function waktu() {
      const waktu = document.getElementById("waktu");
      waktu.scrollIntoView();
    }

    function galery() {
      const galery = document.getElementById("portfolio");
      galery.scrollIntoView();
    }
  </script>

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
     @if(Session::get('message')!='')
     <script>
            Swal.fire({
              icon: 'success',
              title: 'Terimakasih telah memberikan hadiah ke pengantin :)',
              confirmButtonText: 'Oke',
            }).then((result) => {
              /* Read more about isConfirmed, isDenied below */
              if (result.isConfirmed) {
                icon.classList.toggle('fa-pause');
                                  music.play(); 
              }
            })
    </script>
     @else

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
        confirmButtonColor: 'goldenrod',
      }).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    icon.classList.toggle('fa-pause');
          music.play(); 
    }})


});
  </script>

@endif

  <script type="text/javascript">
    function book() {
        Swal.fire({
        html: '<p>a.n Putra</p><b> no-rek : 00009999000</b>',
        imageUrl: "{{url('tema/tema1/assets/img/bri.png')}}",
        imageWidth: 200,
        imageHeight: 100,
        imageAlt: 'Custom image',
        confirmButtonColor: '#1363DF',
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
// Mengatur waktu akhir perhitungan mundur
var countDownDate = new Date("July 03, 2022 08:00:00").getTime();

// Memperbarui hitungan mundur setiap 1 detik
var x = setInterval(function() {

  // Untuk mendapatkan tanggal dan waktu hari ini
  var now = new Date().getTime();
    
  // Temukan jarak antara sekarang dan tanggal hitung mundur
  var distance = countDownDate - now;
    
  // Perhitungan waktu untuk hari, jam, menit dan detik
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Keluarkan hasil dalam elemen dengan id = "demo"
  document.getElementById("demo").innerHTML = days + "&nbsp;:&nbsp;" + hours + "&nbsp;:&nbsp;"
  + minutes + "&nbsp;:&nbsp;" + seconds;
    
  // Jika hitungan mundur selesai, tulis beberapa teks 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
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
        var kehadiran    = $('#kehadiran').val();

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
            post +='<p class="font-book1">'+data.nama+'('+data.kehadiran+')'+'</p>';
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


  $('.awesome-tooltip').tooltip({
            placement: 'left'
        });  
        $('body').scrollspy({ 
            target: '#mainnav', 
            offset: 000
        });  
        /* CSS Tricks smooth scrolling : https://css-tricks.com/snippets/jquery/smooth-scrolling/ */
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {                   
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 500);
                    return false;
                }
            }
        });    

  </script>


  <script src="https://maps.googleapis.com/maps/api/js?key={{CRUDBooster::getSetting('google_api_key')}}&callback=initMap"
      async defer></script>
      

@endif

</body>

</html>