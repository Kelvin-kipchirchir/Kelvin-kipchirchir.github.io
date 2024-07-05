<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  @foreach($details as $detail)
  <title>{{$detail->name}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
  <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <!--a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a-->
       <h3 class="p-heading">{{$detail->name}}</h3>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link  scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link  scrollto" href="#journal">Resume</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{route('login')}}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="home">

    <div class="container">
      <div class="hero-content">
        <h1>Hi,everyone <span class="typed" data-typed-items="i am Kelvin kipchirchir, a Software Developer, Networker,Freelancer, Hacker"></span></h1>
        <p>Software Developer,Networker,Freelancer, Hacker</p>

        <ul class="list-unstyled list-social">
          <li><a href="www.facebook.com"><i class="bi bi-facebook"></i></a></li>
          <li><a href="#"><i class="bi bi-twitter"></i></a></li>
          <li><a href="https://github.com/Kelvin-Kipchirchir"><i class="bi bi-github"></i></a></li>
          <li><a href="https://www.linkedin.com/in/kelvin-kipchirchir-7a7a121a1."><i class="bi bi-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4 ">
            <div class="div-img-bg">
              <div class="about-img">
                @foreach($profile_pic as $profile_pic)
                <img src="{{url ('public/images/'.$profile_pic->profile_pic)}}" class="img-responsive" alt="me">
                @endforeach
              </div>
            </div>
          </div>
        
          <div class="col-lg-7">
            <div class="section-title text-center">
                  <h2>About</h2>
               </div>
            <div class="about-descr">
              <p class="p-heading">{{$detail->bio}}</p>
              <p class="separator">Under the sun Nothing is impossible </p>
            </div>

          </div>
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services">
      <div class="container">

        <div class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

             <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-bar-chart"></i>
                <span>WEB DEVELOPMENT</span>
                <p class="separator">Design and Develop all kinds of websites from small scale to large scale</p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-card-checklist"></i>
                <span>NETWORKING</span>
                <p class="separator">Flexible from secure Configuration and deployment of Switches and routers,to active configuration of firewalls and other wireless devices</p>
              </div>
            </div><!-- End testimonial item -->

           

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-binoculars"></i>
                <span>MOBILE APPS</span>
                <p class="separator">Develop Apps as per the user requirements </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-brightness-high"></i>
                <span>DATA SCIENCE</span>
                <p class="separator">With the Data Science and Data Analytics revolution,data is the real fuel to sustainable future </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-calendar4-week"></i>
                <span>PENTESTING</span>
                <p class="separator">Love the art of finding flaws in Networks,Applications and cloud systems then fix them </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </div><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
     
    <div id="portfolio" class="paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>My Portfolio</h2>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
               <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-web">Web</li>
                 <li data-filter=".filter-cyber">Cyber security</li>
                  <li data-filter=".filter-network">Networking</li>
              <li data-filter=".filter-data-science">Data Science</li>
            </ul>
          </div>
        </div>
      
        <div class="row portfolio-container">
         @foreach( $projects as $project)
         @if($project->category == "data science")
          <div class="col-lg-4 col-md-6 portfolio-item filter-data-science">
            <img src="{{url ('public/images/'.$project->image)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$project->category}}</h4>
              <p>{{$project -> project_name}}:{{$project->project_name}}</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{ route('project.moredetails',$project->id)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

           @elseif($project->category == "app")
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{url ('public/images/'.$project->image)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$project->category}}</h4>
              <p>{{$project -> project_name}}:{{$project->project_name}}</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{ route('project.moredetails',$project->id)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          @elseif($project->category == "cyber security")
          <div class="col-lg-4 col-md-6 portfolio-item filter-cyber">
           <img src="{{url ('public/images/'.$project->image)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$project->category}}</h4>
              <p>{{$project -> project_name}}:{{$project->project_name}}</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{ route('project.moredetails',$project->id)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
           @elseif($project->category == "web")
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
           <img src="{{url ('public/images/'.$project->image)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$project->category}}</h4>
              <p>{{$project -> project_name}}:{{$project->project_name}}</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{ route('project.moredetails',$project->id)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
           @elseif($project->category == "networking")
          <div class="col-lg-4 col-md-6 portfolio-item filter-network">
           <img src="{{url ('public/images/'.$project->image)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$project->category}}</h4>
              <p>{{$project -> project_name}}:{{$project->project_name}}</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{ route('project.moredetails',$project->id)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          @endif
           @endforeach
        </div>
    
      </div>
  
    </div><!-- End Portfolio Section -->

    <!-- ======= Journal Section ======= -->
    <div id="journal" class="text-left paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>Resume</h2>
        </div>
      </div>

      <div class="container">
        <div class="journal-block">
          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="{{route('index.skills')}}"><img src="assets/img/skill.jpeg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="{{route('index.skills')}}">SKILLS AND CERTIFICATIONS</a></h4>
                  <p class="separator">What skills do i offer
                  </p>

                </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="{{route('index.education')}}"><img src="assets/img/education.jpeg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="{{route('index.education')}}">EDUCATION</a></h4>
                  <p class="separator">My educational background
                  </p>

                </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="{{route('index.experience')}}"><img src="assets/img/hacker.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="{{route('index.experience')}}">EXPERIENCE</a></h4>
                  <p class="separator">Work experience
                  </p>

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>

    </div><!-- End Journal Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
      <div class="container">
        <div class="contact-block1">
          <div class="row">

            <div class="col-lg-6">
              <div class="contact-contact">

                <h2 class="mb-30">GET IN TOUCH</h2>
                 <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{$detail->location}} </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{$detail->email}}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+254({{$detail->phone}})</p>
              </div>

             
            </div>

          </div>
              </div>
            </div>
               @include('inc.messages')
            <div class="col-lg-6">
              <form action="{{ route('mail.submit')}}" method="post" >
                @csrf
                <div class="row gy-3">

                  <div class="col-lg-6">
                    <div class="form-group contact-block1">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                    </div>
                  </div>

                  <!-- <div class="col-lg-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div> -->

                  <div class="mt-0">
                    <input type="submit" class="btn btn-defeault btn-send">
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div id="footer" class="text-center">
    
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
          <li><a href="https://www.facebook.com"><i class="bi bi-facebook"></i></a></li>
          <li><a href="#"><i class="bi bi-twitter"></i></a></li>
           <li><a href="#"><i class="bi bi-whatsApp"></i></a></li>
               <li><a href="https://github.com/Kelvin-Kipchirchir"><i class="bi bi-github"></i></a></li>
          <li><a href="https://www.linkedin.com/in/kelvin-kipchirchir-7a7a121a1."><i class="bi bi-linkedin"></i></a></li>
        </ul>
        

      </div>
          <p>&copy; 2017–2024 <a href="www.dragonempire.com">Dragon empire</a> ,Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>


      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
      -->
        Developed by <a href="www.kevthedev.com/">Kevthedev</a>
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
@endforeach
</html>