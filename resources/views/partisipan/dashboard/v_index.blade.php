<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Loopinc.id</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('images/icon.png') !!}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/bootstrap.min.css') !!}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/font-awesome.min.css') !!}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/owl.carousel.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/owl.theme.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/owl.transitions.css') !!}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/animate.css') !!}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/normalize.css') !!}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/meanmenu.min.css') !!}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/main.css') !!}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/educate-custon-icon.css') !!}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/morrisjs/morris.css') !!}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/scrollbar/jquery.mCustomScrollbar.min.css') !!}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/metisMenu/metisMenu.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/metisMenu/metisMenu-vertical.css') !!}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/calendar/fullcalendar.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/calendar/fullcalendar.print.min.css') !!}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/style.css') !!}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/responsive.css') !!}">
    <!-- modernizr JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/vendor/modernizr-2.8.3.min.js') !!}"></script>
    <style media="screen">
      .btn {
         border-radius: 0px !important;
      }
    </style>

    <style>
      .position-img{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
      }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

  @include('administrator.dashboard.include.v_sidebar')
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{ url('user/pages/home') }}"><img class="main-logo" src="{!! asset('assets/assets_admin/img/logo/logo.png') !!}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                    													<i class="educate-icon educate-nav"></i>
                    												</button>
                                        </div>
                                    </div>
                                    @include('administrator.dashboard.include.v_menu-navbar')
                                    @include('administrator.dashboard.include.v_setting-navbar')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('administrator.dashboard.include.v_menu-mobile')
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <!-- <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <!-- income order visit user Start -->
        <!-- <div class="income-order-visit-user-area">
            <div class="container-fluid">
                <div class="row"> -->
                    <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="income-dashone-total reso-mg-b-30">
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-edu-rate">
                                        <h3><span>$</span><span class="counter">7500</span></h3>
                                    </div>
                                    <div class="price-graph">
                                        <span id="sparkline1"></span>
                                    </div>
                                </div>
                                <div class="income-range">
                                    <p>Total Income</p>
                                    <span class="income-percentange bg-green"><span class="counter">95</span>% <i class="fa fa-bolt"></i>
                                    </span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="income-dashone-total">
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-edu-rate">
                                        <h3><span class="counter">640</span></h3>
                                    </div>
                                    <div class="price-graph">
                                        <span id="sparkline6"></span>
                                    </div>
                                </div>
                                <div class="income-range order-cl">
                                    <p>New Adminsion</p>
                                    <span class="income-percentange bg-red"><span class="counter">65</span>% <i class="fa fa-level-up"></i>
                                    </span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="income-dashone-total res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-edu-rate">
                                        <h3><span class="counter">4500</span></h3>
                                    </div>
                                    <div class="price-graph">
                                        <span id="sparkline2"></span>
                                    </div>
                                </div>
                                <div class="income-range visitor-cl">
                                    <p>New Visitor</p>
                                    <span class="income-percentange bg-blue"><span class="counter">75</span>% <i class="fa fa-level-up"></i>
                                    </span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="income-dashone-total res-mg-t-30 dk-res-t-pro-30">
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-edu-rate">
                                        <h3><span class="counter">235400</span></h3>
                                    </div>
                                    <div class="price-graph">
                                        <span id="sparkline5"></span>
                                    </div>
                                </div>
                                <div class="income-range low-value-cl">
                                    <p>In first month</p>
                                    <span class="income-percentange bg-purple"><span class="counter">35</span>% <i class="fa fa-level-down"></i>
                                    </span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div> -->
                <!-- </div>
            </div>
        </div> -->
        <!-- income order visit user End -->
        <div class="dashtwo-order-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="analytics-edu-wrap ant-res-b-30 reso-mg-b-30">
                            <img src="{!! asset('images/icon.png') !!}" class="position-img" alt="Loopinc.id">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-copyright-area" style="text-align: center;bottom:0;width: 100%;left:0;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                          @include('administrator.dashboard.include.v_copyright')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- jquery
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/vendor/jquery-1.12.4.min.js') !!}"></script>
        <!-- bootstrap JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/bootstrap.min.js') !!}"></script>
        <!-- wow JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/wow.min.js') !!}"></script>
        <!-- price-slider JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/jquery-price-slider.js') !!}"></script>
        <!-- meanmenu JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/jquery.meanmenu.js') !!}"></script>
        <!-- owl.carousel JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/owl.carousel.min.js') !!}"></script>
        <!-- sticky JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/jquery.sticky.js') !!}"></script>
        <!-- scrollUp JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/jquery.scrollUp.min.js') !!}"></script>
        <!-- counterup JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/counterup/jquery.counterup.min.js') !!}"></script>
        <script src="{!! asset('assets/assets_admin/js/counterup/waypoints.min.js') !!}"></script>
        <script src="{!! asset('assets/assets_admin/js/counterup/counterup-active.js') !!}"></script>
        <!-- mCustomScrollbar JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') !!}"></script>
        <script src="{!! asset('assets/assets_admin/js/scrollbar/mCustomScrollbar-active.js') !!}"></script>
        <!-- metisMenu JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/metisMenu/metisMenu.min.js') !!}"></script>
        <script src="{!! asset('assets/assets_admin/js/metisMenu/metisMenu-active.js') !!}"></script>
        <!-- sparkline JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/sparkline/jquery.sparkline.min.js') !!}"></script>
        <script src="{!! asset('assets/assets_admin/js/sparkline/sparkline-active.js') !!}"></script>
        <!-- Chart JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/chart/jquery.peity.min.js') !!}"></script>
        <script src="{!! asset('assets/assets_admin/js/chart/peity-active.js') !!}"></script>
        <!-- calendar JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/calendar/moment.min.js') !!}"></script>
        <script src="{!! asset('assets/assets_admin/js/calendar/fullcalendar.min.js') !!}"></script>
        <script src="{!! asset('assets/assets_admin/js/calendar/fullcalendar-active.js') !!}"></script>
        <!-- tab JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/tab.js') !!}"></script>
        <!-- plugins JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/plugins.js') !!}"></script>
        <!-- main JS
    		============================================ -->
        <script src="{!! asset('assets/assets_admin/js/main.js') !!}"></script>
        <!-- tawk chat JS
    		============================================ -->
        <!-- <script src="js/tawk-chat.js"></script> -->
    </body>

    </html>
