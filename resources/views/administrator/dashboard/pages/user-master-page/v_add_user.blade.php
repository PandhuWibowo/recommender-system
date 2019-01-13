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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/form/all-type-forms.css') !!}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/educate-custon-icon.css') !!}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/morrisjs/morris.css') !!}">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/dropzone/dropzone.css') !!}">
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
</head>

<body>
      <!--[if lt IE 8]>
		  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	    <![endif]-->
    @include("administrator.dashboard.include.v_sidebar")
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="{!! asset('assets/assets_admin/img/logo/logo.png') !!}" alt="" /></a>
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
                                            <li><span class="bread-blod">Add Administrator</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @if(Session::has('success'))
                              <div class="alert alert-primary alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh yeaahh!</strong> {{Session::get('success')}}
                              </div>
                            @elseif(Session::has('error'))
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh snap!</strong> {{Session::get('error')}}
                              </div>
                            @endif

                            @if($errors->has('firstname'))
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh snap!</strong> {{$errors->first('firstname')}}
                              </div>
                            @endif
                            @if($errors->has('lastname'))
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh snap!</strong> {{$errors->first('lastname')}}
                              </div>
                            @endif
                            @if($errors->has('email'))
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh snap!</strong> {{$errors->first('email')}}
                              </div>
                            @endif
                            @if($errors->has('username'))
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh snap!</strong> {{$errors->first('username')}}
                              </div>
                            @endif
                            @if($errors->has('phone'))
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh snap!</strong> {{$errors->first('phone')}}
                              </div>
                            @endif
                            @if($errors->has('level'))
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh snap!</strong> {{$errors->first('level')}}
                              </div>
                            @endif
                            @if($errors->has('address'))
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh snap!</strong> {{$errors->first('address')}}
                              </div>
                            @endif
                            @if($errors->has('password'))
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh snap!</strong> {{$errors->first('password')}}
                              </div>
                            @endif
                            @if($errors->has('confirm_password'))
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh snap!</strong> {{$errors->first('confirm_password')}}
                              </div>
                            @endif

                            <!-- @if(Session::has('success'))
                              <div class="alert alert-info alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh yeaahh!</strong> {{Session::get('success')}}
                              </div>
                            @elseif(Session::has('error'))
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh snap!</strong> {{Session::get('error')}}
                              </div>
                            @endif -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Biography</a></li>
                                <!-- <li><a href="#reviews"> Account Information</a></li>
                                <li><a href="#INFORMATION">Social Information</a></li> -->
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="{{ url('backend/pages/users/store') }}" autocomplete="off" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload" method="POST" enctype="multipart/form-data">
                                                      {{ csrf_field() }}
                                                      {{ method_field('POST') }}
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="firstname" type="text" class="form-control" placeholder="First Name" required />
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="lastname" type="text" class="form-control" placeholder="Last Name" required />
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="nickname" type="text" class="form-control" placeholder="Nick Name (Options)" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="email" type="email" class="form-control" placeholder="Email" required />
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="username" type="text" class="form-control" maxlength="20" placeholder="Username" required />
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="phone" type="text" class="form-control" placeholder="Phone" maxlength="15" required />
                                                                </div>

                                                                <!-- <div class="form-group">
                                                                    <input name="finish" id="finish" type="text" class="form-control" placeholder="Date of Birth">
                                                                </div> -->
                                                                <!-- <div class="form-group">
                                                                    <input name="postcode" id="postcode" type="text" class="form-control" placeholder="Postcode">
                                                                </div> -->

                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="file-upload-inner ts-forms">
                                                                    <div class="input prepend-big-btn">
                                                                        <!-- <label class="icon-right" for="prepend-big-btn">
                                                                          <i class="fa fa-download"></i>
                                                                        </label> -->
                                                                        <div class="file-button">
                                                                            Browse
                                                                            <input name="image" type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                                        </div>
                                                                        <input type="text" id="prepend-big-btn" placeholder="no file selected" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="level" type="text" class="form-control" placeholder="Level" value="Participant" required readonly/>
                                                                </div>
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="address" placeholder="Address"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="password" id="password" type="password" class="form-control" placeholder="Password" required />
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="confirm_password" id="confirm_password" type="password" class="form-control" placeholder="Confirm Password" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" id="btn-save" class="btn btn-primary waves-effect waves-light">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <form id="acount-infor" action="#" class="acount-infor">
                                                            <div class="devit-card-custom">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="phoneno" type="number" class="form-control" placeholder="Phone">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="confarmpassword" type="password" class="form-control" placeholder="Confirm Password">
                                                                </div>
                                                                <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                        												<div class="row">
                        													<div class="col-lg-12">
                        														<div class="devit-card-custom">
                        															<div class="form-group">
                        																<input type="url" class="form-control" placeholder="Facebook URL">
                        															</div>
                        															<div class="form-group">
                        																<input type="url" class="form-control" placeholder="Twitter URL">
                        															</div>
                        															<div class="form-group">
                        																<input type="url" class="form-control" placeholder="Google Plus">
                        															</div>
                        															<div class="form-group">
                        																<input type="url" class="form-control" placeholder="Linkedin URL">
                        															</div>
                        															<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                        														</div>
                        													</div>
                        												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
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
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/scrollbar/mCustomScrollbar-active.js') !!}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/metisMenu/metisMenu.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/metisMenu/metisMenu-active.js') !!}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/sparkline/jquery.sparkline.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/sparkline/jquery.charts-sparkline.js') !!}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/calendar/moment.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/calendar/fullcalendar.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/calendar/fullcalendar-active.js') !!}"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/jquery.maskedinput.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/masking-active.js') !!}"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/datepicker/jquery-ui.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/datepicker/datepicker-active.js') !!}"></script>
    <!-- form validate JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/form-validation/jquery.form.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/form-validation/jquery.validate.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/form-validation/form-active.js') !!}"></script>
    <!-- dropzone JS
		============================================ -->
    <!-- <script src="{!! asset('assets/assets_admin/js/dropzone/dropzone.js') !!}"></script> -->
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

<script type="text/javascript">
  // $(document).ready(function(){
  //   $("#btn-save").on('click', function(e){
  //     e.preventDefault();
  //     var varPassword         = $("#password").val();
  //     var varConfirmPassword  = $("#confirm_password").val();
  //
  //     alert(varPassword);
  //     alert(varConfirmPassword);
  //   })
  // });
</script>
