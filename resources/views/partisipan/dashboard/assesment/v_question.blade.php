
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
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/modals.css') !!}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/form/all-type-forms.css') !!}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/style.css') !!}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/responsive.css') !!}">
    <!-- modernizr JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/vendor/modernizr-2.8.3.min.js') !!}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    @include("items.meta")
    <style>
    input[type=radio] {
      float: left;
    }

    .jawaban {
      margin-left: 30px;
      display: block;
    }

    /* Absolute Center Spinner */
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
                                            <li><span class="bread-blod">Questions</span>
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
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Questionnaire</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                  <div class="sparkline8-list">
                                                      <div class="sparkline8-graph">
                                                          <div class="static-table-list">
                                                              <table class="table">
                                                                  <thead>
                                                                      <tr>
                                                                          <th style="text-align:center;">#</th>
                                                                          <th style="text-align:center;">Competencies</th>
                                                                          <th style="text-align:center;">Situation</th>
                                                                          <!-- <th style="text-align:center;">Score</th> -->
                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                      <?php $x = 1;?>
                                                                      <?php $no = 1;?>
                                                                      @foreach($questions as $row)
                                                                        <tr>
                                                                            <td>{{$no}}</td>
                                                                            <td>{{$row->get_kompetensi->kompetensi}}</td>
                                                                            <td style="text-align:justify;">
                                                                              <p>
                                                                                {{ucfirst($row->pertanyaan)}}
                                                                              </p>
                                                                              <div class="form-group-inner">
                                                                                  <div class="row">
                                                                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                          <div class="bt-df-checkbox pull-left">
                                                                                              @foreach($row->get_jawaban as $key2=>$row2)
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="i-checks pull-left">

                                                                                                              <input type="hidden" value="{{$decryptAssId}}" name="assessmentid{{$x}}" id="assessmentid{{$x}}" required>
                                                                                                              <input type="hidden" value="{{$row2->pertanyaan_id}}" name="pertanyaanid{{$x}}" id="pertanyaanid{{$x}}" required>
                                                                                                              <input type="hidden" value="{{$row2->id}}" name="jawabanid{{$x}}" id="jawabanid{{$x}}" required>
                                                                                                              <input type="radio" value="{{$row2->nilai}}" name="nilai{{$x}}" id="nilai{{$x}}" required>


                                                                                                        </div>
                                                                                                        <div class="jawaban">{{ucfirst($row2->jawaban)}}</div>

                                                                                                    </div>
                                                                                                </div>
                                                                                              @endforeach
                                                                                              <!-- <input type="text" name="count" id="count" value="{{$x}}"> -->
                                                                                          </div>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>

                                                                            </td>
                                                                        </tr>
                                                                        <?php $no++;?>
                                                                        <?php $x++;?>
                                                                      @endforeach
                                                                  </tbody>
                                                              </table>
                                                              <button type="button" class="btn btn-primary" id="btn_save" data-count="{{$x}}">Save</button>

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
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form End-->
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
    <div class="loading" style="display:none;">Loading&#8230;</div>
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
        $("#btn_save").on("click", function(){
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          var varCount = $(this).data("count");
          var varParseCount = parseInt(varCount)-1;
          var i;
          var varNilai;
          var varSum;
          var arrNilai        = [];
          var arrAssesmentId  = [];
          var arrPertanyaanId = [];
          var arrJawabanId    = [];
          for (i = 1; i <= varParseCount; i++) {
            // varNilai = $("#nilai"+i).val();
            var varJenisAssesmentId  = $("input[name=assessmentid"+i+"]").val();
            var varPertanyaanId      = $("input[name=pertanyaanid"+i+"]").val();
            var varJawabanId         = $("input[name=jawabanid"+i+"]").val();
            var varNilai             = $("input[name=nilai"+i+"]:checked").val();
            if(varNilai == "" || varNilai == undefined){
              swal({
                type      : "info",
                title     : "Null",
                text      : "Answer is still empty",
                timer     : 3000,
              });
            }else{
              // varNilai = varNilai + varNilai;
                  arrNilai[i-1]       = varNilai;
                  arrAssesmentId[i-1] = varJenisAssesmentId;
                  arrPertanyaanId[i-1]= varPertanyaanId;
                  arrJawabanId[i-1]   = varJawabanId;
            }
            // console.log("Nilai"+i+": "+varNilai);

            // console.log(varSum);
          }
          // varSum = parseInt(varNilai);
          // console.log(arrAssesmentId);
          if(varParseCount != arrNilai.push()){
            swal({
              type      : "info",
              title     : "Null",
              text      : "Answers are still empty",
              timer     : 3000,
            });
          }else{
            try {
              $.ajax({
                type      : "POST",
                url       : "{{ url('user/pages/questions/store') }}",
                async     : true,
                dataType  : "JSON",
                data      : {
                  "ass_id[]"        : arrAssesmentId,
                  "pertanyaan_id[]" : arrPertanyaanId,
                  "jawaban_id[]"    : arrJawabanId,
                  "nilai[]"         : arrNilai
                },
                success:function(data){
                  // console.log(data);
                  if(data.response == "success"){
                    swal({
                      type      : "info",
                      title     : "Success",
                      timer     : 3000,
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
