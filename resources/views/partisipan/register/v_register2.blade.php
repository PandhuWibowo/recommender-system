<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Loopinc.id</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="shortcut icon" type="image/x-icon" href="{!! asset('images/icon.png') !!}">

	<link rel="stylesheet" type="text/css" href="{!! asset('continueregister/css/montserrat-font.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('continueregister/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') !!}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{!! asset('continueregister/css/style.css') !!}"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

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
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="post" id="myform" autocomplete="off">
				<div class="form-left">
					<h2>Registration</h2>
          <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="firstname" id="firstname" class="input-text" class="alphaonly" placeholder="First Name" required maxlength="100">
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="lastname" id="lastname" class="input-text" class="alphaonly" placeholder="Last Name" required maxlength="100">
						</div>
					</div>
          <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="username" id="username" class="input-text" placeholder="Username" required maxlength="50">
						</div>
            <div class="form-row form-row-2">
							<input type="text" name="email" id="email" class="input-text" placeholder="Email" required maxlength="150" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
						</div>
					</div>

					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="nickname" id="nickname" class="input-text alphaonly" placeholder="Nick Name" required maxlength="100">
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="phone" id="phone" class="input-text" placeholder="Phone" required maxlength="15">
						</div>
					</div>
          <div class="form-group">
						<div class="form-row form-row-1">
							<input type="password" name="password" id="password" class="input-text" placeholder="Password" required maxlength="20">
						</div>
						<div class="form-row form-row-2">
							<input type="password" name="confirm_password" id="confirm_password" class="input-text" placeholder="Confirm Password" required maxlength="20">
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="alamat" class="company" id="alamat" placeholder="Address" required maxlength="300">
					</div>

					<div class="form-row">
						<select name="gender" id="gender">
								<option value="" selected disabled>Select Gender Please</option>
						    <option class="option" value="Pria">Men</option>
						    <option class="option" value="Wanita">Women</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>

					<div class="form-row">
						<input type="text" name="dt" class="company datepicker" id="dt" placeholder="Birth date" required  />
          </div>
					<div class="form-row">
						<input type="text" name="sc" class="company" id="sc" placeholder="School/College" required maxlength="50" />
          </div>
					<div class="form-row">
						<input type="text" name="ks" class="company" id="ks" placeholder="Class/Semester - Example : Kelas 7/Semester 2 (Tulis satu saja)" required maxlength="50"/>
					</div>

					<div class="form-row">
						<input type="text" name="hobby" class="company" id="hobby" placeholder="Hobby" required maxlength="100">
					</div>
				</div>
				<div class="form-right">
					<h2>Details</h2>
					<div class="form-row">
						<select name="social_media" id="social_media">
						    <option value="" selected disabled>Social Media</option>
						    <option value="Instagram">Instagram</option>
						    <option value="Facebook">Facebook</option>
						    <option value="Twitter">Twitter</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row" id="isi_sosmed">
					</div>

					<div class="form-row">
						<input type="text" name="organisasi" class="additional" id="organisasi" placeholder="Organization" required maxlength="150">
					</div>

					<div class="form-row">
						<input type="text" name="ciri_khas" class="additional" id="ciri_khas" placeholder="Speciality" required maxlength="80">
					</div>

					<div class="form-row">
						<input type="text" name="citacita" class="additional" id="citacita" placeholder="Goals" required maxlength="80">
					</div>

					<div class="form-row">

							<select name="ambil_paket" id="ambil_paket">
							    <option value="" selected disabled>Choose Package</option>
							    <option value="Starter Package">Starter Package</option>
							    <option value="Proactive Package">Proactive Package</option>
							    <option value="Bright Package">Bright Package</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>

					</div>

					<!-- <div class="form-checkbox">
						<label class="container"><p>I've been filling out the form completely and correctly</p>
						  	<input type="checkbox" name="checkbox" required>
						  	<span class="checkmark"></span>
						</label>
					</div> -->
					<div class="form-row-last">
						<input type="submit" name="register" class="register" id="btn_register" value="Sign Up">
            <a style="cursor: pointer;" id="btn_signin" class="btn btn-primary">Have an account? Sign In</a>
					</div>

				</div>
			</form>
		</div>
	</div>
  <div class="loading" style="display:none;">Loading&#8230;</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js" charset="utf-8"></script>

	<!-- This is for register textbox validation -->
	<!-- Start here -->
	<script type="text/javascript">
		//Allow letters only in textbox : firstname, lastname, nickname
		$(function() {
			$('#firstname, #lastname, #nickname').keydown(function(e) {
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

		//Allow numbers only in textbox such as phone
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

		//Giving capital in first word for tenses
		function ucfirst(str,force){
	    str=force ? str.toLowerCase() : str;
	    return str.replace(/(\b)([a-zA-Z])/,
	       function(firstLetter){
	          return   firstLetter.toUpperCase();
	       });
     }

		 //Action is here - Process call ucfirst methode
		 $('#firstname, #lastname, #nickname, #alamat, #company, #sc, #ks, #hobby, #organisasi, #ciri_khas, #citacita').keyup(function(evt){

	      // force: true to lower case all letter except first
	      var cp_value= ucfirst($(this).val(),true) ;

	      // to capitalize all words
	      //var cp_value= ucwords($(this).val(),true) ;


	      $(this).val(cp_value );

	   });
	</script>
	<!-- End here -->
	<script type="text/javascript">
	 $(function(){
		  $(".datepicker").datepicker({
		      format: 'yyyy-mm-dd',
		      autoclose: true,
		      todayHighlight: true,
		  });
	 });
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#social_media").on("change", function(){
				var varJenisSosmed = $(this).val();
				if(varJenisSosmed == "Instagram"){
					$("#isi_sosmed").html('<input type="text" name="isi_social_media" class="street" id="isi_social_media" value="https://www.instagram.com/" required>');
				}else if (varJenisSosmed == "Facebook") {
					$("#isi_sosmed").html('<input type="text" name="isi_social_media" class="street" id="isi_social_media" value="https://www.facebook.com/" required>');
				}else if (varJenisSosmed == "Twitter") {
					$("#isi_sosmed").html('<input type="text" name="isi_social_media" class="street" id="isi_social_media" value="https://www.twitter.com/" required>');
				}
			});
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
        var varUsername         = $("#username").val();
        var varPassword         = $("#password").val();
        var varPasswordConfirm  = $("#confirm_password").val();
        var varEmail            = $("#email").val();
        var varPhone            = $("#phone").val();
        var varNickname         = $("#nickname").val();
        var varAlamat           = $("#alamat").val();
        var varGender           = $("#gender").val();
        var varBirthDate        = $("#dt").val();
        var varSc               = $("#sc").val();
        var varKs               = $("#ks").val();
        var varHobby            = $("#hobby").val();
        var varSosialMedia      = $("#social_media").val();
        var varIsiSocialMedia   = $("#isi_social_media").val();
        var varOrganisasi       = $("#organisasi").val();
        var varUniqPerson       = $("#ciri_khas").val();
        var varCitaCita         = $("#citacita").val();
        var varAmbilPacket      = $("#ambil_paket").val();

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
          else if(varEmail == ""){
            swal({
              type      : "info",
              title     : "Warning",
              text      : "Email is required",
              timer     : 3000
            });
          }
          else if (varNickname == "") {
            swal({
              type      : "info",
              title     : "Warning",
              text      : "Nickname is required",
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
          else if (varAlamat == "") {
            swal({
              type      : "info",
              title     : "Warning",
              text      : "Address is required",
              timer     : 3000
            });
          }
          else if (varGender == "" || varGender == null) {
            swal({
              type      : "info",
              title     : "Warning",
              text      : "Gender is required",
              timer     : 3000
            });
          }
          else if (varBirthDate == "") {
            swal({
              type      : "info",
              title     : "Warning",
              text      : "Birth date is required",
              timer     : 3000
            });
          }
          else if (varSc == "") {
            swal({
              type      : "info",
              title     : "Warning",
              text      : "School or College is required",
              timer     : 3000
            });
          }
          else if(varKs == ""){
            swal({
              type      : "info",
              title     : "Warning",
              text      : "Class or Semester is required",
              timer     : 3000
            });
          }
          else if (varHobby == "") {
            swal({
              type      : "info",
              title     : "Warning",
              text      : "Hobby is required",
              timer     : 3000
            });
          }
          else if (varSosialMedia == "" || varSosialMedia == null) {
            swal({
              type      : "info",
              title     : "Warning",
              text      : "Social Media Type is required",
              timer     : 3000
            });
          }
          else if (varIsiSocialMedia == "") {
            swal({
              type      : "info",
              title     : "Warning",
              text      : "Social Media is required",
              timer     : 3000
            });
          }else if (varOrganisasi == "") {
            swal({
              type      : "info",
              title     : "Warning",
              text      : "Organizations is required",
              timer     : 3000
            });
          }else if (varUniqPerson == "") {
            swal({
              type      : "info",
              title     : "Warning",
              text      : "Speciality is required",
              timer     : 3000
            });
          }else if (varCitaCita == "") {
            swal({
              type      : "info",
              title     : "Warning",
              text      : "Goals is required",
              timer     : 3000
            });
          }
          else if (varAmbilPacket == "" || varAmbilPacket == null) {
            swal({
              type      : "info",
              title     : "Warning",
              text      : "The Package is required",
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
                  username              : varUsername,
                  password              : varPassword,
                  confirm_password      : varPasswordConfirm,
                  firstname             : varFirstname,
                  lastname              : varLastname,
                  phone                 : varPhone,
                  nickname              : varNickname,
                  address               : varAlamat,
                  jenkel                : varGender,
                  tanggal_lahir         : varBirthDate,
                  sekolah_kampus        : varSc,
                  kelas_semester        : varKs,
                  hobby                 : varHobby,
                  social_media          : varSosialMedia,
                  isi_social_media      : varIsiSocialMedia,
                  pengalaman_organisasi : varOrganisasi,
                  ciri_khas_personal    : varUniqPerson,
                  cita_cita             : varCitaCita,
                  ambil_paket           : varAmbilPacket
                },
                success:function(data){
                  $("#firstname").val("");
                  $("#lastname").val("");
                  $("#username").val("");
                  $("#password").val("");
                  $("#confirm_password").val("");
                  $("#email").val("");
                  $("#phone").val("");
                  $("#nickname").val("");
                  $("#alamat").val("");
                  $("#gender").val("");
                  $("#dt").val("");
                  $("#sc").val("");
                  $("#ks").val("");
                  $("#hobby").val("");
                  $("#social_media").val("");
                  $("#isi_social_media").val("");
                  $("#organisasi").val("");
                  $("#ciri_khas").val("");
                  $("#citacita").val("");
                  $("#ambil_paket").val("");

                  if(data.response == "success"){
                    swal({
                      type      : "success",
                      title     : "Saved",
                      text      : "Please check your email first for activation your account",
                      timer     : 3000
                    }).then(function(){
                      window.location = "{{ url('user/pages/register') }}";
                    });
                  }
                  else{
                    swal({
                      type      : "error",
                      title     : "Error",
                      text      : "Oops, Cannot be saved your data",
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
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
