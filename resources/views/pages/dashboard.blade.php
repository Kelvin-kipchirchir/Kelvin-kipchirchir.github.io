<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>Dashboard</title>
	<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>
<body>

	<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Portfolio</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">x</span>
  </button><br>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="{{url('signout')}}">LOGOUT</a>
    </div>
  </div>
</header>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <div class="profile">
        <img src="assets/img/me.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">{{ucfirst(Auth()->user()->name)}}</a></h1>
        <div class="social-links mt-3 text-center">
          <ul class="list-unstyled list-social">
          <li><a href="#"><i class="bi bi-facebook"></i></a></li>
          <li><a href="#"><i class="bi bi-twitter"></i></a></li>
          <li><a href="#"><i class="bi bi-instagram"></i></a></li>
          <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
        </ul>
        </div>
      </div>
        <ul class="nav flex-column">
           <p><img src="{{url ('public/images/')}}" style="height: 50px;width: 50px;"></p><a href="{{ route('add.profile_pic')}}" class="btn btn-dark">Update Profile Pic</a></p>
          
       
				{{ucfirst(Auth()->user()->name)}}
				{{ucfirst(Auth()->user()->email)}}
				

          <li class="nav-item">
            <a class="nav-link" href="{{route('view.profile',['ow'=>ucfirst(Auth()->user()->email)])}}">
              <span data-feather="file" class="align-text-bottom"></span>
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('view.projects')}}">
              <span data-feather="users" class="align-text-bottom" ></span>
              Projects
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('view.education')}}">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
            Education
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('view.skills')}}">
              <span data-feather="layers" class="align-text-bottom"></span>
              Skills
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{route('view.experience')}}">
              <span data-feather="layers" class="align-text-bottom"></span>
              Experience
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('view.certificate')}}">
              <span data-feather="layers" class="align-text-bottom"></span>
              Certification
            </a>
          </li>
        </ul>
        
        

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Application settings</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>

      </div>
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
      <div class="container">
		@yield('content')
	   </div>
      <div class="table-responsive">
        
      </div>
    </main>
  </div>
</div>


    

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>	
	

</body>
</html>