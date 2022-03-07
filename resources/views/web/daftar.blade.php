@extends('web.content')
@section('content')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="padding-top: 80px">
        <div class="container">
  
          <div class="section-title">
            <span>Daftar</span>
            <h2>Daftar</h2>
            <p>Isikan Data Di Bawah Ini</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>parakan, Kec. Purwanegara, Kab. Banjarnegara, Jawa Tengah</p>
                </div>
  
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>daymahar2021@gmail.com</p>
                </div>
  
                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>088223348715</p>
                </div>
  
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.0571977384701!2d109.58897182918845!3d-7.439918669850097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7bd4438ea5543d20!2zN8KwMjYnMjMuNyJTIDEwOcKwMzUnMjIuMyJF!5e0!3m2!1sid!2sid!4v1646296886809!5m2!1sid!2sid" width="100%" height="240px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
  
            </div>
  
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form id="daftar" class="php-email-form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="nama" required>
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label for="name">Password</label>
                  <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="form-group mt-3">
                  <label for="name">Hp / Wa</label>
                  <input type="number" class="form-control" name="hp" id="hp" required>
                </div>
                <div class="form-group mt-3">
                  <label for="name">Catatan Untuk Admin</label>
                  <textarea class="form-control" name="catatan" id="catatan" rows="10" required></textarea>
                </div>
                <div class="text-center"><button type="submit" id="kirim">Kirim</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
  

@once
    @push('js')
    <script>
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
                var email    = $('#email').val();
                var password = $('#password').val();
                var catatan  = $('#catatan').val();
                var hp       = $('#hp').val();

                if(nama==''||email==''||password==''||catatan=='' ){
                    $('#daftar').trigger("reset");
                    $('#kirim').html('Kirim');
                    Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: "data ada yang kosong silahkan isi semua",
                            showConfirmButton: false,
                            timer: 5000
                            })
                }else{
                    $.ajax({
                    data: $('#daftar').serialize(),
                    url: "{{url('register')}}",
                    type: "POST",
                    dataType: 'json',
                    success: function (respon) {
                        if(respon.api_status=='success'){
                            $('#daftar').trigger("reset");
                            $('#kirim').html('Kirim');
                                Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: respon.api_message,
                                showConfirmButton: false,
                                timer: 5000
                                })
                        }else{
                            $('#daftar').trigger("reset");
                            $('#kirim').html('Kirim');
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
                        $('#daftar').trigger("reset");
                        $('#kirim').html('Kirim');
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
    @endpush
@endonce

@endsection