<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ config('app.name')}}</title>

  <title>About - I Hear</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('../rtx/img/ihear.png')}}" rel="icon">
  <link href="{{ asset('../rtx/img/ihear.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('../vendor/custom/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('../vendor/custom/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('../vendor/custom/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('../vendor/custom/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('../vendor/custom/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('../vendor/custom/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('../vendor/custom/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('../rtx/css/about.css')}}">
</head>
<body>
      <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><img src="{{ asset('../rtx/img/ihear.png')}}">I-Hear</a></h1>

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li><a href="{{ url('page/index')}}">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
        </ul>

    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('../rtx/img/bc.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

              <div class="row content">
                <div class="col-lg-6">
                  <h2>Music APP "I-Hear"</h2>
                  <h3>Solusi tanpa ribet bagi anda yang perlu ditemani</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                  <p>
                    Aplikasi ini cocok untuk anda yang ingin mendengarkan musik terkeren dan terkece, dimana kumpulan lagu nya sangat banyak dan mantaps
                  </p>
                  <ul>
                    <li><i class="ri-check-double-line"></i> Dibuat oleh mahasiswa Unpak</li>
                    <li><i class="ri-check-double-line"></i> Dibuat dalam waktu 7 minggu</li>
                    <li><i class="ri-check-double-line"></i> Di Uji dalam mata kuliah software testing</li>
                  </ul>
                </div>
              </div>

            </div>
          </section><!-- End About Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Our Hardworking Team</p>
        </div>

        <div class="row">

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('../rtx/img/wita.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>WIta Setianingsih</h4>
                <span>065118139</span>
                <p> kuliah adalah jalan ninja ku</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/witastnngsh_/"><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('../rtx/img/profil.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Heru Purnama</h4>
                <span>065118168</span>
                <p>Hidup adalah keren</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/iamherrr14/"><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <section id="about" class="about">
      <div class="container">
      <div class="row content">
                <div class="col-lg-6">
                  <h2>Behind The Apps</h2>
                  <h3>-----</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                  <p>
                    Aplikasi ini cocok untuk anda yang ingin mendengarkan musik terkeren dan terkece, dimana kumpulan lagu nya sangat banyak dan mantaps
                  </p>
                  <ul>
                    <li><i class="ri-check-double-line"></i> Dibuat oleh mahasiswa Unpak</li>
                    <li><i class="ri-check-double-line"></i> Dibuat dalam waktu 7 minggu</li>
                    <li><i class="ri-check-double-line"></i> Di Uji dalam mata kuliah software testing</li>
                  </ul>
                </div>
              </div>
      </div>
    </section>

    <!-- Behind The Apps -->
    <section id="about" class="about">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 2015.128 887"><defs><style>.a{fill:url(#a);}.b{fill:url(#b);}.c,.d,.e{fill:#f9f9f9;}.c{font-size:50px;}.c,.d{font-family:Roboto-Bold, Roboto;font-weight:700;}.d{font-size:30px;}.e{font-size:25px;font-family:Roboto-Regular, Roboto;}.f{filter:url(#c);}</style><linearGradient id="a" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#00cbff"/><stop offset="1" stop-color="#6a14ff"/></linearGradient><pattern id="b" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 172 256"><image width="300px" height="300px" xlink:href="{{ asset('../rtx/img/me.jpg')}}"/></pattern><filter id="c" x="822.128" y="0" width="428" height="413" filterUnits="userSpaceOnUse"><feOffset dy="15" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="d"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="d"/><feComposite in="SourceGraphic"/></filter></defs><g transform="translate(95.128 -193)"><g transform="translate(-766.696 418.299)"><path class="a" d="M540,1950.149c0-436.282-94.5-473.413-94.5-677.63S486,706.281,429.75,706.281,218.25,669.15,238.5,502.063s18-269.2-33.751-417.717S0,28.65,0,28.65V2015.128H540Z" transform="translate(671.568 661.701) rotate(-90)"/></g><g class="f" transform="matrix(1, 0, 0, 1, -95.13, 193)"><ellipse class="b" cx="205" cy="194.5" rx="205" ry="194.5" transform="translate(831.13)"/></g><text class="c" transform="translate(668.5 660.5)"><tspan x="29.446" y="52">Zufar Mahasin Naufal</tspan></text><text class="d" transform="translate(668.5 762.5)"><tspan x="118.691" y="31">IT - Leader / Developer</tspan></text><text class="e" transform="translate(668.5 835.5)"><tspan x="209.329" y="26">065118167</tspan></text></g></svg>    
         
          </section>



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>I-Hear</h3>
              <p>
                Jln. Didepan <br>
               Bogor, Indonesia<br><br>
                <strong>Phone:</strong> 083896627475<br>
                <strong>Email:</strong> @unpak.ac.id<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contributor</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">ABout Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>I-Hear Music</span></strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <script src="{{ asset('../vendor/custom/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('../vendor/custom/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('../vendor/custom/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('../vendor/custom/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('../vendor/custom/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('../vendor/custom/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('../vendor/custom/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('../vendor/custom/owl.carousel/owl.carousel.min.js') }}"></script>

  <script src="{{ asset('../rtx/js/about.js') }}"></script>
</body>
</html>