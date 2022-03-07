<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{$row->nama}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicons -->
        <link href="{{CRUDBooster::getSetting('favicon')}}" rel="icon">
        <link href="{{CRUDBooster::getSetting('favicon')}}" rel="apple-touch-icon">
		<!-- 
        Layer Template 
        http://www.templatemo.com/preview/templatemo_438_layer
    	-->
        
        <link href="{{url('tema/tema1/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300;1,500&family=Dancing+Script:wght@600&family=Handlee&family=Indie+Flower&family=Itim&family=Poppins:wght@200&family=Rubik:wght@600&family=Tangerine&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{url('tema/tema3/css/wow-animate.css')}}">
        <link rel="stylesheet" href="{{url('tema/tema3/css/templatemo-style.css')}}">
        <link rel="stylesheet" href="{{url('tema/tema3/css/custom.css')}}">
        <link href="{{url('tema/tema1/assets/css/sweetalert2.min.css')}}" rel="stylesheet">

        <style>
.bg__first {
background-image: url("{{url($tema->background_section1)}}");
height: 100vh;
}

.bg__first .container {
height: 100vh;
min-height: 440px;
}



.bg__second {
border-bottom: 3px solid #9ADCFF;
height: 100vh;
background-image: url("{{url($tema->background_section2)}}");
}

.bg__third {
height: 100vh;
background-image: url("{{url($tema->background_section3)}}");
}



