<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('frontend/fontawesome-free/css/all.min.css')}}">

    <!-- MyStyle -->
    <link rel="stylesheet" href="{{asset('frontend/css/myCSS/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/myCSS/fontImport.css')}}">

          <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('AdminLte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">

    <title>SMART IDUKA</title>
  </head>
  <body>

<!-- ----------------------------------------NAVIGASI------------------------------------------------------- -->
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Smart IDUKA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="#header" id="a">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <a href="" class="text-decoration-none ml-auto bg-primary text-light nav-a" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" >Login</a>
            </div>
        </div>
    </nav>
<!-- ----------------------------------------HEADER------------------------------------------------------- -->
    <header id="header">
        <div class="overlay">
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="text-header text-light">
                                <h2>SMART <span>IDUKA</span> <br>Temukan pekerjaan</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Iste esse vitae error blanditiis repellat temporibus.</p>
                                <img src="{{asset('frontend/img/KKSI//Bendera Smart School remake.png')}}" alt="logo" style="width: 100px">
                                <img src="{{asset('frontend/img/KKSI//KKSI5.png')}}" alt="logo" style="width: 100px">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="img text-right">
                                <img src="{{asset('frontend/img/vektor/businessman-meditating.png')}}" alt="">
                                <img src="{{asset('frontend/img/vektor/masthead-icon.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- ----------------------------------------ABOUT------------------------------------------------------- -->
    <div class="about" id="about">
        <div class="container">
            <h2 class="text-center">SMART IDUKA</h2>
            <div class="row">
                <div class="col-md-2">
                    <div class="section">
                        <div class="section1" id="section">
                            <i class="fas fa-building"></i>
                            <p>Bekerjasama dengan 100 lebih Perusahaan</p>
                        </div>
                        <div class="section2" id="section">
                            <i class="fas fa-briefcase"></i>
                            <p>Lebih dari 100 lowongan pekerjaan tersedia</p>
                        </div>
                        <div class="section3" id="section">
                            <i class="fas fa-users"></i>
                            <p>Pengguna dari berbagai wilayah di indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container-slider">
                        <ul class="slider" id="slider">
                            <li><img src="{{asset('frontend/img/vektor/slider/slide1.png')}}" alt=""></li>
                            <li><img src="{{asset('frontend/img/vektor/slider/slide2.jpg')}}" alt=""></li>
                            <li><img src="{{asset('frontend/img/vektor/slider/slide3.png')}}" alt=""></li>
                            <li><img src="{{asset('frontend/img/vektor/slider/slide4.jpg')}}" alt=""></li>
                        </ul>
                    </div>
                    <div class="controller">
                        <label>
                            <input type="radio" name="radio" id="slide1" checked>
                            <span class="circle"></span>
                        </label>
                        
                        <label>
                            <input type="radio" name="radio" id="slide2">
                            <span class="circle"></span>
                        </label>
                        
                        <label>
                            <input type="radio" name="radio" id="slide3">
                            <span class="circle"></span>
                        </label>

                        <label>
                            <input type="radio" name="radio" id="slide4">
                            <span class="circle"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="section">
                        <div class="section4" id="section">
                            <i class="fas fa-mobile"></i>
                            <p>Tampilan web bisa diakses dengan desktop atau mobile</p>
                        </div>
                        <div class="section5" id="section">
                            <i class="fas fa-paper-plane"></i>
                            <p>User dapat berinteraksi dengan Admin</p>
                        </div>
                        <div class="section6" id="section">
                            <i class="fab fa-windows"></i>
                            <p>Tampilan web yang memukau</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- ----------------------------------------SERVICE------------------------------------------------------- -->
    <div class="service" id="service">
        <div class="container">
            <h3 class="text-center">APLIKASI TEMPAT MENCARI LOWONGAN PEKERJAAN ATAU MAGANG DI SELURUH INDONESIA</h3>

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">IDUKA</h5>
                  <p class="card-text">"Smart IDUKA ini dibangun untuk para Lulusan SMK Pertiwi khususnya dan umunya untuk masyarakat yang sedang mencari pekerjaan,, tentunya aplikasi kita ini memudahkan para pengangguran untuk mendapat pekerjaan"</p>
                  <img src="{{asset('frontend/img/owner.png')}}" alt="">
                </div>
                <div class="body-2"></div>
                <div class="card-footer">
                    <p><span>SMK PERTIWI KUNINGAN</span> , CEO Smart IDUKA</p>
                </div>
                <div class="footer-2"></div>
            </div>
        </div>
    </div>

<!-- ----------------------------------------KerjaSama------------------------------------------------------- -->
        <div class="cooperation">
            <div class="container">
                <h2 class="text-center font-weight-normal">Klien Kami</h2>
                <section class="customer-logos slider">
                    <div class="slide"><img src="{{asset('frontend/img/KKSI/Bendera Smart School remake.png')}}" alt="logo"></div>
                    <div class="slide"><img src="{{asset('frontend/img/cooperation/facebook.png')}}" alt="logo"></div>
                    <div class="slide"><img src="{{asset('frontend/img/cooperation//google.png')}}" alt="logo"></div>
                    <div class="slide"><img src="{{asset('frontend/img/cooperation//instagram.png')}}" alt="logo"></div>
                    <div class="slide"><img src="{{asset('frontend/img/KKSI//KKSI5.png')}}" alt="logo"></div>
                    <div class="slide"><img src="{{asset('frontend/img/cooperation//twitter.png')}}" alt="logo"></div>
                    <div class="slide"><img src="{{asset('frontend/img/cooperation//uber.png')}}" alt="logo"></div>
                    <div class="slide"><img src="{{asset('frontend/img/cooperation//youtube.png')}}" alt="logo"></div>
                </section>
            </div>
        </div>

<!-- ----------------------------------------contact------------------------------------------------------- -->

        <div class="contact-container" id="contact">
            <div class="container">
                <div class="contact">
                   <div class="card-contact  card-active">
                        <div class="contact-header" >
                            <h3>smart iduka</h3>
                        </div>
                        <p>Ketahui semua tentang Smart IDUKA penampung lowongan pekrjaan seluruh Indonesia</p>
                        <a href="#" class="btn btn-outline-success text-center">SELENGKAPNYA</a>
                   </div>
                    <div class="card-contact">
                        <div class="contact-header">
                            <h3>About</h3>
                        </div>
                        <p>Bagaimana kita membangun aplikasi ini? bagaimana sejarahnya? dan bagaimana bisa?</p>
                        <a href="" class="btn btn-outline-primary">SELENGKAPNYA</a>
                    </div>
                    <div class="card-contact">
                        <div class="contact-header">
                            <h3>Contact</h3>
                        </div>
                    <p>Tanyakan mengenai Lowongan ataupun memberi saran mengenai aplikasi kami</p>
                    <a href="" class="btn btn-outline-warning">SELENGKAPNYA</a>
                    </div>
                    <div class="card-contact">
                        <div class="contact-header">
                            <h3>Company</h3>
                        </div>
                        <p>Ketahui Company Profile kami, dari mulai lokasi perusahaan serta sosial media kami</p>
                        <a href="#" class="btn btn-outline-danger mt-auto">SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
        </div>

        <!--------------------------------register--------------------------------------------------------- -->

        <div class=" register row">
            <div class="col-sm">
                <aside>
                    <p>Web Aplikasi untuk pencari kerja</p>
                    <h5>Smart <span>IDUKA</span></h5>
                    <div class="row">
                        <div class="col-lg">
                            <div class="check">
                                <i class="far fa-check-circle"></i><span>Lowongan kerja Legal</span>
                            </div>
                            <div class="check">
                                <i class="far fa-check-circle"></i><span>MOU dengan banyak Perusahaan</span>
                            </div>
                            <div class="check">
                                <i class="far fa-check-circle"></i><span>Terdapat perusahaan perusahaan besar</span>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="check">
                                <i class="far fa-check-circle"></i><span>Lowongan kerja Legal</span>
                            </div>
                            <div class="check">
                                <i class="far fa-check-circle"></i><span>MOU dengan banyak Perusahaan</span>
                            </div>
                            <div class="check">
                                <i class="far fa-check-circle"></i><span>Terdapat perusahaan perusahaan besar</span>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn-success">Learn More...</a>
                </aside>
            </div>
            <div class="col-sm">
                <div class="goREG text-dark text-center py-3 d-flex flex-column bd-highlight mb-3 ">
                    <div class="regisCon">
                        <div class="goREG-content">
                            <h3 class="text-danger">Daftar Smart <span>IDUKA</span></h3>
                            <img src="{{asset('frontend/img/vektor/user2.png')}}" alt=""><br>
                            <a href="{{url('daftar')}}" class="btn btn-danger">REGISTER</a>
                        </div>
                        <div class="partikel"></div>
                        <div class="partikel"></div>
                        <div class="partikel"></div>
                        <div class="partikel"></div>
                        <div class="partikel"></div>
                        <div class="partikel"></div>
                    </div>
                </div>
            </div>
        </div>

<!-- ----------------------------------------FOOTER------------------------------------------------------- -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <h4>Smart <span>IDUKA</span></h4>
                    </div>
                    <div class="col-md-5 copy">
                        <a href="">Terms & Conditions</a><br>
                        <a href="">Privacy Police</a>
                        <p>&copy; Copyright 2020 SMK PERTIWI KUNINGAN
                            All Rights Reserved </p>
                    </div>
                    <div class="col-md-5">
                        <h6>Social Media</h6>
                        <div class="sosmed">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-youtube"></i>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#header" class="go-top"><i>go top >></i></a>
        </footer>

        



    <!--------------------------------Login--------------------------------------------------------- -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="login-input">
            <div class="modal-header login-head">
                <h3 class="modal-title" id="exampleModalLabel">Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <input type="text" required placeholder="Email" name="login" class="@error('login') is-invalid @enderror" value="{{ old('login') }}">
                    <input type="password" required placeholder="Password" name="password" class="@error('password') is-invalid @enderror" autocomplete="current-password">
                    <button type="submit" class="btn btn-success w-100">Log In</button>
                </form>
            </div>
            <div class="skat">
                <hr><p>atau Login dengan</p><hr>
                </div>
            <div class="modalFooter">
                <a href="#"><i class="fab fa-google beta"></i></a>
                <a href="#"><i class="fab fa-facebook-f beta"></i></a>
                <a href="#"><i class="fab fa-twitter beta"></i></a>
            </div>
        </div>
        </div>
    </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <!-- MY SCRIPT -->
    <script src="{{asset('frontend/js/myJS/script.js')}}"></script>
    <script src="{{asset('frontend/js/myJS/jquery.js')}}"></script>

        <!-- SweetAlert2 -->
<script src="{{asset('AdminLte/plugins/sweetalert2/sweetalert2.min.js')}}"></script>

<script type="text/javascript">
    
// SWAL DI KANAN ATAS
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 4000,
    timerProgressBar: true,
    didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});



@if(Session::has('success'))
    Toast.fire({
    icon: 'success',
    title: "{{Session('success')}}"
    });
@endif

$('.beta').click(function() {
      Toast.fire({
    icon: 'warning',
    title: 'Masih Dalam Pengembangan'
  });
});

@error('login')
Toast.fire({
    icon: 'warning',
    title: '{{ $message }}'
  });
@enderror
@error('password')
Toast.fire({
    icon: 'warning',
    title: '{{ $message }}'
  });
@enderror


</script>
  </body>
</html>


