<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Loopinc.id</title>
  <link rel="shortcut icon" type="image/x-icon" href="{!! asset('images/icon.png') !!}">

  <link href="{!! asset('landingpage/css/bootstrap.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('landingpage/css/animate.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('landingpage/css/font-awesome.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('landingpage/css/lightbox.css') !!}" rel="stylesheet">
  <link href="{!! asset('landingpage/css/main.css') !!}" rel="stylesheet">
  <link id="css-preset" href="{!! asset('landingpage/css/presets/preset1.css') !!}" rel="stylesheet">
  <link href="{!! asset('landingpage/css/responsive.css') !!}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
  <style media="screen">
  /* .menu-area{background: #563d7c} */
    .dropdown-menu{padding:0;margin:0;border:0 solid transition!important;border:0 solid rgba(0,0,0,.15);border-radius:0;-webkit-box-shadow:none!important;box-shadow:none!important}
    /* a, .navbar-default .navbar-nav > li > a, ul li a , .navbar-expand-lg .navbar-nav .nav-link{color:#fff;font-size:16px;text-transform:capitalize;padding:16px 15px;font-family:'Roboto',sans-serif;display: block !important;} */
    .active a, .active a:focus, .active a:hover, li a:hover, li a:focus ,.navbar-default .navbar-nav>.show>a, .navbar-default .navbar-nav>.show>a:focus, .navbar-default .navbar-nav>.show>a:hover{color: #fff;background: utline: 0;}
    /*==========Sub Menu=v==========*/
    .collapse ul > li:hover > a{background: #e2725b;}
    .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .show .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .show .dropdown-menu > li > a:hover{background: #e2725b;}
    .collapse ul ul ul > li:hover > a{background: #e2725b;}

    .collapse ul ul, .collapse ul ul.dropdown-menu{background:#fff;}
    .collapse ul ul ul, .collapse ul ul ul.dropdown-menu{background:#fff}
    .collapse ul ul ul ul, .collapse ul ul ul ul.dropdown-menu{background:#e2725b}

    /******************************Drop-down menu work on hover**********************************/
    /* .mainmenu{background: none;border: 0 solid;margin: 0;padding: 0;min-height:20px;width: 100%;} */
    @media only screen and (min-width: 767px) {
    .collapse ul li:hover> ul{display:block}
    .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
    /*******/
    .collapse ul ul li{position:relative}
    .collapse ul ul li:hover> ul{display:block}
    .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
    /*******/
    .collapse ul ul ul li{position:relative}
    .collapse ul ul ul li:hover ul{display:block}
    .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1}

    }
    @media only screen and (max-width: 767px) {
      .navbar-nav .show .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 35px}
      .navbar-nav .show .dropdown-menu .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 45px}
    }

    .navbar-pandhu li a {
  		font-size: 13px;
  		padding-bottom: 8px;
  		padding-top: 10px;
  	}

    @media (min-width: 768px) and (max-width: 991px) {
      .navbar-pandhu li a {
    		font-size: 12px;
    		padding-right: 10px;
    	}
    }

    .navbar-pandhu li a {
      /* color: #fff; */
      color: #000;
      text-transform: uppercase;
      font-size: 14px;
      font-weight: 600;
      padding-top: 23px;
      padding-bottom: 23px;
    }

    .navbar-pandhu li.active a {
      /* background-color: rgba(0,0,0,.2); */
      background-color: #e2725b;
    }

    form.form-search{
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-40%, 15%);
        transition: all 1s;
        width: 50px;
        height: 50px;
        background: #e2725b;
        box-sizing: border-box;
        border-radius: 25px;
        border: 4px solid white;
        padding: 5px;
    }

    input.text-search{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 42.5px;
        line-height: 30px;
        outline: 0;
        border: 0;
        display: none;
        font-size: 1em;
        border-radius: 20px;
        padding: 0 20px;
    }

    form .fa{
        box-sizing: border-box;
        padding: 10px;
        width: 42.5px;
        height: 42.5px;
        position: absolute;
        top: 0;
        right: 0;
        border-radius: 50%;
        color: #07051a;
        text-align: center;
        font-size: 1.2em;
        transition: all 1s;
    }

    form:hover.form-search{
        width: 200px;
        cursor: pointer;
    }

    form:hover.form-search input{
        display: block;
    }

    form:hover.form-search .fa{
        background: #e2725b;
        color: white;
    }

    .float{
    	position:fixed;
    	width:60px;
    	height:60px;
    	bottom:40px;
    	right:40px;
    	background-color:#25d366;
    	color:#FFF;
    	border-radius:50px;
    	text-align:center;
      font-size:30px;
      z-index:100;
    }

    .my-float{
    	margin-top:16px;
    }

    .warna-title{
      color : #e2725b;
      font-weight: bold;
    }

    .paragraph-address-space{
      margin: 0;
      padding: 0;
    }

    .terra-cotta{
      color: #e2725b;
    }

    .space-paragraph{
      margin-top: 40px;
    }

    .center-position{
      margin-left: 37%;
    }
  </style>
  @include("items.meta")

</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(landingpage/images/millenials_pic9.jpg)">
          <div class="col-xs-12 col-md-8 caption">
            <img src="" class="img-responsive" alt="">
            <h1 class="animated fadeInLeftBig paragraph-address-space terra-cotta">Selamat Datang di <span>Loopinc.id</span></h1>
            <p class="animated fadeInRightBig paragraph-address-space terra-cotta" style="text-transform:none;">Temukan rekomendasi jurusan dan karir yang pas buatmu.</p>
            <p class="terra-cotta animated fadeInLeftBig" style="text-transform:none;">Persiapkan dirimu di dunia kerja dengan konten pengembangan diri.</p>
            <p class="terra-cotta animated fadeInRightBig">ONLINE, INSTANT, GAK PAKE LAMA</p>
            <!-- <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Kenali dirimu sendiri</a> -->
          </div>
        </div>
        <div class="item" style="background-image: url(landingpage/images/millenials_pic9.jpg)">
          <div class="col-xs-12 col-md-8 caption">
            <h4 class="animated fadeInLeftBig terra-cotta" style="font-style: italic;text-transform:none;"> “The future belongs to those who prepare for it today” <span style="font-style: normal;">(Malcolm X)</span></h4>
            <!-- <p class="animated fadeInRightBig"></p> -->
            <!-- <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Kenali dirimu sendiri</a> -->
          </div>
        </div>
        <div class="item" style="background-image: url(landingpage/images/millenials_pic9.jpg)">
          <div class="col-xs-12 col-md-8 caption">
            <h4 style="font-style: oblique;text-transform:none;text-align:right;" class="paragraph-address-space animated fadeInLeftBig terra-cotta">“87% persen mahasiswa di Indonesia salah jurusan”</h4>
            <p class="paragraph-address-space animated fadeInRightBig terra-cotta" style="text-transform:none;text-align:right;">Irene Guntur, M.Psi., Psi., CGA,</p>
            <p class="paragraph-address-space animated fadeInRightBig terra-cotta" style="text-transform:none;text-align:right;">Educational Psychologist dari Integrity Development Flexibility (IDF)</p>

            <p class="space-paragraph animated fadeInRightBig terra-cotta" style="text-transform:none;text-align:right;">Kenali dirimu disini, temukan jurusan yang paling pas buatmu.</p>
            <p class="terra-cotta animated fadeInRightBig center-position">ONLINE, INSTANT, GAK PAKE LAMA</p>

            <!-- <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Kenali dirimu sendiri</a> -->
          </div>
        </div>

      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url("/")}}">
            <h1><img class="img-responsive" style="margin-left:0%;margin-top:-35%;" width="100ms" src="{!! asset('images/icon.png') !!}" alt="loopinc.id"></h1>
          </a>
        </div>
        <div class="collapse navbar-collapse" >
          <ul class="nav navbar-nav navbar-pandhu">
            <!-- <li class="scroll"><a href="#tentang-kami">Tentang Kami</a></li> -->
            <li class="scroll">
              <a href="#services" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Fitur
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="#">GUIDANCE</a></li>
                <li><a href="#">KNOW WELL</a></li>
                <li><a href="#">IMPROVE</a></li>
                <li><a href="#">MENTORING</a></li>
                <!-- <li class="dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SISWA<span style="float:right;position:fix;" class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a href="#">GUIDANCE</a></li>
                      <li><a href="#">KNOW WELL</a></li>
                      <li><a href="#">IMPROVE</a></li>
                      <li><a href="#">MENTORING</a></li>
                    </ul>
                </li> -->
                <!-- <li class="dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SEKOLAH<span style="float:right;position:fix;" class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a href="#">SMP</a></li>
                      <li><a href="#">SMK</a></li>
                      <li><a href="#">MAHASISWA</a></li>
                    </ul>
                </li> -->
                <!-- <li><a href="#">KAMPUS</a></li> -->
              </ul>
            </li>
            <li class="scroll">
              <a class="dropdown-toggle" id="tes-online" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                TES ONLINE
              </a>
              <ul class="dropdown-menu" aria-labelledby="tes-online">
                <li><a href="#">GAYA BELAJAR</a></li>
                <li><a href="#">KEPRIBADIAN</a></li>
                <li><a href="#">JURUSAN SMA</a></li>
                <li><a href="#">JURUSAN KULIAH</a></li>
                <li><a href="#">REKOMENDASI KARIR</a></li>
                <li><a href="#">KOMPETENSI KERJA</a></li>
              </ul>
            </li>
            <li class="scroll">
              <a class="dropdown-toggle" id="harga" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PAKET
              </a>
              <ul class="dropdown-menu" aria-labelledby="harga">
                <li><a href="#">BASIC</a></li>
                <li><a href="#">PREMIUM</a></li>
              </ul>
            </li>
            <li class="scroll"><a href="http://blog.loopinc.id/">Blog</a></li>
            <li class="scroll"><a href="#contact-us">Hubung Kami</a></li>
            <li style="margin-left:18em;">
              <a href="{{ url('direct') }}">Sign In <i class="fa fa-user"></i></a>
            </li>
            <li class="">
              <form action="" class="form-search">
                <input type="search" class="text-search">
                <i class="fa fa-search"></i>
              </form>
            </li>
          </ul>
        </div>
      <!-- </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <!-- <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div>
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-flask"></i>
              adsfasdf
            </div>
            <div class="service-info">
              <h3>Brand Identity</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div>
          <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-umbrella"></i>
            </div>
            <div class="service-info">
              <h3>Creative Idea</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div>
          <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-cloud"></i>
            </div>
            <div class="service-info">
              <h3>Awesome Support</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div>
          <div class="col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-coffee"></i>
            </div>
            <div class="service-info">
              <h3>Professional Design</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div> -->
          <!-- <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-bitbucket"></i>
            </div>
            <div class="service-info">
              <h3>App Development</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-gift"></i>
            </div>
            <div class="service-info">
              <h3>Clean Code</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div> -->
        <!-- </div>
      </div>
    </div>
  </section><!--/#services-->

  <!-- <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Our Portfolio</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/1.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/2.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/3.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/4.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/5.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/6.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/7.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/8.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  <!-- </section><!--/#portfolio-->

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Ada apa aja di <span class="warna-title">loopinc.id</span></h2>
          <p class="paragraph-address-space">Membantumu merancang masa depan adalah misi kami.</p>
          <p class="paragraph-address-space">Kenali dirimu, rancang masa depanmu, <span class="warna-title">loopinc.id</span> akan selalu ada buatmu sampai kamu bekerja nanti!</p>
        </div>
      </div>
      <div class="team-members">
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="{{ url('landingpage/images/millenials_pic11.png') }}" alt="">
              </div>
              <div class="member-info">
                <h3>Guidance</h3>
                <!-- <h4>CEO &amp; Founder</h4> -->
                <p>Tim kami telah
                    merancang
                    pendekatan yang
                    dapat kamu jadikan
                    acuan dalam
                    merancang masa
                    depanmu.

                    You are the planner
                    of your future!
                </p>
              </div>
              <!-- <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div> -->
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="{{ url('landingpage/images/plus-and-minus.jpg') }}" alt="">
              </div>
              <div class="member-info">
                <h3>Know Well</h3>
                <!-- <h4>UI/UX Designer</h4> -->
                <p>
                  Kenali lebih dalam tentang
                  dirimu, mulai dari gaya belajar,
                  kepribadian, jurusan di SMA,
                  Jurusan di Perguruan Tinggi,
                  serta rekomendasi karir yang
                  pas buatmu.

                  Kenali juga kelebihan dan area
                  yang perlu kamu kembangkan
                  di lingkup pekerjaan, agar lebih
                  siap kerja.
                </p>
              </div>
              <!-- <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div> -->
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="{{ url('landingpage/images/improve.png') }}" alt="">
              </div>
              <div class="member-info">
                <h3>Improve</h3>
                <!-- <h4>Developer</h4> -->
                <p>
                  Dapatkan konten
                  pembelajaran
                  (non-akademik) yang dapat
                  menjadi bekal kamu untuk
                  lebih siap menghadapi masa
                  depan, baik di lingkup
                  sekolah/kampus, lingkungan
                  sosial, kehidupan personal,
                  maupun pekerjaan.
                </p>
              </div>
              <!-- <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div> -->
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="{{ url('landingpage/images/mentoring.jpg') }}" alt="">
              </div>
              <div class="member-info">
                <h3>Mentoring</h3>
                <!-- <h4>Support Manager</h4> -->
                <p>
                  Tim Mentor siap membantu
                  kamu untuk berdiskusi
                  mengenai rancangan masa
                  depanmu. Terdiri dari mentor
                  berpengalaman yang telah
                  sukses di bidangnya. Ada
                  Pengusaha, Psikolog,
                  Mahasiswa Berprestasi,
                  Executive Muda, dan
                  sebagainya. Mentor juga
                  dapat membantumu di area
                  personal.
                </p>
              </div>
              <!-- <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#team-->

  <!-- <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-user"></i>
          <h3 class="timer">{{$countAssessments}}</h3>
          <p>orang telah mengenal diri dengan lebih baik lewat Loopinc.id</p>
        </div>
        <!-- <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fa fa-desktop"></i>
          <h3 class="timer">200</h3>
          <p>Modern Websites</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="fa fa-trophy"></i>
          <h3 class="timer">10</h3>
          <p>WINNING AWARDS</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-comment-o"></i>
          <h3>24/7</h3>
          <p>Fast Support</p>
        </div> -->
      <!-- </div>
    </div>
  </section><!--/#features-->

  <!-- <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Pricing Table</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3>Basic</h3>
              <div class="price">
                $9<span>/Month</span>
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3>Standard</h3>
              <div class="price">
                $19<span>/Month</span>
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3>Featured</h3>
              <div class="price">
                $29<span>/Month</span>
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <h3>Professional</h3>
              <div class="price">
                $49<span>/Month</span>
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#pricing-->

  <!-- <section id="twitter" class="parallax">
    <div>
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
              <i class="fa fa-twitter"></i>
              <h4>Themeum</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                </div>
                <div class="item">
                  <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                </div>
                <div class="item">
                  <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <!-- <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Blog Posts</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="images/blog/1.jpg" alt=""></a>
              <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span>
              </div>
              <div class="post-icon">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
              <span class="date">June 26, 2014</span>
              <span class="cetagory">in <strong>Photography</strong></span>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="1"></li>
                  <li data-target="#post-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <a href="#"><img class="img-responsive" src="images/blog/2.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="images/blog/1.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="images/blog/3.jpg" alt=""></a>
                  </div>
                </div>
                <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
              </div>
              <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span>
              </div>
              <div class="post-icon">
                <i class="fa fa-picture-o"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
              <span class="date">June 26, 2014</span>
              <span class="cetagory">in <strong>Photography</strong></span>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="images/blog/3.jpg" alt=""></a>
              <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span>
              </div>
              <div class="post-icon">
                <i class="fa fa-video-camera"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
              <span class="date">June 26, 2014</span>
              <span class="cetagory">in <strong>Photography</strong></span>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
          </div>
        </div>
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
        </div>
      </div>
    </div>
  </section><!--/#blog-->

  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 style="text-align:center">Mengapa <span class="warna-title">loopinc.id</span></h2>
            <p style="text-align:center">Didukung tim Psikolog, Praktisi Pendidikan, dan Praktisi Manajemen Sumber Daya Manusia, loopinc.id
mengintegrasikan berbagai disiplin ilmu, penelitian dan juga teknologi untuk membantu siswa SMP,
SMA/SMK, Mahasiswa, dan Lulusan Universitas untuk lebih rinci dalam mempersiapkan masa depan.

Tidak hanya memberikan rekomendasi, loopinc.id juga menyediakan konten pengembangan diri, dalam
rangka mempersiapkan individu untuk lebih siap menghadapi dunia kerja, beradaptasi di lingkungan sosial,
dan memberikan dukungan pada aspek kehidupan personal.</p>
            <p style="text-align:center">Para mentor loopinc.id tidak hanya kompeten dalam memberikan sudut pandang yang lebih luas tentang
berbagai peluang yang dapat ditindaklanjuti oleh siswa/mahasiswa di masa depan, namun juga mampu
mendampingi siswa/mahasiswa untuk melakukan akselerasi diri untuk menjadi individu yang lebih efektif.</p>
          </div>
        </div>
        <!-- <div class="col-sm-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">User Experiances</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead">Web Design</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="75">75%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Programming</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="60">60%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Fun</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="85">85%</div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="contact">
    <!-- <div id="google-map" class="wow fadeIn" data-latitude="-6.2084385" data-longitude="106.7620422" data-wow-duration="1000ms" data-wow-delay="400ms"></div> -->
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Kontak <span class="warna-title">loopinc.id</span></h2>
            <p><span class="warna-title">loopinc.id</span> terbuka pada saran, komentar, maupun peluang kerja sama dari berbagai pihak.</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" autocomplete="off">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="nama_depan" id="nama_depan" class="form-control" placeholder="Nama Depan" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="nama_belakang" id="nama_belakang" class="form-control" placeholder="Nama Belakang" required="required">
                    </div>
                  </div>
                </div>
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="no_pe" id="no_pe" class="form-control" placeholder="Nomor Telepon" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="kebutuhan" id="kebutuhan" class="form-control" rows="4" placeholder="Pesan" required="required"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" id="kirim_button" class="btn-submit">Kirim</button>
                </div>
              </form>
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>Business Inquiry :</p>
                <ul class="address">
                  <li><p>
                    Senin-Jumat (09.00-18.00 WIB)
                  </p></li>
                  <li><i class="fa fa-phone"></i> <span> Loopinc Call Centre:</span> +62 812-8829-1187  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:hello@loopinc.id"> hello@loopinc.id</a>
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span>
                    <p class="paragraph-address-space">
                      PT. Lingkar Optima Indonesia (loopinc.id)
                    </p>
                    <p class="paragraph-address-space">Infiniti Office - Ruko Permata Regency D/37, Jl. H. Kelik, RT.1/RW.6, Srengseng, Kembangan, Kota Jakarta Barat, DKI Jakarta</p>
                    <p class="paragraph-address-space">11630</p>
                    <p class="paragraph-address-space">(021) 58905002</p>
                  </li>
                  <!-- <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.sitename.com</a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <!-- <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a> -->
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="linkedin" href="https://www.instagram.com/loopinc.id/"><i class="fa fa-instagram"></i></a></li>
            <li><a class="facebook" href="https://www.facebook.com/loopinc.loopinc.5"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="https://twitter.com/LoopincIndo"><i class="fa fa-twitter"></i></a></li>
            <li><a class="facebook" href="https://www.youtube.com/channel/UCezCoDxr5mSd1TS9Vbopz3A?view_as=subscriber"><i class="fa fa-youtube"></i></a></li>
            <!-- <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li> -->
          </ul>
        </div>
      </div>
    </div>
    <a href="https://api.whatsapp.com/send?phone=6281288291187" class="float" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
    </a>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>Copyright &copy; 2019 Loopinc.id</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.themeum.com/">Themeum</a> Modified by <a href="https://www.rootorial.com/">rootorial.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="{!! asset('landingpage/js/jquery.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('landingpage/js/bootstrap.min.js') !!}"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSdxjuCPhzR8BbQe3-crU3qoSC-_ymQBg"></script>
  <script type="text/javascript" src="{!! asset('landingpage/js/jquery.inview.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('landingpage/js/wow.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('landingpage/js/mousescroll.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('landingpage/js/smoothscroll.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('landingpage/js/jquery.countTo.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('landingpage/js/lightbox.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('landingpage/js/main.js') !!}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      (function($){
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
          if (!$(this).next().hasClass('show')) {
          $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
          }
          var $subMenu = $(this).next(".dropdown-menu");
          $subMenu.toggleClass('show');

          $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
          $('.dropdown-submenu .show').removeClass("show");
          });

          return false;
        });
      })(jQuery)
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      // Restricts input for the given textbox to the given inputFilter.
      function setInputFilter(textbox, inputFilter) {
        ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
          textbox.addEventListener(event, function() {
            if (inputFilter(this.value)) {
              this.oldValue = this.value;
              this.oldSelectionStart = this.selectionStart;
              this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
              this.value = this.oldValue;
              this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            }
          });
        });
      }


      // Install input filters.
      // setInputFilter(document.getElementById("intTextBox"), function(value) {
      //   return /^-?\d*$/.test(value); });
      setInputFilter(document.getElementById("no_pe"), function(value) {
        return /^\d*$/.test(value); });
      // setInputFilter(document.getElementById("intLimitTextBox"), function(value) {
      //   return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500); });
      // setInputFilter(document.getElementById("floatTextBox"), function(value) {
      //   return /^-?\d*[.,]?\d*$/.test(value); });
      // setInputFilter(document.getElementById("currencyTextBox"), function(value) {
      //   return /^-?\d*[.,]?\d{0,2}$/.test(value); });
      // setInputFilter(document.getElementById("hexTextBox"), function(value) {
      //   return /^[0-9a-f]*$/i.test(value); });

      $("#kirim_button").on("click", function(e){
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        e.preventDefault();

        var varNamaDep   = $("#nama_depan").val();
        var varNamaBel   = $("#nama_belakang").val();
        var varEmail     = $("#email").val();
        var varNoPe      = $("#no_pe").val();
        var varSub       = $("#subject").val();
        var varKebutuhan = $("#kebutuhan").val();

        if(varNamaDep == ""){
          Swal.fire({
            type: 'info',
            title: 'Nama Depan masih kosong',
            showConfirmButton: true,
            timer: 3000
          });
        }
        else if (varNamaBel == "") {
          Swal.fire({
            type: 'info',
            title: 'Nama Depan masih kosong',
            showConfirmButton: true,
            timer: 3000
          });
        }
        else if (varEmail == "") {
          Swal.fire({
            type: 'info',
            title: 'Email masih kosong',
            showConfirmButton: true,
            timer: 3000
          });
        }
        else if (varNoPe == "") {
          Swal.fire({
            type: 'info',
            title: 'Nomor Telepon masih kosong',
            showConfirmButton: true,
            timer: 3000
          });
        }
        else if (varSub == "") {
          Swal.fire({
            type: 'info',
            title: 'Subject masih kosong',
            showConfirmButton: true,
            timer: 3000
          });
        }
        else if (varKebutuhan == "") {
          Swal.fire({
            type: 'info',
            title: 'Pesan masih kosong',
            showConfirmButton: true,
            timer: 3000
          });
        }
        else{
          try {
            $.ajax({
              type      : "POST",
              url       : "{{ url('main/process/sent') }}",
              async     : true,
              dataType  : "JSON",
              // cache     : true,
              data      : {
                "nama_depan"    : varNamaDep,
                "nama_belakang" : varNamaBel,
                "email"         : varEmail,
                "no_pe"         : varNoPe,
                "subject"       : varSub,
                "kebutuhan"     : varKebutuhan
              },
              success:function(data){
                $("#nama_depan").val("");
                $("#nama_belakang").val("");
                $("#email").val("");
                $("#no_pe").val("");
                $("#subject").val("");
                $("#kebutuhan").val("");

                if(data.response == "success"){
                  Swal.fire({
                    type: 'success',
                    title: 'Tim loopinc.id akan segera menghubungi Anda.',
                    showConfirmButton: true,
                    timer: 3000
                  })
                }

              },
              error:function(data){
                console.log(data);
              }
            });
          } catch (e) {
            console.log(e);
          } finally {

          }
        }
      });
    });
  </script>
</body>
</html>
