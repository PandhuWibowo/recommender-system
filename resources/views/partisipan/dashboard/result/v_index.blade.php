
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

      .ticket {
          font-family: Arial;
          font-size: 12px;
          font-weight: bold;
          position: relative !important;
          background: #e2725b;
          float: left;
          padding: 7px 3px;
          margin: 0 5px 5px 0;
          padding: 4px 10px 4px 10px;
          text-decoration: none;
          color:#F8F8FF;
          white-space: nowrap;
      }

      .ticket a {
          /* outline: 1px rgba(255,255,255,0.4) dashed; */
          /* border: 1px rgba(0,0,0,0.3) dashed; */

      }

      .accordion-group{margin-bottom:10px;border-radius:0;}
      .accordion-toggle{
          background:rgb(248, 251, 252);

      }

      .accordion-toggle:hover{
          text-decoration: none;

      }

      .accordion-heading .accordion-toggle {
          display: block;
          padding: 8px 15px;
      }



      .selectStyle{
          width:46%; float: left; margin-right: 8%;
      }


      .accordion-group{
          margin-bottom:20px;
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
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                          <!-- <a target="_blank" href="{{ url('user/pages/prints//pdf/') }}" type="button" class="btn btn-primary">
                                            <i class="fa fa-print"></i>
                                            Print
                                          </a> -->

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Results</span>
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

        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="white-box">
                            <!-- <h3 class="box-title">Score Tests</h3> -->
                            <ul class="basic-list">
                                <li><span class="pull-left label-danger label-1 label">Competencies</span> <span class="pull-right label-danger label-1 label">Scores</span></li>
                                <br>
                                @foreach($sql as $row)
                                  @if($row->dpaNilai == 4 || $row->dpaNilai == "4")
                                    <li>{{$row->kKom}} <span class="pull-right label-danger label-1 label">4</span></li>
                                  @elseif($row->dpaNilai == 3 || $row->dpaNilai == "3")
                                    <li>{{$row->kKom}} <span class="pull-right label-success label-3 label">3</span></li>
                                  @elseif($row->dpaNilai == 2 || $row->dpaNilai == "2")
                                    <li>{{$row->kKom}} <span class="pull-right label-yellow label-7 label" style="color:#000;">2</span></li>
                                  @elseif($row->dpaNilai == 1 || $row->dpaNilai == "1")
                                    <li>{{$row->kKom}} <span class="pull-right label-danger label-2 label">1</span></li>
                                  @else
                                    <li>{{$row->kKom}} <span class="pull-right label-danger label-2 label">1</span></li>
                                  @endif
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="white-box">
                            <!-- <h3 class="box-title">Range Score</h3> -->
                            <table class="table table-striped" id="tableRange">
                              <thead>
                                <tr>
                                  <th style="text-align:center">Range Score</th>
                                  <th style="text-align:center">Description</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($rangeScore as $row)
                                  <tr>
                                    <td style="text-align:center">{!!$row->range_score!!}</td>
                                    <td style="text-align:center">{!!$row->keterangan!!}</td>
                                  </tr>
                                @endforeach
                              </tbody>
                              <tfoot>
                                <tr>
                                  <th style="text-align:center">Range Score</th>
                                  <th style="text-align:center">Description</th>
                                </tr>
                              </tfoot>
                            </table>
                        </div>
                    </div>
                    &nbsp
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="white-box">
                          <h3 class="box-title">Recommendation for Priority Improvements</h3>
                          <table class="table table-striped" id="tableRange">
                            <tbody>
                                @if($flag == 1 || $flag == "1")
                                    {{$noRecommend}}
                                @else
                                    @foreach($top5 as $kompetensi=>$v)
                                        <div class="ticket"><span class="circle"></span>{{$kompetensi}}</div>
                                    @endforeach
                                @endif
                            </tbody>
                          </table>

                          <div class="accordion-group">
                               <div class="accordion-heading">
                                 <a class="accordion-toggle"  data-toggle="collapse" data-parent="toggle" href="#collapseThree">
                                  <h3 class="box-title">Details of Recommendation (Self Directed Development)</h3>
                                 </a>
                               </div>
                               <div id="collapseThree" class="accordion-body collapse">
                                 <div class="accordion-inner">
                                     <table class="table table-striped" id="tableRange">
                                       <tbody>
                                           @if($flag == 1 || $flag == "1")
                                               {{$noRecommend}}
                                           @else
                                               @foreach($top5 as $kompetensi=>$v)
                                                   @foreach($kompetensiMaster as $row)
                                                     @if($kompetensi == $row->kompetensi)
                                                         <tr>
                                                           <td style="text-align:center">&#x26AB;</td>
                                                           <td style="text-align:justify">
                                                               {!!$row->p_mandiri!!}
                                                           </td>
                                                         </tr>
                                                     @endif
                                                   @endforeach
                                               @endforeach
                                           @endif

                                       </tbody>
                                     </table>
                                 </div>
                               </div>
                          </div>

                          <div class="accordion-group">
                                 <div class="accordion-heading">
                                   <a class="accordion-toggle"  data-toggle="collapse" data-parent="toggle" href="#collapseFour">
                                    <h3 class="box-title">Details of Recommendation (Partnership Development Activity)</h3>
                                   </a>
                                 </div>
                                 <div id="collapseFour" class="accordion-body collapse">
                                   <div class="accordion-inner">
                                       <table class="table table-striped" id="tableRange">
                                         <tbody>
                                             @if($flag == 1 || $flag == "1")
                                                 {{$noRecommend}}
                                             @else
                                                 @foreach($top5 as $kompetensi=>$v)
                                                     @foreach($kompetensiMaster as $row)
                                                       @if($kompetensi == $row->kompetensi)
                                                           <tr>
                                                             <td style="text-align:center">&#x26AB;</td>
                                                             <td style="text-align:justify">
                                                                 {!!$row->p_bermitra!!}
                                                             </td>
                                                           </tr>
                                                       @endif
                                                     @endforeach
                                                 @endforeach
                                             @endif
                                         </tbody>
                                       </table>
                                   </div>
                                 </div>
                            </div>

                            <div class="accordion-group">
                                 <div class="accordion-heading">
                                   <a class="accordion-toggle"  data-toggle="collapse" data-parent="toggle" href="#collapseFive">
                                    <h3 class="box-title">Details of Recommendation (Training Theme)</h3>
                                   </a>
                                 </div>
                                 <div id="collapseFive" class="accordion-body collapse">
                                   <div class="accordion-inner">
                                       <table class="table table-striped" id="tableRange">
                                         <tbody>
                                             @if($flag == 1 || $flag == "1")
                                                 {{$noRecommend}}
                                             @else
                                                 @foreach($top5 as $kompetensi=>$v)
                                                     @foreach($kompetensiMaster as $row)
                                                       @if($kompetensi == $row->kompetensi)
                                                           <tr>
                                                             <td style="text-align:center">&#x26AB;</td>
                                                             <td style="text-align:justify">
                                                                 {!!$row->t_pelatihan!!}
                                                             </td>
                                                           </tr>
                                                       @endif
                                                     @endforeach
                                                 @endforeach
                                             @endif
                                         </tbody>
                                       </table>
                                   </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="white-box">
                            <!-- <h3 class="box-title">Range Score</h3> -->
                            <table class="table table-striped" id="tableRange">
                              <thead>
                                <tr>
                                  <th style="text-align:center">Competency</th>
                                  <th style="text-align:center">Description</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($kompetensiMaster as $row)
                                  <tr>
                                    <td style="text-align:left">{{$row->kompetensi}}</td>
                                    <td style="text-align:justify">{!!$row->definisi!!}</td>
                                  </tr>
                                @endforeach
                              </tbody>
                              <tfoot>
                                <tr>
                                  <th style="text-align:center;">Range Score</th>
                                  <th style="text-align:center;">Description</th>
                                </tr>
                              </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright-area" style="text-align: center;bottom:0;width: 100%;left:0;">
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
    <!-- morrisjs JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/morrisjs/raphael-min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/morrisjs/morris.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/morrisjs/morris-active.js') !!}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/sparkline/jquery.sparkline.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/sparkline/jquery.charts-sparkline.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/sparkline/sparkline-active.js') !!}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/calendar/moment.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/calendar/fullcalendar.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/calendar/fullcalendar-active.js') !!}"></script>
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
