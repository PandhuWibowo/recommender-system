
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style media="screen">
      .btn {
         border-radius: 0px !important;
      }
      input[type="text"] {
        width: 1100em;
      }

      #edit_nama, #edit_kode_nama, #edit_personality_id, #edit_assessment_id{
          width: 100%;
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
                                            <li><span class="bread-blod">Personalities</span>
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


        <!-- Selfhood Form Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Typical Scale <span class="table-project-n">Form</span></h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="form-group">
                                  <label for="assessmenttype">Assessment Type</label>
                                  <select class="js-example-placeholder-multiple js-states form-control" name="assessment_id[]" id="assessment_id" multiple="multiple">
                                      <?php foreach ($jenisAssessments as $key => $row): ?>
                                          <option value="{{$row->id}}">{{$row->nama}}</option>
                                      <?php endforeach; ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="usr">Typical Scale Name</label>
                                  <input type="text" class="form-control nama" autofocus="on" autocomplete="off" id="nama" name="nama[]" data-role="tagsinput" required>
                                </div>
                                <div class="form-group">
                                  <label for="usr">Typical Scale Code</label>
                                  <input type="text" class="form-control kode_nama" autocomplete="off" id="kode_nama" name="kode_nama[]" data-role="tagsinput" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Selfhood Form End -->

        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Typical Scale <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">

                                    <table id="myAssesments" class="display nowrap table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>Name of Assesment</th>
                                              <th>Typical Scale</th>
                                              <th>Typical Scale Code</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($personalities as $key=>$row)
                                          <tr>
                                            <td>{{ $row->getJenisAssessment->nama}}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->kode_nama }}</td>
                                            <td>
                                                <a class="btn btn-warning btn_edit" data-assessment_id="{{ Crypt::encrypt($row->assessment_id) }}" data-nama="{{$row->nama}}" data-id="{{Crypt::encrypt($row->id)}}" data-kode_nama="{{$row->kode_nama}}"><i class="fa fa-edit"></i></a>
                                            </td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                              <th>Name of Assesment</th>
                                              <th>Typical Scale</th>
                                              <th>Typical Scale Code</th>
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
                                            <h4 class="modal-title">Edit Typical Scale</h4>
                                            <button type="button" id="btn_hps" class="btn btn-danger">Remove</button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="form-group">
                                              <input type="hidden" class="form-control" autocomplete="off" id="edit_personality_id" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Assessment Type</label>
                                                <select class="js-states form-control" name="edit_assessment_id" id="edit_assessment_id">
                                                    @foreach($jenisAssessments as $row)
                                                        <option value="{{Crypt::encrypt($row->id)}}">{{$row->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="usr">Typical Scale Name</label>
                                              <input type="text" class="form-control" autocomplete="off" id="edit_nama" required>
                                            </div>
                                            <!-- no_urut_assesment -->
                                            <div class="form-group">
                                              <label for="usr">Typical Scale Code</label>
                                              <input type="text" class="form-control" autocomplete="off" id="edit_kode_nama" required>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="submit" id="btn_edit" class="btn btn-primary">Save</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        // $(".nama, .kode_nama").tagsManager();
    </script>
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
    $(".js-example-placeholder-multiple, #edit_assessment_id").select2({
        placeholder: "Select a Assessment Type"
    });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#myAssesments").on("click", ".btn_edit",function(){
          var varAssessmentId   = $(this).data("assessment_id");
          var varNama           = $(this).data("nama");
          var varKodeNama       = $(this).data("kode_nama");
          var varId             = $(this).data("id");
          try {
            $("#edit_nama").val(varNama);
            $("#edit_kode_nama").val(varKodeNama);
            $("#edit_personality_id").val(varId);
            $("#edit_assessment_id").val(varAssessmentId).trigger("change");
            $("#editModal").modal("show");
          } catch (e) {
            console.log(e);
          } finally {

          }
        });

        // TODO: Saving kepribadian
        $("#btn_save").on("click", function(e){
          e.preventDefault();
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          var selectedJenisAss  = $("select[name=\'assessment_id[]\']").map(function() {
            return $(this).val();
          }).toArray();
          // var varNama  = $("input[name=\'nama[]\']").map(function() {
          //   return $(this).val();
          // }).toArray();
          // var varKodeNama  = $("input[name=\'kode_nama[]\']").map(function() {
          //   return $(this).val();
          // }).toArray();

          var varNama       = $("#nama").val();
          var varKodeNama   = $("#kode_nama").val();
          try {
            if(selectedJenisAss == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Assessmnet Type is required",
                timer   : 3000
              });
            }
            else if(varNama == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Name is required",
                timer   : 3000
              });
            }
            else if (varKodeNama == "") {
                swal({
                  type    : "info",
                  title   : "Empty",
                  text    : "Code Name is required",
                  timer   : 3000
                });
            }
            else{
              $.ajax({
                type    : "POST",
                url     : "{{ url('backend/pages/personalities') }}",
                async   : true,
                dataType: "JSON",
                data    : {
                  "assessment_id[]" : selectedJenisAss,
                  nama          : varNama,
                  kode_nama     : varKodeNama
                },
                success:function(data){
                    // console.log(data);
                  $("#myModal").modal("hide");
                  if(data.response == "success"){
                    swal({
                      type : "success",
                      title: "Success",
                      text : "Data's has been saved",
                      timer: 3000
                    }).then(function(){
                      window.location = "{{ url('backend/pages/personalities') }}";
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
          var varId             = $("#edit_personality_id").val();
          var varAssessmentId   = $("#edit_assessment_id").val();
          var varNama           = $("#edit_nama").val();
          var varKodeNama       = $("#edit_kode_nama").val();
          try {
            $.ajax({
              type    : "PUT",
              url     : "{{ url('backend/pages/personalities/update') }}",
              async   : true,
              dataType: "JSON",
              data    : {
                id                  : varId,
                nama                : varNama,
                kode_nama           : varKodeNama,
                assessment_id       : varAssessmentId
              },
              success:function(data){
                $("#editModal").modal("hide");
                if(data.response == "success"){
                  swal({
                    type : "success",
                    title: "Success",
                    text : "Personality has been updated",
                    timer: 3000
                  }).then(function(){
                    window.location = "{{ url('backend/pages/personalities') }}";
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
            })
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
          var varId = $("#edit_personality_id").val();
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
                  url       : "{{ url('backend/pages/personalities/delete') }}",
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
                        window.location = "{{ url('backend/pages/personalities') }}";
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
