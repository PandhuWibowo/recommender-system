
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
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/editor/select2.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/editor/datetimepicker.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/editor/bootstrap-editable.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/editor/x-editor-style.css') !!}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/data-table/bootstrap-table.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/data-table/bootstrap-editable.css') !!}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/style.css') !!}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/responsive.css') !!}">
    <!-- modernizr JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/vendor/modernizr-2.8.3.min.js') !!}"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <style>
    /* Untuk switch enable or disable */
    .switch {
      position: relative;
      height: 26px;
      width: 120px;
      margin: 20px auto;
      margin-right: 100%;
      background: rgba(0, 0, 0, 0.25);
      border-radius: 3px;
      -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
    }

    .switch-label {
      position: relative;
      z-index: 2;
      float: left;
      width: 58px;
      line-height: 26px;
      font-size: 11px;
      color: rgba(255, 255, 255, 0.35);
      text-align: center;
      text-shadow: 0 1px 1px rgba(0, 0, 0, 0.45);
      cursor: pointer;
    }
    .switch-label:active {
      font-weight: bold;
    }

    .switch-label-off {
      padding-left: 2px;
    }

    .switch-label-on {
      padding-right: 2px;
    }


    .switch-input {
      display: none;
    }
    .switch-input:checked + .switch-label {
      font-weight: bold;
      color: rgba(0, 0, 0, 0.65);
      text-shadow: 0 1px rgba(255, 255, 255, 0.25);
      -webkit-transition: 0.15s ease-out;
      -moz-transition: 0.15s ease-out;
      -ms-transition: 0.15s ease-out;
      -o-transition: 0.15s ease-out;
      transition: 0.15s ease-out;
      -webkit-transition-property: color, text-shadow;
      -moz-transition-property: color, text-shadow;
      -ms-transition-property: color, text-shadow;
      -o-transition-property: color, text-shadow;
      transition-property: color, text-shadow;
    }
    .switch-input:checked + .switch-label-on ~ .switch-selection {
      left: 60px;
    /* Note: left: 50%; doesn't transition in WebKit */
    }

    .switch-selection {
      position: absolute;
      z-index: 1;
      top: 2px;
      left: 2px;
      display: block;
      width: 58px;
      height: 22px;
      border-radius: 3px;
      background-color: #65bd63;
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #9dd993), color-stop(100%, #65bd63));
      background-image: -webkit-linear-gradient(top, #9dd993, #65bd63);
      background-image: -moz-linear-gradient(top, #9dd993, #65bd63);
      background-image: -ms-linear-gradient(top, #9dd993, #65bd63);
      background-image: -o-linear-gradient(top, #9dd993, #65bd63);
      background-image: linear-gradient(top, #9dd993, #65bd63);
      -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 0 2px rgba(0, 0, 0, 0.2);
      box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 0 2px rgba(0, 0, 0, 0.2);
      -webkit-transition: left 0.15s ease-out;
      -moz-transition: left 0.15s ease-out;
      -ms-transition: left 0.15s ease-out;
      -o-transition: left 0.15s ease-out;
      transition: left 0.15s ease-out;
    }
    .switch-blue .switch-selection {
      background-color: #3aa2d0;
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #4fc9ee), color-stop(100%, #3aa2d0));
      background-image: -webkit-linear-gradient(top, #4fc9ee, #3aa2d0);
      background-image: -moz-linear-gradient(top, #4fc9ee, #3aa2d0);
      background-image: -ms-linear-gradient(top, #4fc9ee, #3aa2d0);
      background-image: -o-linear-gradient(top, #4fc9ee, #3aa2d0);
      background-image: linear-gradient(top, #4fc9ee, #3aa2d0);
    }
    .switch-yellow .switch-selection {
      background-color: #c4bb61;
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #e0dd94), color-stop(100%, #c4bb61));
      background-image: -webkit-linear-gradient(top, #e0dd94, #c4bb61);
      background-image: -moz-linear-gradient(top, #e0dd94, #c4bb61);
      background-image: -ms-linear-gradient(top, #e0dd94, #c4bb61);
      background-image: -o-linear-gradient(top, #e0dd94, #c4bb61);
      background-image: linear-gradient(top, #e0dd94, #c4bb61);
    }

    </style>
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
                                          <a href="" type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary" data-backdrop="static" data-keyboard="false">
                                            Add New
                                          </a>
                                          <!-- Modal -->
                                          <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                              <!-- Modal content-->
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">New Score Description</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <div class="form-group">
                                                    <label for="usr">Range Score</label>
                                                    <input type="number" min="1" class="form-control" autofocus="on" autocomplete="off" id="range_score" required>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="usr">Description</label>
                                                    <input type="text" class="form-control" autocomplete="off" id="description" required>
                                                  </div>

                                                  <div class="form-group res-mg-t-15">
                                                    <label for="usr">Description Type</label>
                                                    <textarea name="jenisketerangan" id="jenisketerangan" placeholder="Description Type"></textarea>
                                                  </div>

                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" id="btn_save" class="btn btn-primary">Save</button>
                                                </div>
                                              </div>

                                            </div>
                                          </div>
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
                                            <li><span class="bread-blod">Customers Chance</span>
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
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Customers Chance <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <!-- <div id="toolbar">
                                        <select class="form-control dt-tb">
                    											<option value="">Export Basic</option>
                    											<option value="all">Export All</option>
                    											<option value="selected">Export Selected</option>
                    										</select>
                                    </div> -->

                                    <table id="myAssesments" class="display nowrap table table-striped table-bordered" style="width:100%">
                                      <thead>

                                          <tr>
                                              <th width="5">
                                                <div class="switch">
                                                  <input type="radio" class="switch-input" name="view" value="enable" id="week" onclick="javascript:yesnoCheck();" checked>
                                                  <label for="week" class="switch-label switch-label-off">Enable</label>
                                                  <input type="radio" class="switch-input" name="view" value="disable" id="month" onclick="javascript:yesnoCheck();">
                                                  <label for="month" class="switch-label switch-label-on">Disable</label>
                                                  <span class="switch-selection"></span>
                                                </div>
                                                <div id="ifYes">
                                                  <input type="submit" value="Enable" disabled class="btn btn-info updateEnable" id="buttonClass">
                                                </div>

                                                <div id="ifNo" style="display:none;">
                                                  <input type="submit" value="Disable" disabled class="btn btn-info" id="buttonClass2">
                                                </div>
                                              </th>
                                              <th>Customers</th>
                                              <th>Assesments Type</th>
                                              <!-- <th>Status</th> -->
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <?php $no = 1;?>
                                        @foreach($userAssessments as $key=>$row)
                                          <tr>
                                            <td>
                                              @if($row->attempt >= $row->maxattempt)
                                                <i class="fa fa-times"></i>
                                              @else
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="">
                                                            <input type="hidden" name="uniq_id" id="uniq_id" name="uniq_id" class="uniq_id" value="{{$row->id}}" readonly>
                                                            <label>
                                                               <input type="checkbox" value="0" id="status_" class="chk" name="status_">
                                                            </label>
                                                            @if($row->attempt >= $row->maxattempt)
                                                              <button type="button" class="btn btn-custon-rounded-three btn-danger disabled"><i class="fa fa-times edu-danger-error" aria-hidden="true"></i> Finished</button>
                                                            @else
                                                              @if($row->status == 0 || $row->status == '0')
                                                                <button type="button" class="btn btn-custon-rounded-three btn-success"><i class="fa fa-check"></i></button>
                                                              @else
                                                                <button type="button" class="btn btn-custon-rounded-three btn-danger disabled"><i class="fa fa-times-circle"></i></button>
                                                              @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                              @endif
                                            </td>
                                            <td>{{ $row->get_users->firstname }} {{ $row->get_users->lastname }}</td>
                                            <td>{{ $row->get_jenisAssessments->nama }}</td>
                                            <!-- <td>

                                            </td> -->
                                            <td>
                                                <a class="btn btn-warning btn_edit" data-range_score="{{ $row->range_score }}" data-keterangan="{!! $row->keterangan !!}" data-jenisketerangan="{!! $row->jenisketerangan !!}" data-id="{{Crypt::encrypt($row->id)}}"><i class="fa fa-edit"></i></a>
                                            </td>
                                          </tr>
                                          <?php $no++;?>
                                        @endforeach
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                            <th width="5">For Activation</th>
                                            <th>Customers</th>
                                            <th>Assesments Type</th>
                                            <!-- <th>Status</th> -->
                                            <th>Action</th>
                                          </tr>
                                      </tfoot>
                                    </table>
                                    <!-- Modal -->


                                    <div id="editModal" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit Score Description</h4>
                                            <button type="button" id="btn_hps" class="btn btn-danger">Remove</button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="form-group">
                                              <input type="hidden" class="form-control" autocomplete="off" id="id_jenis_keterangan" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="usr">Range Score</label>
                                              <input type="number" min="1" class="form-control" autocomplete="off" id="edit_range_score" required>
                                            </div>
                                            <!-- no_urut_assesment -->
                                            <div class="form-group">
                                              <label for="usr">Description</label>
                                              <input type="text" class="form-control" autocomplete="off" id="edit_description" required>
                                            </div>

                                            <div class="form-group res-mg-t-15">
                                              <label for="usr">Description Type</label>
                                              <textarea name="edit_jenisketerangan" id="edit_jenisketerangan" placeholder="Description Type"></textarea>
                                            </div>

                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" id="btn_edit" class="btn btn-primary">Save</button>
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
        <!-- Static Table End -->
        <div class="footer-copyright-area" style="text-align: center;bottom:0;width: 100%;left:0;">
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
    <!-- data table JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/data-table/bootstrap-table.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/data-table/tableExport.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/data-table/data-table-active.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/data-table/bootstrap-table-editable.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/data-table/bootstrap-editable.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/data-table/bootstrap-table-resizable.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/data-table/colResizable-1.5.source.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/data-table/bootstrap-table-export.js') !!}"></script>
    <!--  editable JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/editable/jquery.mockjax.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/editable/mock-active.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/editable/select2.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/editable/moment.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/editable/bootstrap-datetimepicker.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/editable/bootstrap-editable.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/editable/xediable-active.js') !!}"></script>
    <!-- Chart JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/chart/jquery.peity.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/peity/peity-active.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/icheck/icheck.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/icheck/icheck-active.js') !!}"></script>
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
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js" charset="utf-8"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>


    <script type="text/javascript">
      $(document).ready( function () {
        $('#myAssesments').DataTable({
          "dom": 'Bfrtip',
          "buttons": {
             "dom": {
                "button": {
                  "tag": "button",
                  "className": "waves-effect waves-light btn btn-info"
                }
             },
             "buttons": [ 'copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
          }
        });
      });
    </script>

    <script type="text/javascript">

      //Enable or Disable Status
      //============================================================//
      function yesnoCheck() {
        if (document.getElementById('week').checked) {
            document.getElementById('ifYes').style.display = 'block';
            document.getElementById('ifNo').style.display = 'none';
            $('input[type="checkbox"]').val(0);

        }
        else if (document.getElementById("month").checked) {
            document.getElementById('ifNo').style.display = 'block';

            document.getElementById('ifYes').style.display = 'none';
            $('input[type="checkbox"]').val(1);
        }
      }
      //============================================================//

      $(document).ready(function(){

        //Enable Button
        //==========================================================//
        var checkboxes  = $("input[type='checkbox']"),
        submitButt      = $("input[type='submit']");

        checkboxes.click(function() {
            submitButt.css('background-color','#00FF7F');
            submitButt.attr("disabled", !checkboxes.is(":checked"));
        });
        //==========================================================//

        //Get Value From Checkbox - Enable
        //==========================================================//
        $('#buttonClass').click(function(){
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            var checkboxValues = $("table input[name=status_]:checked").map(function() {
                row = $(this).closest("tr");
                return $(this).val();
                   // hidden_uniq_id : $(row).find("input[name=uniq_id]").val()
            }).get();

            var checkboxUniqId = $("table input[name=status_]:checked").map(function() {
                row = $(this).closest("tr");
                return $(row).find("input[name=uniq_id]").val();
            }).get();

            //Proses ke controller
            $.ajax({
              type    : "PUT",
              url       : "{{ url('backend/pages/userassessments/status/update/enable') }}",
              async     : true,
              dataType  : "JSON",
              data      : {
                "id[]"      : checkboxUniqId,
                "status[]"  : checkboxValues
              },
              success:function(data){
                if(data.response == "success"){
                  swal({
                    type      : "success",
                    title     : "Changed",
                    timer     : 3000,
                  }).then(function(){
                    window.location.href="{{ url('backend/pages/userassessments') }}";
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
        });
        //==========================================================//

        //Get Value From Checkbox - Disable
        //==========================================================//
        $('#buttonClass2').click(function(){
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            var checkboxValues = $("table input[name=status_]:checked").map(function() {
                row = $(this).closest("tr");
                return $(this).val();
                   // hidden_uniq_id : $(row).find("input[name=uniq_id]").val()
            }).get();

            var checkboxUniqId = $("table input[name=status_]:checked").map(function() {
                row = $(this).closest("tr");
                return $(row).find("input[name=uniq_id]").val();
            }).get();

            //Proses ke controller
            $.ajax({
              type    : "PUT",
              url       : "{{ url('backend/pages/userassessments/status/update/disable') }}",
              async     : true,
              dataType  : "JSON",
              data      : {
                "id[]"      : checkboxUniqId,
                "status[]"  : checkboxValues
              },
              success:function(data){
                if(data.response == "success"){
                  swal({
                    type      : "success",
                    title     : "Changed",
                    timer     : 3000,
                  }).then(function(){
                    window.location.href="{{ url('backend/pages/userassessments') }}";
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
        });
        //==========================================================//
      });
    </script>
</body>

</html>
