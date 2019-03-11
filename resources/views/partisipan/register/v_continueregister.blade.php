<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Loopinc.id</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{!! asset('continueregister/css/montserrat-font.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('continueregister/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') !!}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{!! asset('continueregister/css/style.css') !!}"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.js" charset="utf-8"></script>
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="post" id="myform">
				<div class="form-left">
					<h2>Contact Details</h2>
					<div class="form-group">
						<input type="hidden" name="id" id="id" class="input-text" placeholder="Id" value="{{Crypt::encrypt($continueRegister->id)}}" readonly>
						<div class="form-row form-row-1">
							<input type="text" name="email" id="email" class="input-text" placeholder="Email" value="{{$continueRegister->email}}" readonly>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="username" id="username" class="input-text" placeholder="Username" readonly value="{{lcfirst($continueRegister->username)}}">
						</div>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="firstname" id="firstname" class="input-text" placeholder="First Name" readonly value="{{$continueRegister->firstname}}">
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="lastname" id="lastname" class="input-text" placeholder="Last Name" readonly value="{{$continueRegister->lastname}}">
						</div>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="nickname" id="nickname" class="input-text" placeholder="Nick Name" required value="{{$continueRegister->nickname}}">
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="phone" id="phone" class="input-text" placeholder="Phone" readonly value="{{$continueRegister->phone}}">
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="alamat" class="company" id="alamat" placeholder="Address" required value="{{$continueRegister->address}}">
					</div>

					<div class="form-row">
						<select name="title">
								<option value="" selected disabled>Select Gender Please</option>
						    <option class="option" value="Pria">Men</option>
						    <option class="option" value="Wanita">Women</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>

					<div class="form-row">
						<input type="text" name="dt" class="company datepicker" id="dt" placeholder="Birth date" required value="{{$continueRegister->tanggal_lahir}}">
					</div>

					<div class="form-row">
						<input type="text" name="sc" class="company" id="sc" placeholder="School/College" required value="{{$continueRegister->sekolah_kampus}}">
					</div>

					<div class="form-row">
						<input type="text" name="ks" class="company" id="ks" placeholder="Class/Semester - Example : Kelas 7/Semester 2 (Tulis satu saja)" required value="{{$continueRegister->kelas_semester}}">
					</div>

					<div class="form-row">
						<input type="text" name="hobby" class="company" id="hobby" placeholder="Hobby" required value="{{$continueRegister->hobby}}">
					</div>

					<!-- <div class="form-row">
						<select name="position">
						    <option value="position">Position</option>
						    <option value="director">Director</option>
						    <option value="manager">Manager</option>
						    <option value="employee">Employee</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>

					<div class="form-group">
						<div class="form-row form-row-3">
							<input type="text" name="business" class="business" id="business" placeholder="Business Arena" required>
						</div>
						<div class="form-row form-row-4">
							<select name="employees">
							    <option value="employees">Employees</option>
							    <option value="trainee">Trainee</option>
							    <option value="colleague">Colleague</option>
							    <option value="associate">Associate</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div> -->
				</div>
				<div class="form-right">
					<h2>Contact Details</h2>
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
						<input type="text" name="organisasi" class="additional" id="organisasi" placeholder="Organization" required>
					</div>

					<div class="form-row">
						<input type="text" name="ciri_khas" class="additional" id="ciri_khas" placeholder="Speciality" required>
					</div>

					<div class="form-row">
						<input type="text" name="citacita" class="additional" id="citacita" placeholder="Goals" required>
					</div>

					<div class="form-row">

							<select name="ambil_paket">
							    <option value="" selected disabled>Choose Package</option>
							    <option value="Starter Package">Starter Package</option>
							    <option value="Proactive Package">Proactive Package</option>
							    <option value="Bright Package">Bright Package</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>

					</div>

					<div class="form-checkbox">
						<label class="container"><p>I've been filling out the form completely and correctly</p>
						  	<input type="checkbox" name="checkbox" required>
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Sign Up">
					</div>
				</div>
			</form>
		</div>
	</div>
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
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
