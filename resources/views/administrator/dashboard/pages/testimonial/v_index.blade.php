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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>

    button a {
     letter-spacing: 2px;
    }

    .modal-content {
       position: relative;
       background-color: #fff;
       -webkit-background-clip: padding-box;
       background-clip: padding-box;
       border: 1px solid #999;
       border: 1px solid rgba(0, 0, 0, .2);
       border-radius: 0;
       outline: 0;
       -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
       box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    }

    .btn {
       border-radius: 0px !important;
    }

    #myModal--effect-fullwidth.modal.fade .modal-dialog {

     -moz-transform: scale(0.3) ;
     -webkit-transform: scale(0.3) ;
     -o-transform: scale(0.3) ;
     -ms-transform: scale(0.3) ;
     transform: scale(0.3) ;
     opacity: 1;

    }

    #myModal.modal.fade .modal-dialog {

     -moz-transform: scale(0.3) ;
     -webkit-transform: scale(0.3) ;
     -o-transform: scale(0.3) ;
     -ms-transform: scale(0.3) ;
     transform: scale(0.3) ;
     opacity: 1;

    }

    #myModal.modal.fade.in .modal-dialog {
        -moz-transform: scale(1) ;
       -webkit-transform: scale(1) ;
       -o-transform: scale(1) ;
       -ms-transform: scale(1) ;
       transform: scale(1) ;
       opacity: 1;

    }


    div#myModal {
        background: rgba(255, 255, 255, 1);
    }

    .modal-dialog.fullwidth--box {
        width: 90%;
        margin: 0 auto;
        left: 5px;
    }

     .modal-content.no--shadow {
        border: 0;
        box-shadow: none !important;
        /* width: 100%; */
    }

    #myModal--effect-fullwidth.modal.fade.in .modal-dialog {
        -moz-transform: scale(1) ;
       -webkit-transform: scale(1) ;
       -o-transform: scale(1) ;
       -ms-transform: scale(1) ;
       transform: scale(1) ;
       opacity: 1;

    }


    div#myModal--effect-fullwidth {
        background: rgba(255, 255, 255, 1);
    }

    #myModal.modal.fade.in .modal-dialog {
        -moz-transform: scale(1) ;
       -webkit-transform: scale(1) ;
       -o-transform: scale(1) ;
       -ms-transform: scale(1) ;
       transform: scale(1) ;
       opacity: 1;

    }


    div#myModal {
        background: rgba(255, 255, 255, 1);
    }

    /* The badge */
    .message {
      height: 13px;
      font-family: Segoe UI;
      font-size: 14px;
    }

    /* Badge message */
    .message.badge {
        background-color: #e2725b;
        color: white;
        padding: 0px 4px;
        margin-left: 10px;
    }

    .done {
      height: 13px;
      font-family: Segoe UI;
      font-size: 14px;
    }

    .done.badge{
      background-color: #000;
      color: white;
      padding: 0px 4px;
      margin-left: 10px;
    }
    </style>

    <!-- Drag and Drop Gambar -->
    <style>
      .file-upload-content {
        display: none;
        text-align: center;
      }

      .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
      }
      .image-upload-wrap {
        margin-top: 20px;
        border: 4px dashed #1FB264;
        position: relative;
      }

      .image-dropping,
      .image-upload-wrap:hover {
        background-color: #1FB264;
        border: 4px dashed #ffffff;
      }

      .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
      }

      .drag-text {
        text-align: center;
      }

      .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #15824B;
        padding: 60px 0;
      }

      .file-upload-image {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
      }

      .remove-image {
        width: 200px;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #b02818;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
      }

      .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
      }

      .remove-image:active {
        border: 0;
        transition: all .2s ease;
      }
    </style>

    <style>
      .myImg {
        display: block;
        margin-left: auto;
        margin-right: auto;
        max-width: 50px;
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
                                            <a href="" type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">
                                              Add New
                                            </a>

                                            <div class="modal fade fullwidth" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog fullwidth--box " role="document">
                                                 <div class="modal-content no--shadow">
                                                   <form class="" action="{{ url('backend/pages/testimonial/store') }}" enctype="multipart/form-data" method="POST">
                                                    <div class="modal-header">
                                                      <div class="alert alert-danger print-error-msg" style="display:none">
                                                        <ul></ul>
                                                      </div>
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                       <h4 class="modal-title" id="myModalLabel"></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Start Upload Button -->
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <div class="form-group">
                                                          <div class="image-upload-wrap">
                                                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="foto" id="foto" />
                                                            <div class="drag-text">
                                                              <h3>Drag and drop a file or select add Image</h3>
                                                            </div>
                                                          </div>
                                                          <div class="file-upload-content">
                                                            <img class="file-upload-image" src="#" alt="your image" />
                                                            <div class="image-title-wrap">
                                                              <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <!-- Start Textbox -->
                                                        <div class="form-group">
                                                          <label for="inputlg">Participant</label>
                                                          <select class="" id="nama_testi" name="nama_testi">
                                                            <option value=""></option>
                                                            @foreach($users as $row)
                                                              <option value="{{Crypt::encrypt($row->id)}}">{{$row->firstname}} {{$row->lastname}}</option>

                                                            @endforeach
                                                          </select>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="inputlg">College/School</label>
                                                          <input class="form-control" id="nama_instansi" type="text" name="nama_instansi">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Opini</label>
                                                            <textarea class="form-control" rows="5" id="pendapat_testimoni" style="height: 150px;" name="pendapat_testimoni" placeholder="Opini"></textarea>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                       <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                                       <button type="submit" class="btn btn-primary" id="btn-save">Save</button>
                                                    </div>
                                                    </form>
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
                                            <li><span class="bread-blod">Testimonial</span>
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
                            <!-- <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1> <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div> -->
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <!-- <div id="toolbar">
                                        <select class="form-control dt-tb">
                    											<option value="">Export Basic</option>
                    											<option value="all">Export All</option>
                    											<option value="selected">Export Selected</option>
                    										</select>
                                    </div> -->
                                    <table id="myCompetencies" class="display nowrap table table-striped table-bordered" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Photo</th>
                                          <th>Name</th>
                                          <th>Agency/School</th>
                                          <th>Opini</th>
                                          <!-- <th>Status</th> -->
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>

                                        @foreach($testimoni as $key=>$row)
                                          <tr>
                                            <td>{{$key+1}}</td>
                                            <td align="center">
                                              <?php
                                                if($row->foto == ""){
                                                  ?>
                                                    <img id="myImg" class="img-responsive myImg" width="50%" src="https://www.nicepng.com/png/detail/413-4138963_unknown-person-unknown-person-png.png" alt="unknown" />
                                                  <?php
                                                }else{
                                                  ?>
                                                    <img id="myImg" class="img-responsive myImg" width="50%" src="{!! asset('images/images-testimoni/'.$row->foto) !!}" alt="{{$row->foto}}" />
                                                  <?php
                                                }
                                              ?>
                                            </td>
                                            <td>{{ ucfirst($row->get_user->firstname) }} {{ ucfirst($row->get_user->lastname) }}</td>
                                            <td>{{ ucfirst($row->nama_instansi) }}</td>
                                            <td>
                                              <?php
                                                $words = explode(" ", ucfirst($row->pendapat_testimoni));
                                                echo implode(" ", array_splice($words, 0, 7));
                                               ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-warning btn_view" data-id="{{Crypt::encrypt($row->id)}}" data-foto="{{ $row->foto }}" data-nama_testi="{{ ucfirst($row->get_user->firstname) }} {{ ucfirst($row->get_user->lastname) }}" data-nama_instansi="{{$row->nama_instansi}}" data-pendapat_testimoni="{{$row->pendapat_testimoni}}"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-info btnEdit" data-id="{{Crypt::encrypt($row->id)}}" data-nama_testi_id="{{$row->nama_testi}}" data-foto="{{ $row->foto }}" data-nama_testi="{{ ucfirst($row->get_user->firstname) }} {{ ucfirst($row->get_user->lastname) }}" data-nama_instansi="{{$row->nama_instansi}}" data-pendapat_testimoni="{{$row->pendapat_testimoni}}"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger btn_delete" data-id="{{Crypt::encrypt($row->id)}}"><i class="fa fa-trash"></i></a>
                                            </td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                            <th>#</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Agency/School</th>
                                            <th>Opini</th>
                                            <!-- <th>Status</th> -->
                                            <th>Action</th>
                                          </tr>
                                      </tfoot>
                                    </table>

                                    <!-- View Modal -->
                                    <div class="modal fade fullwidth" id="myModal--effect-fullwidth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog fullwidth--box " role="document">
                                         <div class="modal-content no--shadow">
                                            <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel"></h4>
                                            </div>
                                            <div class="modal-body">
                                              <table>
                                                <tr>
                                                  <td>Photo</td>
                                                  <td>:</td>
                                                  <td>
                                                    <img id="imagepreview" class="img-responsive imagepreview" width="50%" src="" alt="" />
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>Full Name</td>
                                                  <td>:</td>
                                                  <td id="user"></td>
                                                </tr>
                                                <tr>
                                                  <td>School/College</td>
                                                  <td>:</td>
                                                  <td id="instansi"></td>
                                                </tr>
                                                <tr>
                                                  <td>Opini</td>
                                                  <td>:</td>
                                                  <td id="opini"></td>
                                                </tr>
                                              </table>
                                            </div>
                                            <div class="modal-footer">
                                               <button type="button" class="btn btn-default upload-image" data-dismiss="modal">Close</button>
                                               <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                            </div>
                                         </div>
                                      </div>
                                   </div>

                                   <!-- Modal Edit -->
                                   <div id="modalEdit" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">

                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Edit : Testimonial</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form class="" autocomplete="off" action="" method="post">
                                            <div class="form-group">
                                              <input type="hidden" class="form-control" id="edit_id" name="id" required readonly>
                                            </div>

                                            <div class="form-group">
                                              <div class="image-upload-wrap">
                                                <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="foto" id="foto" />
                                                <div class="drag-text">
                                                  <h3>Drag and drop a file or select add Image</h3>
                                                </div>
                                              </div>
                                              <div class="file-upload-content">
                                                <img class="file-upload-image" src="#" alt="your image" />
                                                <div class="image-title-wrap">
                                                  <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label for="participant">Participant</label>
                                              <select class="" id="edit_nama_testi" name="edit_nama_testi">
                                                <option value=""></option>
                                                @foreach($users as $row)
                                                  <option value="{{$row->id}}">{{$row->firstname}} {{$row->lastname}}</option>

                                                @endforeach
                                              </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="agency">Agency/School</label>
                                                <input type="text" class="form-control" name="edit_nama_instansi" id="edit_nama_instansi" value="">
                                            </div>

                                            <div class="form-group">
                                              <label for="opini">Opini</label>
                                              <textarea class="form-control" style="height:40%;" id="edit_pendapat_testimoni" name="edit_pendapat_testimoni"></textarea>
                                            </div>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" id="btn_update" class="btn btn-primary">Save</button>
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
    <!-- tab JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/tab.js') !!}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/plugins.js') !!}"></script>
    <!-- main JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/main.js') !!}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js" charset="utf-8"></script>
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
    <!-- Untuk Nama -->
    <script>
        $(document).ready(function () {
            $("#nama_testi").select2({
                placeholder: "Please Select Full Name",
                width: '100%'
            });

            $("#edit_nama_testi").select2({
                placeholder: "Please Select Full Name",
                width:  '100%'
            });
        });
    </script>
    <script type="text/javascript">
      $(document).ready( function () {
        $('#myCompetencies').DataTable({
          "dom": 'Bfrtip',
          "ordering": false,
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
      $("body").on("click",".upload-image",function(e){
        $(this).parents("form").ajaxForm(options);
      });

      var options = {
        complete: function(response)
        {
          // if(response.response == "success"){
          //   window.location.href="{{ url('backend/pages/testimonial') }}";
          // }
            if($.isEmptyObject(response.responseJSON.error)){
                $("input[name='nama_testi']").val('');
                $("input[name='nama_instansi']").val('');
                $("input[name='pendapat_testimoni']").val('');
                alert('Image has been successfully saved.');
            }else{
                printErrorMsg(response.responseJSON.error);
            }
        }
      };

      function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
      }
    </script>
    <script type="text/javascript">
      // Masukin data ke modal
      $(document).ready(function(){
        $("#myCompetencies").on("click", ".btn_view", function(){
          var varNamaTesti  = $(this).data("nama_testi");
          var varNamaIns    = $(this).data("nama_instansi");
          var varOpini      = $(this).data("pendapat_testimoni");
          var varFoto       = $(this).data('foto');

          $('#imagepreview').attr('src', "{!! asset('images/images-testimoni/') !!}/"+varFoto).css({ 'max-width': '500px', 'width': '50%' });
          document.getElementById('user').innerHTML=varNamaTesti;
          document.getElementById('instansi').innerHTML=varNamaIns;
          document.getElementById('opini').innerHTML=varOpini;

          $("#myModal--effect-fullwidth").modal("show");
        });

        $("#myCompetencies").on("click", ".btn_delete", function(){
          var varId = $(this).data("id");
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

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
              if(result.value){
                $.ajax({
                  type      : "DELETE",
                  url       : "{{ url('backend/pages/testimonial/delete') }}",
                  async     : true,
                  dataType  : "JSON",
                  data      : {
                    id      : varId
                  },
                  success:function(data){
                    // console.log(data);
                    $("#editModal").modal("hide")
                    if(data.response == "success"){
                      swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      ).then(function(){
                        window.location = "{{ url('backend/pages/testimonial') }}";
                      });
                    }
                  },
                  error:function(data){
                    console.log(data);
                  }
                });
              }
            });
          } catch (e) {
            console.log(e);
          } finally {

          }
        });
      });
    </script>
    <script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {

          var reader = new FileReader();

          reader.onload = function(e) {
            $('.image-upload-wrap').hide();

            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();

            $('.image-title').html(input.files[0].name);
          };

          reader.readAsDataURL(input.files[0]);

        } else {
          removeUpload();
        }
      }

      function removeUpload() {
      $('.file-upload-input').replaceWith($('.file-upload-input').clone());
      $('.file-upload-content').hide();
      $('.image-upload-wrap').show();
      }
      $('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
      });
      $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
      });

    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#myCompetencies").on("click", ".btn_edit",function(){
          var varId         = $(this).data("id");
          var varNama       = $(this).data("nama");
          var varInstitusi  = $(this).data("institusi");
          var varNoPe       = $(this).data("no_pe");
          var varKebutuhan  = $(this).data("kebutuhan");

          try {
            document.getElementById('myModalLabel').innerHTML=varNama + " - " + varInstitusi;
            document.getElementById('nope').innerHTML=varNoPe;
            document.getElementById('message').innerHTML=varKebutuhan;

            $("#myModal--effect-fullwidth").modal("show");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
              type    : "PUT",
              url     : "{{ url('backend/pages/partnerships/update') }}",
              async   : true,
              dataType: "JSON",
              data    : {
                id    : varId,
                status: "Sudah di baca"
              },
              success:function(data){
                // console.log("berhasil update status");
                console.log(data);
              },
              error:function(data){
                console.log(data);
              }
            })
          } catch (e) {
            console.log(e);
          } finally {

          }
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        //TODO: Showing data into edit's testimonial modal
        $("#myCompetencies").on("click", ".btnEdit",function(){
          var varId         = $(this).data("id");
          var varTestiName  = $(this).data("nama_testi_id");
          var varInstaName  = $(this).data("nama_instansi");
          var varPendaTes   = $(this).data("pendapat_testimoni");
          // console.log(varTestiName);
          $("#edit_nama_testi").val(varTestiName).trigger("change");
          $("#edit_nama_instansi").val(varInstaName);
          $("#edit_pendapat_testimoni").val(varPendaTes);
          $("#edit_id").val(varId);
          $("#modalEdit").modal("show");
        });

        // TODO: Updating testimonial form
        $("#btn_update").on("click", function(e){

        });
      });
    </script>
</body>
</html>
