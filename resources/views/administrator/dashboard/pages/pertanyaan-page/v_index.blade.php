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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">
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
                                          <!-- Modal -->
                                          <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                              <!-- Modal content-->
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">New Question</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <div class="form-group">
                                                    <label for="usr">Type of Assesments</label>
                                                    <!-- <input type="text" class="form-control" autofocus="on" autocomplete="off" id="nama_rowscore" required> -->
                                                    <select class="form-control assesment_id" name="assesment_id" id="assesment_id">
                                                        <option></option>
                                                      @foreach($assesments as $row)
                                                        <option value="{{$row->id}}">{{$row->nama}}</option>
                                                      @endforeach
                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="usr">Type of Competencies</label>
                                                    <!-- <input type="text" class="form-control" autofocus="on" autocomplete="off" id="nama_rowscore" required> -->
                                                    <select class="form-control kompetensi_id" name="kompetensi_id" id="kompetensi_id">
                                                        <option></option>
                                                      @foreach($kompetensi as $row)
                                                        <option value="{{$row->id}}">{{$row->kompetensi}}</option>
                                                      @endforeach
                                                    </select>
                                                  </div>


                                                  <div class="form-group">
                                                    <label for="usr">Row Scores</label>
                                                    <!-- <input type="text" class="form-control" autofocus="on" autocomplete="off" id="nama_rowscore" required> -->
                                                    <select class="form-control rowscore_id" name="rowscore_id" id="rowscore_id">
                                                        <option></option>
                                                      @foreach($rowscore as $row)
                                                        <option value="{{$row->id}}">{{$row->nama_rowscore}}</option>
                                                      @endforeach
                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="usr">Question</label>
                                                    <textarea class="form-control" rows="5" id="question" style="height: 150px;" name="question" required placeholder="Question"></textarea>
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
                                            <li><span class="bread-blod">All Questions</span>
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
                                    <h1>Questions <span class="table-project-n">Data</span> Table</h1>
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
                                    <table id="myCompetencies" class="display nowrap table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>Questions</th>
                                              <th>Name of Assesments</th>
                                              <th>Competencies</th>
                                              <th>Row Scores</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($pertanyaan as $key=>$row)
                                          <tr>
                                            <td>{{ $row->pertanyaan }}</td>
                                            <td>{{ $row->get_assesment->nama }}</td>
                                            <td>{{ $row->get_kompetensi->kompetensi }}</td>
                                            <td>{{ $row->get_rowscore->nama_rowscore }}</td>
                                            <td>
                                              <a class="btn btn-warning btn_edit" data-pertanyaan="{{$row->pertanyaan}}" data-assesment_id="{{$row->assesment_id}}" data-kompetensi_id="{{ $row->kompetensi_id }}" data-rowscore_id="{{$row->rowscore_id}}" data-id="{{Crypt::encrypt($row->id)}}"><i class="fa fa-edit"></i></a>
                                            </td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                            <th>Questions</th>
                                            <th>Name of Assesments</th>
                                            <th>Competencies</th>
                                            <th>Row Scores</th>
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
                                            <h4 class="modal-title">Update Question</h4>
                                            <button type="button" id="btn_hps" class="btn btn-danger">Remove</button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="form-group">
                                              <input type="hidden" class="form-control" autocomplete="off" id="edit_id_pertanyaan" required readonly>
                                            </div>
                                            <div class="form-group">
                                              <label for="usr">Type of Assesments</label>
                                              <!-- <input type="text" class="form-control" autofocus="on" autocomplete="off" id="nama_rowscore" required> -->
                                              <select class="form-control assesment_id" name="assesment_id" id="edit_assesment_id">
                                                  <option></option>
                                                @foreach($assesments as $row)
                                                  <option value="{{$row->id}}">{{$row->nama}}</option>
                                                @endforeach
                                              </select>
                                            </div>

                                            <div class="form-group">
                                              <label for="usr">Type of Competencies</label>
                                              <!-- <input type="text" class="form-control" autofocus="on" autocomplete="off" id="nama_rowscore" required> -->
                                              <select class="form-control kompetensi_id" name="kompetensi_id" id="edit_kompetensi_id">
                                                  <option></option>
                                                @foreach($kompetensi as $row)
                                                  <option value="{{$row->id}}">{{$row->kompetensi}}</option>
                                                @endforeach
                                              </select>
                                            </div>


                                            <div class="form-group">
                                              <label for="usr">Row Scores</label>
                                              <!-- <input type="text" class="form-control" autofocus="on" autocomplete="off" id="nama_rowscore" required> -->
                                              <select class="form-control rowscore_id" name="rowscore_id" id="edit_rowscore_id">
                                                  <option></option>
                                                @foreach($rowscore as $row)
                                                  <option value="{{$row->id}}">{{$row->nama_rowscore}}</option>
                                                @endforeach
                                              </select>
                                            </div>

                                            <div class="form-group">
                                              <label for="usr">Question</label>
                                              <textarea class="form-control" rows="5" id="edit_question" name="question" required placeholder="Question"></textarea>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js" charset="utf-8"></script>
    <script>
        $(document).ready(function () {
            $(".assesment_id").select2({
                placeholder: "Please select type of assesment"
            });

            $(".kompetensi_id").select2({
                placeholder: "Please select competencie"
            });

            $(".rowscore_id").select2({
                placeholder: "Please select row score"
            });
        });
    </script>
    <script type="text/javascript">
      $(document).ready( function () {
        $('#myCompetencies').DataTable({
          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
          ]
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $(".btn_edit").on("click", function(){
          var varId           = $(this).data("id");
          var varAssesmentId  = $(this).data("assesment_id");
          var varKompetensiId = $(this).data("kompetensi_id");
          var varRowScoreId   = $(this).data("rowscore_id");
          var varQuestion     = $(this).data("pertanyaan");
          try {
            $("#edit_id_pertanyaan").val(varId);
            // $("#edit_assesment_id").val(varAssesmentId);
            $("#edit_assesment_id").select2("val",varAssesmentId);
            $("#edit_kompetensi_id").select2("val",varKompetensiId);
            $("#edit_rowscore_id").select2("val",varRowScoreId);
            $("#edit_question").val(varQuestion);
            $("#editModal").modal("show");
          } catch (e) {
            console.log(e);
          } finally {

          }
        });
        $("#btn_save").on("click", function(){
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          var varAssesmentId    = $("#assesment_id").val();
          var varKompetensiId   = $("#kompetensi_id").val();
          var varRowScoreId     = $("#rowscore_id").val();
          var varQuestion       = $("#question").val();
          try {
            if(varAssesmentId == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Name of Assesment is required",
                timer   : 3000
              });
            }
            else if(varKompetensiId == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Competency is required",
                timer   : 3000
              });
            }
            else if(varRowScoreId == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Row Score is required",
                timer   : 3000
              });
            }
            else if(varQuestion == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Question is required",
                timer   : 3000
              });
            }
            else{
              $.ajax({
                type    : "POST",
                url     : "{{ url('backend/pages/questions/store') }}",
                async   : true,
                dataType: "JSON",
                data    : {
                  assesment_id     : varAssesmentId,
                  kompetensi_id    : varKompetensiId,
                  rowscore_id      : varRowScoreId,
                  pertanyaan       : varQuestion
                },
                success:function(data){
                  $("#myModal").modal("hide");
                  if(data.response == "success"){
                    swal({
                      type : "success",
                      title: "Success",
                      text : "Data has been saved",
                      timer: 3000
                    }).then(function(){
                      window.location = "{{ url('backend/pages/questions') }}";
                    })
                  }else{
                    swal({
                      type : "error",
                      title: "Error",
                      text : "Failed saving the data",
                      timer: 3000
                    })
                  }
                },
                error:function(data){
                  console.log(data);
                }
              });
            }
          } catch (e) {
            console.log(e);
          } finally {

          }
        });

        $("#btn_edit").on("click", function(){
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          var varId             = $("#edit_id_pertanyaan").val();
          var varAssesmentId    = $("#edit_assesment_id").val();
          var varKompetensiId   = $("#edit_kompetensi_id").val();
          var varRowScoreId     = $("#edit_rowscore_id").val();
          var varQuestion       = $("#edit_question").val();
          try {
            if(varAssesmentId == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Name of Assesment is required",
                timer   : 3000
              });
            }
            else if(varKompetensiId == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Competency is required",
                timer   : 3000
              });
            }
            else if(varRowScoreId == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Row Score is required",
                timer   : 3000
              });
            }
            else if(varQuestion == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Question is required",
                timer   : 3000
              });
            }
            else{
              $.ajax({
                type    : "PUT",
                url     : "{{ url('backend/pages/questions/update') }}",
                async   : true,
                dataType: "JSON",
                data    : {
                  id            : varId,
                  pertanyaan    : varQuestion,
                  assesment_id  : varAssesmentId,
                  kompetensi_id : varKompetensiId,
                  rowscore_id   : varRowScoreId
                },
                success:function(data){
                  $("#editModal").modal("hide");
                  if(data.response == "success"){
                    swal({
                      type : "success",
                      title: "Success",
                      text : "Datas has been updated",
                      timer: 3000
                    }).then(function(){
                      window.location = "{{ url('backend/pages/questions') }}";
                    })
                  }else{
                    swal({
                      type : "error",
                      title: "Error",
                      text : "Failed updaing the data",
                      timer: 3000
                    })
                  }
                },
                error:function(data){
                  console.log(data);
                }
              });
            }
          } catch (e) {
            console.log(e);
          } finally {

          }
        });

        $("#btn_hps").on("click", function(){
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          var varId = $("#edit_id_pertanyaan").val();
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
                  url       : "{{ url('backend/pages/questions/delete') }}",
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
                        window.location = "{{ url('backend/pages/questions') }}";
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
</body>

</html>