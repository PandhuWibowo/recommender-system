
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online Assesment</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/form/all-type-forms.css') !!}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/style.css') !!}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/responsive.css') !!}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.2/sweetalert2.min.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/vendor/modernizr-2.8.3.min.js') !!}"></script>
    @include("items.meta")
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
                                            <li><span class="bread-blod">Administrator Profile</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @if(Session::has('success'))
                              <div class="alert alert-info alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh yeaahh!</strong> {{Session::get('success')}}
                              </div>
                            @elseif(Session::has('error'))
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <strong>Oh snap!</strong> {{Session::get('error')}}
                              </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                @if($detailAdministrator->image != "")
                                  <!-- Masih belum disetting -->
                                  <img src="{!! asset('images/images-admin/'.$detailAdministrator->image) !!}" alt="{{$detailAdministrator->image}}" />
                                @else
                                  <img src="{!! asset('assets/assets_admin/img/profile/pp.png') !!}" alt="{{$detailAdministrator->image}}" />
                                @endif
                            </div>

                              <div class="profile-details-hr">
                                  <div class="row">
                                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                          <div class="address-hr">
                                              <p><b>Full Name</b><br />
                                                @if($detailAdministrator->firstname != "" && $detailAdministrator->lastname != "")
                                                  {{$detailAdministrator->firstname}} {{$detailAdministrator->lastname}}
                                                @else
                                                  <span class="badge"><i class="fa fa-exclamation"></i> Full name is empty</span>
                                                @endif
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                          <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                              <p><b>Username</b><br />
                                                @if($detailAdministrator->username != "")
                                                  {{$detailAdministrator->username}}
                                                @else
                                                  <span class="badge"><i class="fa fa-exclamation"></i> Username is empty</span>
                                                @endif
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                          <div class="address-hr">
                                              <p><b>Email Account</b><br />
                                                @if($detailAdministrator->email != "" && $detailAdministrator->active == 1)
                                                  {{$detailAdministrator->email}}
                                                @elseif($detailAdministrator->email != "" && $detailAdministrator->active == 0)
                                                  <span class="badge"><i class="fa fa-exclamation"></i> Verification the email before</span>
                                                @else
                                                  <span class="badge"><i class="fa fa-exclamation"></i> Email is empty</span>
                                                @endif
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                          <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                              <p><b>Phone</b><br />
                                                @if($detailAdministrator->phone != "")
                                                  {{$detailAdministrator->phone}}
                                                @else
                                                  <span class="badge"><i class="fa fa-exclamation"></i> Phone is empty</span>
                                                @endif
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-lg-12">
                                          <div class="address-hr">
                                              <p><b>Address</b><br />
                                                @if($detailAdministrator->address != "")
                                                  {{$detailAdministrator->address}}
                                                @else
                                                  <span class="badge"><i class="fa fa-exclamation"></i> Address is empty</span>
                                                @endif
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-lg-12">
                                          <div class="address-hr">
                                              <p><b>Delete Account</b></p>
                                              <button id="btn_delete" data-id="{{Crypt::encrypt($detailAdministrator->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                          </div>
                                      </div>
                                  </div>
                                  @include("administrator.dashboard.include.v_sosmed")
                              </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <!-- <li class="active"><a href="#description">Activity</a></li> -->
                                <li class="active"><a href="#reviews"> Biography</a></li>
                                <li><a href="#INFORMATION">Update Details</a></li>
                            </ul>

                            <div id="myTabContent" class="tab-content custom-product-edit">

                                <div class="product-tab-list tab-pane fade active in" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Full Name</b><br />
                                                              @if($detailAdministrator->firstname != "" && $detailAdministrator->lastname != "")
                                                                {{$detailAdministrator->firstname}} {{$detailAdministrator->lastname}}
                                                              @else
                                                                <span class="badge"><i class="fa fa-exclamation"></i> Full name is empty</span>
                                                              @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Phone</b><br />
                                                              @if($detailAdministrator->phone != "")
                                                                {{$detailAdministrator->phone}}
                                                              @else
                                                                <span class="badge"><i class="fa fa-exclamation"></i> Phone is empty</span>
                                                              @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Email</b><br />
                                                              @if($detailAdministrator->email != "" && $detailAdministrator->active == 1)
                                                                {{$detailAdministrator->email}}
                                                              @elseif($detailAdministrator->email != "" && $detailAdministrator->active == 0)
                                                                <span class="badge"><i class="fa fa-exclamation"></i> Verification the email before</span>
                                                              @else
                                                                <span class="badge"><i class="fa fa-exclamation"></i> Email is empty</span>
                                                              @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Username</b><br />
                                                              @if($detailAdministrator->username != "")
                                                                {{$detailAdministrator->username}}
                                                              @else
                                                                <span class="badge"><i class="fa fa-exclamation"></i> Username is empty</span>
                                                              @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="content-profile">
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                                dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                                dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                                dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Skill Set</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-skill">
                                                            <h2>Java</h2>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 90%;" class="progress-bar progress-yellow"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-skill">
                                                            <h2>Php</h2>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 80%;" class="progress-bar progress-green"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-skill">
                                                            <h2>Apps</h2>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 70%;" class="progress-bar progress-blue"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-skill">
                                                            <h2>C#</h2>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 60%;" class="progress-bar progress-red"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Address</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ex-pro">
                                                          @if($detailAdministrator->address != "")
                                                            {{$detailAdministrator->address}}
                                                          @else
                                                            <span class="badge"><i class="fa fa-exclamation"></i> Address is empty</span>
                                                          @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Level</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ex-pro">
                                                            @if($detailAdministrator->level != "")
                                                              {{$detailAdministrator->level}}
                                                            @else
                                                              <span class="badge"><i class="fa fa-exclamation"></i> Level is empty</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Join</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ex-pro">
                                                          @if($detailAdministrator->created_at != "")
                                                            {{Carbon::parse($detailAdministrator->created_at)->formatLocalized('%A, %d %B %Y')}} - {{$detailAdministrator->created_at->diffForHumans()}}
                                                          @else
                                                            <span class="badge"><i class="fa fa-question"></i></span>
                                                          @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Status</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ex-pro">
                                                          @if($detailAdministrator->active != "")
                                                            Active
                                                          @else
                                                            <span class="badge"><i class="fa fa-exclamation"></i> Non Active</span>
                                                          @endif
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form class="" action="{{ url('backend/pages/administrator/update') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                                                  {{ csrf_field() }}
                                                  {{ method_field('PUT') }}
                                                  <div class="row">
                                                      <div class="col-lg-6">
                                                          <div class="form-group">
                                                              <input name="id_admin" type="hidden" readonly class="form-control" placeholder="Id" value="{{Crypt::encrypt($detailAdministrator->id)}}">
                                                          </div>
                                                          <div class="form-group">
                                                              <input name="first_name" type="text" class="form-control" placeholder="First Name" value="{{$detailAdministrator->firstname}}">
                                                          </div>
                                                          <div class="form-group">
                                                              <input name="last_name" type="text" class="form-control" placeholder="Last Name" value="{{$detailAdministrator->lastname}}">
                                                          </div>
                                                          <div class="form-group">
                                                              <input name="nick_name" type="text" class="form-control" placeholder="Nick Name" value="{{$detailAdministrator->nickname}}">
                                                          </div>
                                                          <div class="form-group">
                                                              <input name="address" type="text" class="form-control" placeholder="Address" value="{{$detailAdministrator->address}}">
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input name="email" type="email" class="form-control" placeholder="Email" value="{{$detailAdministrator->email}}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="username" type="text" class="form-control" placeholder="Username" value="{{$detailAdministrator->username}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="phone" type="text" class="form-control" placeholder="Phone" value="{{$detailAdministrator->phone}}">
                                                        </div>
                                                        <div class="form-group">
                                                          <input name="level" type="text" class="form-control" placeholder="Level" value="{{$detailAdministrator->level}}" readonly>
                                                        </div>
                                                        <div class="file-upload-inner ts-forms">
                                                            <div class="input prepend-big-btn">
                                                                <!-- <label class="icon-right" for="prepend-big-btn">
                                                                  <i class="fa fa-download"></i>
                                                                </label> -->
                                                                <div class="file-button">
                                                                    Browse
                                                                    <input name="image" type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                                </div>
                                                                <input type="text" id="prepend-big-btn" placeholder="no file selected" value="{{$detailAdministrator->image}}">
                                                            </div>
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <br />
                                                  <div class="row">
                                                      <div class="col-lg-12">
                                                          <div class="payment-adress mg-t-15">
                                                              <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Save</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.2/sweetalert2.min.js" charset="utf-8"></script>
</body>

</html>

<script type="text/javascript">
  $(document).ready(function(){
    $("#btn_delete").on("click", function(){
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      var varId     = $(this).data("id");
      try {
        swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          $.ajax({
            type      : "DELETE",
            url       : "{{ url('backend/pages/administrator/delete') }}",
            async     : true,
            dataType  : "JSON",
            data      : {
              id      : varId
            },
            success:function(data){
              // console.log(data);
              if(data.response == "success"){
                swal(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                ).then(function(){
                  window.location = "{{ url('backend/pages/administrator') }}";
                });
              }

            },
            error:function(data){
              console.log(data);
            }
          });
        })
      } catch (e) {
        console.log(e);
      } finally {

      }
    })
  })
</script>
