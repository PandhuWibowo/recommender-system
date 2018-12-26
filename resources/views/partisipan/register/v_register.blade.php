<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico') !!}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
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
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/main.css') !!}">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/vendor/modernizr-2.8.3.min.js') !!}"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3>Registration</h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form id="loginForm" method="POST" autocomplete="off">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" autofocus="on">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input class="form-control" name="username" id="username" placeholder="Username">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Password</label>
                                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Password Confirmation">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Phone</label>
                                    <input class="form-control" name="phone" id="phone" placeholder="Phone">
                                </div>

                            </div>
                            <div class="text-center">
                                <button id="btn_register" class="btn btn-success loginbtn">Register</button>
                                <!-- <button class="btn btn-default">Cancel</button> -->
                            </div>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a> Modified by <a href="http://rootorial.com/">Pandhu Wibowo</a></p>
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
    <!-- tab JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/tab.js') !!}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/icheck/icheck.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/icheck/icheck-active.js') !!}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/plugins.js') !!}"></script>
    <!-- main JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/main.js') !!}"></script>
    <!-- tawk chat JS
		============================================ -->
    <!-- <script src="js/tawk-chat.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js" charset="utf-8"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#btn_register").on("click", function(e){
          e.preventDefault();
          var varFirstname        = $("#firstname").val();
          var varLastname         = $("#lastname").val();
          var varUsername         = $("#username").val();
          var varPassword         = $("#password").val();
          var varPasswordConfirm  = $("#confirm_password").val();
          var varEmail            = $("#email").val();
          var varPhone            = $("#phone").val();

          try {
            if(varFirstname == ""){
              swal({
                type      : "info",
                title     : "Warning",
                text      : "Firstname is required",
                timer     : 3000
              });
            }
            else if(varLastname == ""){
              swal({
                type      : "info",
                title     : "Warning",
                text      : "Lastname is required",
                timer     : 3000
              });
            }
            else if(varUsername == ""){
              swal({
                type      : "info",
                title     : "Warning",
                text      : "Username is required",
                timer     : 3000
              });
            }
            else if(varPassword == ""){
              swal({
                type      : "info",
                title     : "Warning",
                text      : "Password is required",
                timer     : 3000
              });
            }
            else if(varPasswordConfirm == ""){
              swal({
                type      : "info",
                title     : "Warning",
                text      : "Password Confirmation is required",
                timer     : 3000
              });
            }
            else if(varEmail == ""){
              swal({
                type      : "info",
                title     : "Warning",
                text      : "Email is required",
                timer     : 3000
              });
            }
            else if(varPhone == ""){
              swal({
                type      : "info",
                title     : "Warning",
                text      : "Phone is required",
                timer     : 3000
              });
            }else{
              if(varPassword == varPasswordConfirm){
                swal({
                  type      : "info",
                  title     : "Warning",
                  text      : "Password doesn't match",
                  timer     : 3000
                });
              }else{
                $.ajax({
                  type      : "POST",
                  url       : "{{ url('user/pages/register/store') }}",
                  async     : true,
                  dataType  : "JSON",
                  data      : {
                    email             : varEmail,
                    username          : varUsername,
                    password          : varPassword,
                    confirm_password  : varPasswordConfirm,
                    firstname         : varFirstname,
                    lastname          : varLastname,
                    phone             : varPhone
                  },
                  success:function(data){

                  },
                  error:function(data){
                    console.log(data);
                  }
                });
              }
            }
          } catch (e) {
            console.log(e);
          } finally {

          }
        });
      });
    </script>
</body>

</html>
