<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My skills</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Folio
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="assets/img/skill.jpeg" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use an text logo -->
      <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link  scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link active  scrollto" href="#journal">Blog</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<hr><hr><hr><hr>
  <main id="main">
@foreach($education as $education)
    <!-- ======= Blog Single ======= -->
    <div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-md-offset-2">
            <div class="row">
              <div class="container-main single-main">
                <div class="col-md-12" >
                  <div class="block-main mb-3" style="background-color: red">

                    </div>
                    <section class="cards" style="display: grid;grid-template-columns: (auto-fill,minmax(250px,1fr);grid-auto-rows: minmax(200px,auto);grid-gap: 1rem);" >
                      <article class="card" style="border:2px solid #e7e7e7;border-radius: 4px;padding: .5rem;box-shadow: 0 2px 2px rgba( 0,0,0,0.15);display: flex;">
                        <picture class="thumbnail" >
                          <img class="category_01" src="{{url ('public/images/'.$education->icon)}}" style="display: block;border:0;width: 10%;height: auto;" class="img-responsive" alt="" >
                    <div class="content-main single-post padDiv">
                           <h4><a href="#">{{$education->institution}}</a></h4>
                        </header>
                        </picture>
                        <header>
                        <div class="post-meta">
                        <ul class="list-unstyled mb-0">
                          <li class="date">Course:<a href="#">{{$education->course}}</a></li>
                          <li class="date">start date:<a href="#">{{$education->start_date}}</a></li>
                          <li class="date">end date:<a href="#">{{$education->end_date}}</a></li>
                        </ul>
                      </div>
                        <div class="card-content" style="font-size: .75rem;display: flex;">
                          <p class="date">Achievement:<br><a href="#">{{$education->about}}</a></p>
                        </div>
                        <footer>
                          
                        </footer>
                      </article>
                      
                    </section>
                       </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                <!-- End Blog Single -->
@endforeach
  </main><!-- End #main -->
  

  <!-- ======= Footer ======= -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
          <li><a href="#"><i class="bi bi-facebook"></i></a></li>
          <li><a href="#"><i class="bi bi-twitter"></i></a></li>
          <li><a href="https://github.com/Kelvin-Kipchirchir"><i class="bi bi-github"></i></a></li>
          <li><a href="https://www.linkedin.com/in/kelvin-kipchirchir-7a7a121a1."><i class="bi bi-linkedin"></i></a></li>
        </ul>

      </div>

       <p>&copy; Copyrights All rights reserved.</p>

      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
      -->
        Designed by <a href="www.kevthedev">kevthedev</a>
      </div>

    </div>
  </div><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>