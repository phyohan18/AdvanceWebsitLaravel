<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="assets/images/logo.png">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Advance YPA</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/article.css">

  @yield('link')
</head>
<body> 
  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>  
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-xs-12">
          <ul class="left-info">
            <li><i class="fa fa-envelope"></i>advanceypa@gmail.com</li>
            <li><i class="fa fa-phone"></i>+95 9 266 721 924</li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="right-icons">
            <li><a href="https://www.facebook.com/advanceyoungprofessionalsassociation/"><i class="fa fa-facebook"></i></a></li>
           
          </ul>
        </div>
      </div>
    </div>
  </div>

  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
       
        <a class="navbar-brand" href="index.html"><h2><span style="color:limegreen;">A</span><span style="color: #12a4d9;">D</span><span style="color: orange;">V</span><span style="color: #d9138a;">A</span><span style="color: #16acea;">N</span><span style="color: red">C</span><span style="color: #e2d810;">E</span>&nbsp;<span style="color: #a4c639;font-size: 20px;">YPA</span></h2></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item {{ Request::path() === '/' ? 'active' : ''}}">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>        

            <li class="nav-item {{ Request::path() === 'about' ? 'active' : ''}}">
              <a class="nav-link" href="/about">About Us</a>
            </li>

            <li class="nav-item {{ Request::path() === 'event' ? 'active' : ''}}">
              <a class="nav-link" href="/event">Events</a>
            </li>

            <li class="nav-item {{ Request::path() === 'volunteer' ? 'active' : ''}}">
              <a class="nav-link" href="/volunteer">Volunteer</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink">Pages</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: white;">
                <a class="dropdown-item {{ Request::path() === 'blog' ? 'active' : ''}}" href="/blog">Article Blog</a>
                <a class="dropdown-item {{ Request::path() === 'liveyouthtalk' ? 'active' : ''}}" href="/liveyouthtalk">Live:Youth Talk</a>
                <a class="dropdown-item {{ Request::path() === 'gallery-view' ? 'active' : ''}}" href="/gallery-view">Gallery</a>
              </div>
            </li>     

            <li class="nav-item {{ Request::path() === 'support' ? 'active' : ''}}">
              <a class="nav-link" href="/support">Support Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->

  @yield('content')
  @yield('event')

  <!-- Content Area Ends -->

  <!-- Footer -->

  <div class="sub-footer">
    <div class="container">
      <div class="row">
          <p class='col-10'>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
          </p>
          <div class="col-2">
            
            <a href="https://www.facebook.com/advanceyoungprofessionalsassociation/"><i class="fa fa-facebook"></i></a>
            
          </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/accordions.js"></script>

  <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
        }
      }
    </script>

  </body>
  </html>