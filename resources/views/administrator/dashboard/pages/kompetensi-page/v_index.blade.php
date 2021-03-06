
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
    <style media="screen">
      .btn {
         border-radius: 0px !important;
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
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">All of Competencies Type</span>
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
                                    <h1>Competency Type<span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="myCompetencies" class="display nowrap table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>Competencies Name</th>
                                              <th>Definition</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($dataKompetensis as $key=>$row)
                                          <tr>
                                            <td>{{ $row->kompetensi }}</td>
                                            <td>
                                                <?php
                                                  $words = explode(" ", $row->definisi);
                                                  echo implode(" ", array_splice($words, 0, 5));
                                                 ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-warning btn_edit" data-kompetensi="{{$row->kompetensi}}" data-id="{{Crypt::encrypt($row->id)}}" data-definition="{!!$row->definisi!!}" data-p_mandiri="{!!$row->p_mandiri!!}" data-p_bermitra="{!!$row->p_bermitra!!}" data-t_pelatihan="{!!$row->t_pelatihan!!}"><i class="fa fa-edit"></i></a>
                                            </td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                              <th>Competencies Name</th>
                                              <th>Definition</th>
                                              <th>Action</th>
                                          </tr>
                                      </tfoot>
                                    </table>

                                    <!-- Modal -->
                                    <div id="myModal" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">New Competency Name</h4>
                                          </div>
                                          <form class="" action="" method="post">
                                              <div class="modal-body">
                                                <div class="form-group">
                                                  <label for="usr">Competency Name</label>
                                                  <input type="text" class="form-control" autofocus="on" autocomplete="off" id="jenis_competencies" required>
                                                </div>

                                                <div class="form-group res-mg-t-15">
                                                  <label for="usr">Definition</label>
                                                  <textarea name="definisi" id="definisi" placeholder="Definition" required></textarea>
                                                </div>

                                                <div class="form-group res-mg-t-15">
                                                  <label for="usr">Self Directed Development</label>
                                                  <textarea name="p_mandiri" id="p_mandiri" placeholder="Self Development" required></textarea>
                                                </div>

                                                <div class="form-group res-mg-t-15">
                                                  <label for="usr">Partnership Development Activity</label>
                                                  <textarea name="p_bermitra" id="p_bermitra" placeholder="Partner Development" required></textarea>
                                                </div>

                                                <div class="form-group res-mg-t-15">
                                                  <label for="usr">Training Theme</label>
                                                  <textarea name="t_pelatihan" id="t_pelatihan" placeholder="Training Theme" required></textarea>
                                                </div>

                                              </div>
                                              <div class="modal-footer">
                                                <button type="submit" id="btn_save" class="btn btn-primary">Save</button>
                                              </div>
                                          </form>
                                        </div>

                                      </div>
                                    </div>

                                    <!-- Modal -->
                                    <div id="editModal" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit Competency Type</h4>
                                            <button type="button" id="btn_hps" class="btn btn-danger">Remove</button>
                                          </div>
                                          <form class="" action="" method="post">
                                              <div class="modal-body">
                                                <div class="form-group">
                                                  <input type="hidden" class="form-control" autocomplete="off" id="id_jenis_competencies" required>
                                                </div>
                                                <div class="form-group">
                                                  <label for="usr">Competency Name</label>
                                                  <input type="text" class="form-control" autocomplete="off" id="name_jenis_competencies" required>
                                                </div>

                                                <div class="form-group res-mg-t-15">
                                                  <label for="usr">Definition</label>
                                                  <textarea name="edit_definisi" id="edit_definisi" placeholder="Definition"></textarea>
                                                </div>

                                                <div class="form-group res-mg-t-15">
                                                  <label for="usr">Self Directed Development</label>
                                                  <textarea name="edit_p_mandiri" id="edit_p_mandiri" placeholder="Self Development"></textarea>
                                                </div>

                                                <div class="form-group res-mg-t-15">
                                                  <label for="usr">Partnership Development Activity</label>
                                                  <textarea name="edit_p_bermitra" id="edit_p_bermitra" placeholder="Partner Development"></textarea>
                                                </div>

                                                <div class="form-group res-mg-t-15">
                                                  <label for="usr">Training Theme</label>
                                                  <textarea name="edit_t_pelatihan" id="edit_t_pelatihan" placeholder="Training Theme"></textarea>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="submit" id="btn_edit" class="btn btn-primary">Save</button>
                                              </div>
                                          </form>
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
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
      //Buat Edit Modal
      CKEDITOR.replace( 'edit_definisi' );
      CKEDITOR.replace( 'edit_p_mandiri' );
      CKEDITOR.replace( 'edit_p_bermitra' );
      CKEDITOR.replace( 'edit_t_pelatihan' );
    </script>

    <script>
      //Buat Insert Modal
      CKEDITOR.replace( 'definisi' );
      CKEDITOR.replace( 'p_mandiri' );
      CKEDITOR.replace( 'p_bermitra' );
      CKEDITOR.replace( 't_pelatihan' );
    </script>

    <script type="text/javascript">
      $(document).ready( function () {
        $('#myCompetencies').DataTable({
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Show All"]],
          "dom": 'Bfrtlip',
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
      $(document).ready(function(){

        //Menampilkan ke modal edit
        $("#myCompetencies").on("click", ".btn_edit",function(){

          var varId       = $(this).data("id");
          var varName     = $(this).data("kompetensi");
          var varNoUrut   = $(this).data("no");
          var varDefinisi = $(this).data("definition");
          var varPMandiri = $(this).data("p_mandiri");
          var varPMitra   = $(this).data("p_bermitra");
          var varTTheme   = $(this).data("t_pelatihan");

          // var varDefinisi     = CKEDITOR.instances['definition'].getData()
          try {
            $("#id_jenis_competencies").val(varId);
            $("#name_jenis_competencies").val(varName);
            $("#edit_no_urut_kompetensi").val(varNoUrut);
            CKEDITOR.instances['edit_definisi'].setData(varDefinisi);
            CKEDITOR.instances['edit_p_mandiri'].setData(varPMandiri);
            CKEDITOR.instances['edit_p_bermitra'].setData(varPMitra);
            CKEDITOR.instances['edit_t_pelatihan'].setData(varTTheme);
            $("#editModal").modal({
              backdrop: 'static',
              keyboard: true,
              show: true
            });
            // $('#editModal').modal({backdrop: 'static', keyboard: false})
          } catch (e) {
            console.log(e);
          } finally {

          }
        });

        //Insert data baru
        $("#btn_save").on("click", function(e){
          e.preventDefault();
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          var varName     = $("#jenis_competencies").val();
          var varDefinisi = CKEDITOR.instances["definisi"].getData();
          var varPMandiri = CKEDITOR.instances["p_mandiri"].getData();
          var varPMitra   = CKEDITOR.instances["p_bermitra"].getData();
          var varTTheme   = CKEDITOR.instances["t_pelatihan"].getData();

          try {
            if(varName == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Competencies is required",
                timer   : 3000
              });
            }
            else if(varDefinisi == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Definition is required",
                timer   : 3000
              });
            }
            else if(varPMandiri == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Self Development is required",
                timer   : 3000
              });
            }
            else if(varPMitra == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Partner Development is required",
                timer   : 3000
              });
            }
            else if(varTTheme == ""){
              swal({
                type    : "info",
                title   : "Empty",
                text    : "Training Theme is required",
                timer   : 3000
              });
            }
            else{
              $.ajax({
                type    : "POST",
                url     : "{{ url('backend/pages/competencies/store') }}",
                async   : true,
                dataType: "JSON",
                data    : {
                  kompetensi        : varName,
                  definisi          : varDefinisi,
                  p_mandiri         : varPMandiri,
                  p_bermitra        : varPMitra,
                  t_pelatihan       : varTTheme
                },
                success:function(data){
                  if(data.response == "success"){
                    $("#myModal").modal("hide");
                    swal({
                      type : "success",
                      title: "Success",
                      text : "Data has been saved",
                      timer: 3000
                    }).then(function(){
                      window.location = "{{ url('backend/pages/competencies') }}";
                    })
                  }
                  else if (data.response == "errors") {
                    swal({
                      type : "info",
                      title: "Required",
                      text : data.errors,
                      timer: 3000
                    })
                  }
                  else{
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

        $("#btn_edit").on("click", function(e){
          e.preventDefault(e);
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          var varId       = $("#id_jenis_competencies").val();
          var varName     = $("#name_jenis_competencies").val();
          var varDefinisi = CKEDITOR.instances["edit_definisi"].getData();
          var varPMandiri = CKEDITOR.instances["edit_p_mandiri"].getData();
          var varPMitra   = CKEDITOR.instances["edit_p_bermitra"].getData();
          var varTTheme   = CKEDITOR.instances["edit_t_pelatihan"].getData();

          try {
            $.ajax({
              type    : "PUT",
              url     : "{{ url('backend/pages/competencies/update') }}",
              async   : true,
              dataType: "JSON",
              data    : {
                id                  : varId,
                kompetensi          : varName,
                definisi            : varDefinisi,
                p_mandiri           : varPMandiri,
                p_bermitra          : varPMitra,
                t_pelatihan         : varTTheme
              },
              success:function(data){

                if(data.response == "success"){
                  $("#editModal").modal("hide");
                  swal({
                    type : "success",
                    title: "Success",
                    text : "Data has been updated",
                    timer: 3000
                  }).then(function(){
                    window.location = "{{ url('backend/pages/competencies') }}";
                  })
                }
                else if (data.response == "errors") {
                  swal({
                    type : "info",
                    title: "Required",
                    text : data.errors,
                    timer: 3000
                  })
                }
                else{
                  swal({
                    type : "error",
                    title: "Error",
                    text : "Failed updating the data",
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
          var varId = $("#id_jenis_competencies").val();
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
                  url       : "{{ url('backend/pages/competencies/delete') }}",
                  async     : true,
                  dataType  : "JSON",
                  data      : {
                    id      : varId
                  },
                  success:function(data){
                    // console.log(data);
                    if(data.response == "success"){
                      $("#editModal").modal("hide")
                      swal(
                        'Deleted!',
                        'Data has been deleted.',
                        'success'
                      ).then(function(){
                        window.location = "{{ url('backend/pages/competencies') }}";
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
