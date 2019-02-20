@include('administrator.login.include.v_header_signin')
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<!-- <h3></h3>
				<p>Please, you have signin first!</p> -->
				<img class="img-responsive" style="margin-left:35%;" width="30%" src="{!! asset('images/icon.png') !!}" alt="">
				<br>
			</div>
			<div class="content-error">
				<div class="hpanel">
            <div class="panel-body">
                @if(Session::has('must-login'))
                  <p style="color:red">
                    {{ Session::get('must-login') }}
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

                <form action="#" id="loginForm" autocomplete="off">
                    <div class="form-group">
                        <label class="control-label" for="username">Email</label>
                        <input type="email" placeholder="example@gmail.com" title="Please enter you email" required="" value="" name="email" id="email" class="form-control">
                        <span class="help-block small">Your unique email to app</span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">Password</label>
                        <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                        <span class="help-block small">Your strong password</span>
                    </div>
                    <div class="checkbox login-checkbox">
                        <!-- <label> -->
						            <!-- <input type="checkbox" class="i-checks"> Remember me </label> -->
                        <!-- <p class="help-block small">(if this is a private computer)</p> -->
												<div class="row">
													<div class="col-sm-6">
														<a class="btn btn-primary btn-block" href="{{ url('user/pages/forgot/password/sendemail') }}">Forgot password?</a>
													</div>
												</div>
										</div>

                    <button class="btn btn-success btn-block loginbtn" id="btn-login" type="button">Login</button>

										<a id="btn_register" class="btn btn-success btn-block loginbtn">Doesn't have an account? Register</a>
                </form>

            </div>
        </div>
			</div>
			<div class="text-center login-footer" style="text-align: center;bottom:0;width: 100%;left:0;">
				<p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a> Modified by <a href="http://rootorial.com/">Pandhu Wibowo</a></p>
			</div>
		</div>
  </div>

@include('administrator.login.include.v_footer_signin')

<script type="text/javascript">
  $(document).ready(function(){
		$("#btn_register").on("click", function(e){
			e.preventDefault();
			window.location = "{{ url('user/pages/register') }}";
		});
    $("#btn-login").on("click", function(){
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