.bg__fourth {
height: 100vh;
background-image: url("{{url($tema->background_bottom)}}");}
        </style>

    </head>
    <body>


    <div class="parallax">


      <div class="bg__first templatemo-position-relative">
        <div class="container">
          <div class="templatemo-flexbox">
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="left-image wow animated fadeInLeft">
                  <div class="text-center">
                  <img src="{{url($tema->background_top)}}" alt="creative writing" class="img-responsive img-header">
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">              
                <div class="right-caption wow animated fadeInRight">
                  <h4>The Wedding Of</h4>
                  <h2><span class="yellow">{{$pria->nama}}</span></h2>
                  <h2>&</h2>
                  <h2><span class="yellow">{{$wanita->nama}}</span></h2>
                  <p>"Siapa yang menikah maka sungguh ia telah diberi setengahnya ibadah,” <span class="yellow">(HR Abu Ya'la)</span></p>
                  <br>
                </div>
              </div>
            </div>            
          </div>          
        </div>
        <div class="arrow text-center">
          <a href="#" class="scroll-link" data-id="second-section"><i class="fa fa-angle-down"></i></a>
        </div>
      </div>


      <div id="second-section"> 
        <div class="bg__second"> 
          <div class="container pt-50">
              <div class="section-title text-center">
                <h2 class="font-section wow bounceInUp">Mempelai</h2>
              </div>
            <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="text-center wow animated fadeInLeft">
              <img src="{{url($pria->foto)}}" class="img-mempelai">
              <h3 class="font-nama">{{$pria->nama}}</h3>
              <br>
              <p class="font-body">{{$pria->nama_ortu}}</p>
            </div>
            
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="text-center wow animated fadeInRight">
            <img src="{{url($wanita->foto)}}" class="img-mempelai">
            <h3 class="font-nama">{{$wanita->nama}}</h3>
            <br>
            <p class="font-body">{{$wanita->nama_ortu}}</p>
          </div>
            </div>
          </div>
          </div>
        </div>
      </div>

      <div class="bg__third">
        <div id="third-section">
          <div class="container  pt-50">
            <div class="section-title text-center">
              <h2 class="font-section wow bounceInUp">Bergabunglah di Moment Spesial Kami</h2>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-12 wow animated fadeInLeft">
                  <div class="card-map">
                    <div class="text-center">
                        <h4 class="font-map pt-10"><b>Akad Nikah</b></h4>
                        <img src="{{url('tema/tema1/assets/img/schedule.png')}}" width="40px" />
                        <h6 class="font-map pt-10">{{$tanggal_wedding}}</h6>
                        <p class="font-map"><i class="fa fa-clock-o"></i>&nbsp;{{$row->waktu_akad}} WIB</p>
                        <img src="{{url('tema/tema1/assets/img/location.png')}}" width="40px" />
                        <p class="font-map">{{{$row->alamat}}}</p>
                    
                    <div class="button">
                        <a href="javascript:void(0)" onclick="myNavFunc()" class="btn btn-primary"><i class="fa fa-map-marker"></i> Lihat Lokasi</a>
                    </div>                  
                    </div>
                  </div>

              </div>
                <div class="col-md-6 col-sm-12 wow animated fadeInRight">
                    <div class="card-map">
                        <div class="text-center">
                            <h4 class="font-map pt-10"><b>Resepsi</b></h4>
                            <img src="{{url('tema/tema1/assets/img/schedule.png')}}" width="40px" />
                            <h6 class="font-map pt-10">{{$tanggal_wedding}}</h6>
                            <p class="font-map"><i class="fa fa-clock-o"></i>&nbsp;{{$row->waktu_resepsi}} WIB</p>
                            <img src="{{url('tema/tema1/assets/img/location.png')}}" width="40px" />
                            <p class="font-map">{{{$row->alamat}}}</p>
                       
                        <div class="button">
                            <a href="javascript:void(0)" onclick="myNavFunc()" class="btn btn-primary"><i class="fa fa-map-marker"></i> Lihat Lokasi</a>
                        </div>                  
                        </div>
                    </div>
                    </div>

            </div>
            <div class="row">
              <div class="col-md-12 templatemo-position-relative">
                <div class="fourth-arrow">
                  <a href="#" class="scroll-link" data-id="fourth-section"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="bg__fourth">
        <div id="fourth-section">
          <div class="container pt-50">
            <div class="section-title text-center">
              <h2 class="font-section wow bounceInUp">Gallery</h2>
            </div>
            <div class="row">
         
                
                @foreach($foto as $key)
                <div class="col-md-4">
                  <div class="card-foto wow bounceInUp">
                    <div class="text-center">
                  <img src="{{url($key->foto)}}" alt="" width="300px">
                    </div>
                </div>
                </div>
                @endforeach

        
            </div>
            <div class="col-md-12">
              <div class="fourth-arrow">
                <a href="#" class="scroll-link" data-id="fifth-section"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div id="fifth-section" style="padding-bottom: 50px">
        <div class="container" data-aos="fade-up">
          <div class="section-title text-center">
            <h2 class="font-section wow bounceInUp">Guest Book</h2>
            <p class="font-body wow bounceInUp">Buku Tamu</p>
          </div>
        
          <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
              <div id="komentar" class="form-book">
                @foreach($pesan as $pes)
                <div>
                  <p class="font-nama">{{$pes->nama}}</p>
                  <p class="font-komentar">{{$pes->pesan}}</p>
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
                    <button style="width: 100%;" class="btn btn-komentar btn-sm btn-block" id="kirim" type="submit">Kirim</button>
                    
                  </div>
                </form>
            </div>
        
          </div>
      </div>


      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
            <div class="copyright-text">
              <p>Undangan Online Daymahar</p>
            </div>
          </div>
          </div>
        </div>
      </footer>

      <div class="fixed-bottom">
        <button class="btn btn-sm music" onclick="myFunction()"><i id="icon_play" class="fa fa-play"></i></button>
        <span id="name_music"></span>
        </div>
        
        <audio src="{{url($row->url_music)}}" id="my_audio" loop="loop"></audio>

    </div>   
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script> 
    <script src="{{url('tema/tema3/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{url('tema/tema3/js/vendor/wow-animate.js')}}"></script>
    <script src="{{url('tema/tema1/assets/js/sweetalert2.min.js')}}"></script>
    <script src="{{url('tema/tema3/js/main.js')}}"></script>

    
    <script>
        // wow
        new WOW ({
          animateClass: 'animated',
          offset:       100
        }).init();
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
  
  <script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(){
  
  const swalimg = Swal.mixin({
      customClass: {
        image: 'rounded-circle',
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
  });
  
  
  })
  </script>
  
  @if($row->latitude && $row->longitude)
  
  <script>
  function myNavFunc(){
    // If it's an iPhone..
    if( (navigator.platform.indexOf("iPhone") != -1) 
        || (navigator.platform.indexOf("iPod") != -1)
        || (navigator.platform.indexOf("iPad") != -1))
        window.open("maps://www.google.com/maps/dir/?api={{CRUDBooster::getSetting('google_api_key')}}&travelmode=driving&layer=traffic&destination=[YOUR_LAT],[YOUR_LNG]");
    else
        window.open("https://www.google.com/maps/dir/?api={{CRUDBooster::getSetting('google_api_key')}}&travelmode=driving&layer=traffic&destination=[YOUR_LAT],[YOUR_LNG]");
  }
  </script>
  
  @endif
	<!-- templatemo 438 layer -->
  </body>
</html>