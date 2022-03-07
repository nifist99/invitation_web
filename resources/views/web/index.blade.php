@extends('web.content')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Undangan Pernikahan Online</h1>
          <h2>Dikemas dalam bentuk website yang menarik serta dapat dibagikan kapanpun dan dimanapun.</h2>
          <h2><b>Murah & Keren</b></h2>
          <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{url('web/assets/img/file1.jpg')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container hv">

        <div class="section-title" style="margin-top: 100px">
            <span>Day Mahar</span>
            <h2 class="font-section">Mengapa Memilih Day Mahar ?</h2>
            <p class="font-content">Kami hadir sebagai sebuah solusi untuk membantu calon mempelai </p>
            <p class="font-content"> untuk membuat undangan pernikahan online dengan cepat dan mudah.</p>
          </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-laptop"></i></div>
              <h4 class="title"><a href="">Harga Murah</a></h4>
              <p class="font-content">Buat undangan pernikahan tidak pernah semudah dan semurah ini</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Fitur Lengkap</a></h4>
              <p class="font-content">Fitur yang dapat diandalkan mulai dari proses pembuatan undangan hingga proses membagikan undangan</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-clipboard-data"></i></div>
              <h4 class="title"><a href="">Support Terbaik</a></h4>
              <p class="font-content">Perlu bantuan ? tenang tim support Kami selalu bisa diandalkan</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="{{url('web/assets/img/about.png')}}" class="img-fluid animated" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3 class="font-section">Langkah Pembuatan Undangan</h3>
            <p class="fst-italic">
                Hanya butuh beberapa langkah hingga undangan Kamu siap digunakan
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i><b> Registrasi</b></li>
              <p class="font-content">Buat akun baru dengan cara mengisikan email dan password atau daftar menggunakan akun Google.</p>
              <li><i class="bi bi-check-circle"></i><b> Isi Informasi</b></li>
              <p class="font-content">Isi informasi mengenai mempelai, lokasi dan waktu acara, pilih desain undangan dan upload foto ke galeri</p>
              <li><i class="bi bi-check-circle"></i><b> Bagikan & Pantau</b></li>
              <p class="font-content">
                Setelah undangan selesai dibuat, Kamu dapat langsung menyebarkan ke keluarga atau kerabat lalu pantau kehadiran serta ucapan dari tamu
            </p>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="19" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
            <p>Team Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
            <p>Fotografer</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>Fitur</span>
          <h2 class="font-section">Fitur Terbaik</h2>
          <p class="font-content">Fitur <b>undangan pernikahan online</b> unggulan yang siap Kamu gunakan</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-sm-12">
            <div class="icon-box" data-aos="fade-up-right">
              <div class="icon"><i class="bx bx-user"></i></div>
              <h4><a href="">Nama Tamu</a></h4>
              <p class="font-content">Menampilkan nama tamu yang diundang</p>
              <p class="font-content"> agar terasa lebih dekat</p>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Buku Tamu</a></h4>
              <p class="font-content">Dapat menerima ucapan dan doa serta</p>
              <p class="font-content">status kehadiran dari tamu undangan</p>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="fade-up-left">
              <div class="icon"><i class="bx bx-envelope"></i></div>
              <h4><a href="">Amplop Digital</a></h4>
              <p class="font-content">Tamu dapat memberikan amplop langsung</p>
              <p class="font-content">secara digital</p>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12 mt-4">
            <div class="icon-box" data-aos="fade-up-right">
              <div class="icon"><i class="bx bx-map"></i></div>
              <h4><a href="">Penunjuk Lokasi</a></h4>
              <p class="font-content">Dapat menunjukkan dan mengarahkan</p>
              <p class="font-content">tamu ke lokasi acara</p>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12 mt-4">
            <div class="icon-box" data-aos="zoom-in">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Galeri Foto</a></h4>
              <p class="font-content">Bagikan momen bahagia Kamu kepada</p>
              <p class="font-content">tamu undangan</p>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12 mt-4">
            <div class="icon-box" data-aos="fade-up-left">
              <div class="icon"><i class="bx bx-music"></i></div>
              <h4><a href="">Background Musik</a></h4>
              <p class="font-content">Hiasi undangan pernikahan online dengan</p>
              <p class="font-content">musik kesukaanmu</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container hv">

        <div class="section-title">
          <span>Desain</span>
          <h2 class="font-section">Pilihan Desain</h2>
          <p class="font-content">Pilih dan gunakan tema undangan pernikahan yang menarik serta unik</p>
        </div>
        
        <div class="row">
          @foreach($tema as $key)
            <div class="col-lg-4 col-sm-12 mt-4 mt-md-0">
                <div class="card" data-aos="zoom-in-up" style="width: 100%;">
                    <img class="card-img-top " src="{{url($key->foto)}}" alt="Card image cap">
                    <div class="card-body">
                      <center>
                        <h5 class="card-title">{{$key->nama}}</h5>
                        <a href="{{$key->url_web}}" target="_blank" class="btn btn-info" style="color: white">Preview</a>
                      </center>
                    </div>
                  </div>
            </div>
            @endforeach

        </div>
        

     

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container hv">

        <div class="section-title">
          <span>Testimonials</span>
          <h2 class="font-section">Testimonials</h2>
          <p class="font-content">Mereka yang Mempercayai Kami</p>
          <p class="font-content"><b>Day Mahar</b> telah dipercaya oleh lebih <b>30 mempelai</b> untuk undangan online, dengan harga terjangkau</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Rekomendasi buat yang mau mengadakan pernikahan, adminya ramah dan undangan online keren.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{url('web/assets/img/testimonials/p2.jpg')}}" class="testimonial-img" alt="">
                <h3>Ragil Mufai</h3>
                <h4>Purwonegoro</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Sangat membantu untuk mengirim undangan pernikahan secara online, lebih kelihatan profesional wk.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{url('web/assets/img/testimonials/p1.png')}}" class="testimonial-img" alt="">
                <h3>Windi</h3>
                <h4>Wonosobo</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Harganya sangat terjangkau dan desain undanganya sangat bagus
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{url('web/assets/img/testimonials/p3.png')}}" class="testimonial-img" alt="">
                <h3>Savinah Nur Jannah</h3>
                <h4>Banjarngeara</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Alhamdulillah menghemat anggaran menggunakan undangan online ini hixhix
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{url('web/assets/img/testimonials/p4.png')}}" class="testimonial-img" alt="">
                <h3>Nabila</h3>
                <h4>Banjarnegara</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 Inilah solusi undangan yg lebih mudah di masa pandemi 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{url('web/assets/img/testimonials/p5.png')}}" class="testimonial-img" alt="">
                <h3>Muahmmad Safi'i</h3>
                <h4>Purwokerto</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3 class="font-section">Day Mahar</h3>
          <p class="font-content">Kemudahan dalam menyebarkan undangan secara digital</p>
          <a class="cta-btn" href="{{url('daftar')}}">Daftar Sekarang</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    {{-- price list section --}}

    <section id="harga" class="team section-bg ">
      <div class="container hv">

        <div class="section-title">
          <span>Harga</span>
          <h2 class="font-section">Harga Undangan Online</h2>
          <p class="font-content">Kami hadir dengan desain terbaik dan harga terjangkau</p>
        </div>

        <div class="row">
          <div class="col-sm-12 d-flex justify-content-center align-items-center">
           <div class="card-price">
            <div class="card-body ">
              <h3 class="card-title text-center">Harga</h3>
              <h3 class="font-harga text-center">RP. 60k </h3>
              <ul>
                <p class="font-content"><i class="fa fa-check" style="color: greenyellow"></i><b> Include All Fitur</b></p>
                <p class="font-content"><i class="fa fa-check" style="color: greenyellow"></i><b> Nama Tamu Unlimited</b></p>
                <p class="font-content"><i class="fa fa-check" style="color: greenyellow"></i><b> Detail Acara</b></p>
                <p class="font-content"><i class="fa fa-check" style="color: greenyellow"></i><b> Input Foto & Video</b></p>
                <p class="font-content"><i class="fa fa-check" style="color: greenyellow"></i><b> Guest Book & Gift</b></p>
                <p class="font-content"><i class="fa fa-check" style="color: greenyellow"></i><b> Kolom Ucapan</b></p>
                <p class="font-content"><i class="fa fa-check" style="color: greenyellow"></i><b> Musik (by request)</b></p>
                <p class="font-content"><i class="fa fa-check" style="color: greenyellow"></i><b> Dashboard Chart Analisis</b></p>
              </ul>
            </div>
          </div>
           </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Team Section ======= -->

    {{-- <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <span>Team</span>
          <h2>Team</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{url('web/assets/img/team/team-1.jpg')}}" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{url('web/assets/img/team/team-2.jpg')}}" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{url('web/assets/img/team/team-3.jpg')}}" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --}}
    
    <!-- End Team Section -->

  </main><!-- End #main -->

 @endsection