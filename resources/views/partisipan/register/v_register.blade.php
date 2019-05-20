<!DOCTYPE html>
<html lang="en">
<head>
	<title>Loopinc.id</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="shortcut icon" type="image/x-icon" href="{!! asset('images/icon.png') !!}">

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

		<style media="screen">
		.loading {
			position: fixed;
			z-index: 999;
			height: 2em;
			width: 2em;
			overflow: visible;
			margin: auto;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
		}

		/* Transparent Overlay */
		.loading:before {
			content: '';
			display: block;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0,0,0,0.3);
		}

		/* :not(:required) hides these rules from IE9 and below */
		.loading:not(:required) {
			/* hide "loading..." text */
			font: 0/0 a;
			color: transparent;
			text-shadow: none;
			background-color: transparent;
			border: 0;
		}

		.loading:not(:required):after {
			content: '';
			display: block;
			font-size: 10px;
			width: 1em;
			height: 1em;
			margin-top: -0.5em;
			-webkit-animation: spinner 1500ms infinite linear;
			-moz-animation: spinner 1500ms infinite linear;
			-ms-animation: spinner 1500ms infinite linear;
			-o-animation: spinner 1500ms infinite linear;
			animation: spinner 1500ms infinite linear;
			border-radius: 0.5em;
			-webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
			box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
		}

		/* Animation */

		@-webkit-keyframes spinner {
			0% {
				-webkit-transform: rotate(0deg);
				-moz-transform: rotate(0deg);
				-ms-transform: rotate(0deg);
				-o-transform: rotate(0deg);
				transform: rotate(0deg);
			}
			100% {
				-webkit-transform: rotate(360deg);
				-moz-transform: rotate(360deg);
				-ms-transform: rotate(360deg);
				-o-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}
		@-moz-keyframes spinner {
			0% {
				-webkit-transform: rotate(0deg);
				-moz-transform: rotate(0deg);
				-ms-transform: rotate(0deg);
				-o-transform: rotate(0deg);
				transform: rotate(0deg);
			}
			100% {
				-webkit-transform: rotate(360deg);
				-moz-transform: rotate(360deg);
				-ms-transform: rotate(360deg);
				-o-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}
		@-o-keyframes spinner {
			0% {
				-webkit-transform: rotate(0deg);
				-moz-transform: rotate(0deg);
				-ms-transform: rotate(0deg);
				-o-transform: rotate(0deg);
				transform: rotate(0deg);
			}
			100% {
				-webkit-transform: rotate(360deg);
				-moz-transform: rotate(360deg);
				-ms-transform: rotate(360deg);
				-o-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}
		@keyframes spinner {
			0% {
				-webkit-transform: rotate(0deg);
				-moz-transform: rotate(0deg);
				-ms-transform: rotate(0deg);
				-o-transform: rotate(0deg);
				transform: rotate(0deg);
			}
			100% {
				-webkit-transform: rotate(360deg);
				-moz-transform: rotate(360deg);
				-ms-transform: rotate(360deg);
				-o-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}
		</style>

</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" autocomplete="off">

					<span class="login100-form-title p-b-49">
						Sign Up Loopinc.id
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Firstname is required">
						<span class="label-input100">First Name</span>
						<input class="input100" type="text" required="" value="" name="firstname" id="firstname" placeholder="Type your firstname">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Lastname is required">
						<span class="label-input100">Last Name</span>
						<input class="input100" type="text" required="" value="" name="lastname" id="lastname" placeholder="Type your lastname">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" required="" value="" name="email" id="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Phone is required">
						<span class="label-input100">Phone</span>
						<input class="input100" type="text" required="" value="" name="phone" id="phone" placeholder="Type your phone">
						<span class="focus-input100" data-symbol="&#xf2b9;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Confirmation Password is required">
						<span class="label-input100">Confirm</span>
						<input class="input100" type="password" title="Please enter your password" placeholder="******" required="" value="" name="confirm_password" id="confirm_password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="text-right p-t-8 p-b-31">

					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" id="btn_register">
								Sign Up
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">


					</div>

					<div class="flex-c-m">
						<a href="#" class="txt2" id="btn_signin">
							Sign In
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

	<div class="loading" style="display:none;">Loading&#8230;</div>


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
	$('body').on('keydown', '#firstname, #lastname', function(e) {
		var self = $(this)
			, form = self.parents('form:eq(0)')
			, focusable
			, next
			;
		if (e.keyCode == 13) {
				focusable = form.find('input,a,select,button,textarea').filter(':visible');
				next = focusable.eq(focusable.index(this)+1);
				if (next.length) {
						next.focus();
				} else {
						form.submit();
				}
				return false;
		}
	});

	//TODO: Allow letters only in textbox : firstname, lastname, nickname
	$(function() {
		$('#firstname, #lastname').keydown(function(e) {
			if (e.shiftKey || e.ctrlKey || e.altKey) {
				e.preventDefault();
			} else {
				var key = e.keyCode;
				if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
					e.preventDefault();
				}
			}
		});
	});

	//TODO: Allow numbers only in textbox such as phone
	$(document).ready(function(){
		$('input[name="phone"]').keyup(function(e)
															{
			if (/\D/g.test(this.value))
			{
				// Filter non-digits from input value.
				this.value = this.value.replace(/\D/g, '');
			}
		});
	});

	//TODO: Giving capital in first word for tenses
	function ucfirst(str,force){
		str=force ? str.toLowerCase() : str;
		return str.replace(/(\b)([a-zA-Z])/,
			 function(firstLetter){
					return   firstLetter.toUpperCase();
			 });
	 }

	 //TODO: Action is here - Process call ucfirst methode
	 $('#firstname, #lastname').keyup(function(evt){

			// force: true to lower case all letter except first
			var cp_value= ucfirst($(this).val(),true) ;

			// to capitalize all words
			//var cp_value= ucwords($(this).val(),true) ;


			$(this).val(cp_value );

	 });
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#btn_signin").on("click", function(e){
			e.preventDefault();
			window.location="{{ url('backend/pages/signin') }}";
		});

		$("#btn_register").on("click", function(e){
			e.preventDefault();
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			var varFirstname        = $("#firstname").val();
			var varLastname         = $("#lastname").val();
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
				else{
					if(varPassword != varPasswordConfirm){
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
								email                 : varEmail,
								password              : varPassword,
								confirm_password      : varPasswordConfirm,
								firstname             : varFirstname,
								lastname              : varLastname,
								phone                 : varPhone
							},
							success:function(data){
								if(data.response == "success"){
									$("#firstname").val("");
									$("#lastname").val("");
									$("#password").val("");
									$("#confirm_password").val("");
									$("#email").val("");
									$("#phone").val("");

									swal({
										type      : "success",
										title     : "Saved",
										text      : "Please check your email first for activation your account (Inbox or Spam)",
										timer     : 3000
									}).then(function(){
										window.location = "{{ url('user/pages/register') }}";
									});
								}
								else if(data.response == "failed"){
									swal({
										type      : "error",
										title     : "Error",
										text      : data.errors,
										timer     : 3000
									});
								}
							},
							error:function(data){
								console.log(data);
							},
							beforeSend: function(){
									// Code to display spinner
									$('.loading').show();
							},
							complete: function(){
									// Code to hide spinner.
									$('.loading').hide();
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
