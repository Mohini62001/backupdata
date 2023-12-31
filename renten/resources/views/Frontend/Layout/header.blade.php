<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Renten - Car Rental Service HTML Template</title>
  <!-- site favicon -->
  <link rel="shortcut icon" type="image/png" href="{{url('Frontend/assets/images/favicon.jpg')}}"/>
  <!-- fontawesome css link -->
  <link rel="stylesheet" href="{{url('Frontend/assets/css/fontawesome.min.css')}}">
  <!-- bootstrap css link -->
  <link rel="stylesheet" href="{{url('Frontend/assets/css/bootstrap.min.css')}}">
  <!-- lightcase css link -->
  <link rel="stylesheet" href="{{url('Frontend/assets/css/lightcase.css')}}">
  <!-- animate css link -->
  <link rel="stylesheet" href="{{url('Frontend/assets/css/animate.css')}}">
  <!-- nice select css link -->
  <link rel="stylesheet" href="{{url('Frontend/assets/css/nice-select.css')}}">
  <!-- datepicker css link -->
  <link rel="stylesheet" href="{{url('Frontend/assets/css/datepicker.min.css')}}">
  <!-- wickedpicker css link -->
  <link rel="stylesheet" href="{{url('Frontend/assets/css/wickedpicker.min.css')}}">
  <!-- jquery ui css link -->
  <link rel="stylesheet" href="{{url('Frontend/assets/css/jquery-ui.min.css')}}">
  <!-- owl carousel css link -->
  <link rel="stylesheet" href="{{url('Frontend/assets/css/owl.carousel.min.css')}}">
  <!-- main style css link -->
  <link rel="stylesheet" href="{{url('Frontend/assets/css/main.css')}}">
</head>
<body>

  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->   

  <!--  header-section start  -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3">
            <ul class="social-links">
              <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="header-info d-flex justify-content-center">
              <li>
                <i class="fa fa-map-marker"></i>
                <p>Medino, NY 10012, USA Mitro Road</p>
              </li>
              <li>
                <i class="fa fa-clock-o"></i>
                <p>Sat - Fri Day 08:00 am - 5.00 pm Sunday Holyday</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-3">
            <div class="header-action d-flex align-items-center justify-content-end">
              <div class="lag-select-area">
                <select>
                  <option>ENG</option>
                  <option>RUS</option>
                  <option>BAN</option>
                </select>
              </div>
              <div class="login-reg">
                  <a href="#0">Sign Up</a>
                  <a href="#0">Sign in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
          <a class="site-logo site-title" href="index"><img src="{{url('Frontend/assets/images/logo1.png')}}" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu mr-auto">
              <li class="menu_has_children"><a href="#0">Home</a>
                <ul class="sub-menu">
                  <li><a href="index">Home One</a></li>
                  <li><a href="home-two">Home Two</a></li>
                </ul>
              </li>
              <li><a href="about">About</a>
              <li class="menu_has_children"><a href="#0">cars</a>
                <ul class="sub-menu">
                  <li><a href="car-list-one">car list one</a></li>
                  <li><a href="car-list-two">car list two</a></li>
                </ul>
              </li>
              <li class="menu_has_children"><a href="#0">pages</a>
                <ul class="sub-menu">
                  <li><a href="reservation">reservation</a></li>
                  <li><a href="login">login</a></li>
                  <li><a href="registration">registration</a></li>
                  <li><a href="error-404">404</a></li>
                </ul>
              </li>
              <li class="menu_has_children"><a href="#0">blog</a>
                <ul class="sub-menu">
                  <li><a href="blog">blog page</a></li>
                  <li><a href="blog-details">blog details</a></li>
                </ul>
              </li>
              <li><a href="contact">contact us</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div><!-- header-bottom end -->
  </header>
  <!--  header-section end  -->