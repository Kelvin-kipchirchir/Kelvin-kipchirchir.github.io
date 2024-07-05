<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Project Details</title>
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
  <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="assets/img/skill.jpeg" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use an text logo -->
      <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <!-- <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Project Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><! Breadcrumbs Section --> 
<hr>
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      @foreach($details as $detail)
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            @if(count($project_images)>0)
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <!--indicators-->
    <ol class="carousel-indicators">
        @foreach($project_images as $project_image)
        <li data-target="carousel-example-generic" data-slide-to="{{ $loop ->index }}" class="{{ $loop->first ? 'active' : ''}}"></li>
        @endforeach
    </ol>
    <!--wrapper for slides-->
    <div class="carousel-inner">
      @foreach($project_images as  $project_image)    
      <div class="carousel-item {{ $loop -> first ? 'active' : ''}}">
        <img src="{{url ('public/images/'.$project_image->image)}}" class="d-block w-50" alt="">
      </div>
      @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  @endif
          </div>



          <div class="col-lg-4" style="border:2px solid #e7e7e7;border-radius: 4px;padding: .5rem;box-shadow: 0 2px 2px rgba( 0,0,0,0.15);">
            <div class="portfolio-info">
              <h3>PROJECT INFORMATION</h3>
              <ul>
                <li><strong>Project Name</strong>: {{$detail->project_name}}</li>
                <li><strong>Category</strong>: {{$detail->category}}</li>
                <li><strong>Client</strong>: {{$detail->client}}</li>
                <li><strong>Project date</strong>: {{$detail->created_at}}</li>
                <li><strong>Technologies</strong>: {{$detail->technologies_used}}</li>
                <li><strong>Project URL</strong>: <a href="https:///{{$detail->url}}">{{$detail->url}}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>PROJECT SUMMARY</h2>
              <p>
                {{$detail->details}}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
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

      <p>&copy; Copyrights . All rights reserved.</p>

      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
      -->
        Developed by <a href="https:///kevthedev.com">kevthedev</a>
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