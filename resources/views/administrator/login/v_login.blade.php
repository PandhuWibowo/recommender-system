<!DOCTYPE html>
<html lang="en">
<head>
	<title>Loopinc.id</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{!! asset('login/images/icons/favicon.ico') !!}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('login/vendor/bootstrap/css/bootstrap.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('login/fonts/iconic/css/material-design-iconic-font.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('login/vendor/animate/animate.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('login/vendor/css-hamburgers/hamburgers.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('login/vendor/animsition/css/animsition.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('login/vendor/select2/select2.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('login/vendor/daterangepicker/daterangepicker.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('login/css/util.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('login/css/main.css') !!}">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.2/sweetalert2.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" autocomplete="off">
					@if(Session::has('must-login'))
						<p style="color:red">
							{{ Session::get('must-login') }}
						</p>
					@elseif(Session::get('failed-reset-password'))
						<p style="color:red">
							{{ Session::get('failed-reset-password') }}
						</p>
					@elseif(Session::has('reset-password'))
						<p style="color:red">
							{{ Session::get('reset-password') }}
						</p>
					@elseif(Session::has('changed'))
						<p style="color:red">
							{{ Session::get('changed') }}
						</p>
					@elseif(Session::has('logout'))
						<p style="color:red">
							{{ Session::get('logout') }}
						</p>
					@elseif(Session::has("message"))
					<p style="color:blue">
						{{ Session::get('message') }}
					</p>
					@endif
					<span class="login100-form-title p-b-49">
						Loopinc.id
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" required="" value="" name="email" id="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="text-right p-t-8 p-b-31">
						<a href="{{ url('user/pages/forgot/password/sendemail') }}">
							Forgot password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" id="btn-login">
								Sign In
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>


					</div>

					<div class="flex-c-m">
						<a href="#" class="txt2" id="btn_register">
							Sign Up
						</a>
						<!-- <a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						<!-- </a> -->
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Copyright © 2019 Loopinc.id - All right reserved. Modified by <a href="https://www.rootorial.com/" class="txt2" id="btn_register">
								rootorial.com
							</a>
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{!! asset('login/vendor/jquery/jquery-3.2.1.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! asset('login/vendor/animsition/js/animsition.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! asset('login/vendor/bootstrap/js/popper.js') !!}"></script>
	<script src="{!! asset('login/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! asset('login/vendor/select2/select2.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! asset('login/vendor/daterangepicker/moment.min.js') !!}"></script>
	<script src="{!! asset('login/vendor/daterangepicker/daterangepicker.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! asset('login/vendor/countdowntime/countdowntime.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! asset('login/js/main.js') !!}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.2/sweetalert2.min.js" charset="utf-8"></script>

</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
		$("#btn_register").on("click", function(e){
			e.preventDefault();
			window.location = "{{ url('user/pages/register') }}";
		});
    $("#btn-login").on("click", function(e){
			e.preventDefault();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      var txtEmail    = $("#email").val();
      var txtPassword = $("#password").val();

      try {
        if(txtEmail == ""){
          swal({
            type    : "warning",
            title   : "Empty",
            text    : "Email was still empty",
            timer   : 3000
          });
        }
        else if(txtPassword == ""){
          swal({
            type    : "warning",
            title   : "Password",
            text    : "Password was still empty",
            timer   : 3000
          });
        }
        else{
          $.ajax({
            type      : "POST",
            url       : "{{ url('backend/pages/auth/process') }}",
            async     : true,
            dataType  : "JSON",
            data      : {
              email   : txtEmail,
              password: txtPassword
            },
            success:function(data){
							// console.log(data);
              if(data.null){
                swal({
                  type    : "error",
                  title   : "Empty",
                  text    : data.null,
                  timer   : 3000
                })
              }else if(data.error){
                swal({
                  type    : "error",
                  title   : "Incorrect",
                  text    : data.error,
                  timer   : 3000
                });
              }
              else if(data.response == "success"){
                // console.log(data.level);
                switch (data.level) {
                  case "Super Admin": window.location = "{{ url('backend/pages/home')}}";break;
                  case "Participant": window.location = "{{ url('user/pages/home') }}";break;
                  default:swal({
                    type    : "error",
                    title   : "Error",
                    text    : "Oops, something is wrong",
                    timer   : 3000
                  });break;
                }
              }

							// console.log(data);
            },
            error:function(data){
              console.log(data);
            }
          });
        }
      } catch (e) {
        alert(e);
      } finally {

      }
    });
  });
</script>
