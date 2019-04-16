
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


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <style media="screen">
      table.dataTable thead th {
        border-bottom: 0;
      }
      table.dataTable tfoot th {
        border-top: 0;
      }

      table.dataTable.no-footer {
        border-bottom: 0;
      }
    </style>
    <style>
    input[type=radio] {
      float: left;
    }

    .jawaban {
      margin-left: 30px;
      display: block;
    }

    label {
        font-weight: normal !important;
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
    <style media="screen">
      .btn {
         border-radius: 0px !important;
      }

      .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
          border-radius: 0;
          background: #e2725b;
      }

     .input-group, .opsi_jawaban{
        cursor: pointer;
      }

      .form-radio
      {
           -webkit-appearance: none;
           -moz-appearance: none;
           appearance: none;
           display: inline-block;
           position: relative;
           background-color: #f1f1f1;
           color: #666;
           /* top: 10px; */
           height: 25px;
           width: 30px;
           border: 0;
           border-radius: 50px;
           cursor: pointer;
           margin-right: 7px;
           outline: none;
      }
      .form-radio:checked::before
      {
           position: absolute;
           font: 13px/1 'Open Sans', sans-serif;
           left: 11px;
           top: 3px;
           content: '\02143';
           transform: rotate(40deg);
           color:#fff;
      }
      .form-radio:hover
      {
           background-color: #f7f7f7;
      }
      .form-radio:checked
      {
           background-color: #e2725b;
      }
      label
      {
           font: 15px/1.7 'Open Sans', sans-serif;
           color: #333;
           -webkit-font-smoothing: antialiased;
           -moz-osx-font-smoothing: grayscale;
           cursor: pointer;
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
                                            <!-- Trigger the modal with a button -->
                                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalInfos" data-backdrop="static" data-keyboard="false">Check the rules</button>
                                            <!-- Modal -->
                                            <div id="modalInfos" class="modal fade" role="dialog">
                                              <div class="modal-dialog modal-lg">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                                    <h4 class="modal-title">
                                                      <center>INSTRUKSI</center>
                                                    </h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <span>Tes ini terdiri dari 16 set soal. Dalam setiap set soal, terdapat 4 pernyataan.</span><br>
                                                    <span>Kerjakan setiap set soal yang ada dengan tahapan sebagai berikut : 	</span>
                                                    <table>
                                                      <thead>
                                                        <tr>
                                                          <th></th>
                                                          <th></th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <td>1.</td>
                                                          <td>&nbsp Baca dengan seksama seluruh pernyataan yang ada di tiap set soal.</td>
                                                        </tr>
                                                        <tr>
                                                          <td>2.</td>
                                                          <td>&nbsp Pilih 1 dari 4 pernyataan yang Anda anggap PALING menggambarkan diri Anda terkait aktivitas belajar. Hal ini dapat mencakup hal yang paling sering Anda lakukan ataupun yang paling Anda sukai. </td>
                                                        </tr>
                                                        <tr>
                                                          <td>3.</td>
                                                          <td>&nbsp Untuk setiap set soal, Anda hanya boleh memilih 1 pernyataan yang PALING menggambarkan diri Anda terkait aktivitas belajar. </td>
                                                        </tr>
                                                        <tr>
                                                          <td>4.</td>
                                                          <td>&nbsp Pastikan hanya ada 1 pernyataan yang Anda klik, jangan ada set soal yang terlewat. Seluruh set soal harus terjawab.</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                    <p>
                                                      <center>Pada situasi tertentu, memang tidak mudah menemukan pernyataan yang benar-benar PALING menggambarkan diri Anda terkait aktivitas belajar.. Pilihlah yang paling mendekati. TIDAK ADA JAWABAN YANG BENAR MAUPUN SALAH DALAM TES INI. Pilihlah pernyataan yang menurut Anda paling sesuai dengan penilaian Anda terhadap diri Anda terkait aktivitas belajar.	</center>
                                                    </p>
                                                    <p>
                                                      <center>Mohon mengerjakan tes ini dengan sungguh-sungguh, dan tidak terdistraksi (terganggu) dengan aktivitas lain. Jawablah secara spontan, tidak terlalu lama dipikirkan, dan jadilah diri sendiri. Hasil akan semakin akurat apabila Anda jujur terhadap diri Anda sendiri dan menjawab dengan apa adanya. </center>
                                                    </p>

                                                    <p>
                                                      <label for="">
                                                        <center>
                                                          <b>
                                                            SELAMAT MENGERJAKAN
                                                          </b>
                                                        </center>
                                                      </label>
                                                    </p>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" id="put-cache-info" data-dismiss="modal" assessmentid="{{$decryptAssId}}">Mengerti</button>
                                                  </div>
                                                </div>

                                              </div>
                                            </div>
                                            @if($updateAssessmentCache[0] == "2")

                                            @else
                                              <!-- Modal -->
                                              <div id="modalInfo" class="modal fade" role="dialog">
                                                <div class="modal-dialog modal-lg">

                                                  <!-- Modal content-->
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                                      <h4 class="modal-title">
                                                        <center>INSTRUKSI</center>
                                                      </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                      <span>Tes ini terdiri dari 16 set soal. Dalam setiap set soal, terdapat 4 pernyataan.</span><br>
                                                      <span>Kerjakan setiap set soal yang ada dengan tahapan sebagai berikut : 	</span>
                                                      <table>
                                                        <thead>
                                                          <tr>
                                                            <th></th>
                                                            <th></th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>1.</td>
                                                            <td>&nbsp Baca dengan seksama seluruh pernyataan yang ada di tiap set soal.</td>
                                                          </tr>
                                                          <tr>
                                                            <td>2.</td>
                                                            <td>&nbsp Pilih 1 dari 4 pernyataan yang Anda anggap PALING menggambarkan diri Anda terkait aktivitas belajar. Hal ini dapat mencakup hal yang paling sering Anda lakukan ataupun yang paling Anda sukai. </td>
                                                          </tr>
                                                          <tr>
                                                            <td>3.</td>
                                                            <td>&nbsp Untuk setiap set soal, Anda hanya boleh memilih 1 pernyataan yang PALING menggambarkan diri Anda terkait aktivitas belajar. </td>
                                                          </tr>
                                                          <tr>
                                                            <td>4.</td>
                                                            <td>&nbsp Pastikan hanya ada 1 pernyataan yang Anda klik, jangan ada set soal yang terlewat. Seluruh set soal harus terjawab.</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                      <p>
                                                        <center>Pada situasi tertentu, memang tidak mudah menemukan pernyataan yang benar-benar PALING menggambarkan diri Anda terkait aktivitas belajar.. Pilihlah yang paling mendekati. TIDAK ADA JAWABAN YANG BENAR MAUPUN SALAH DALAM TES INI. Pilihlah pernyataan yang menurut Anda paling sesuai dengan penilaian Anda terhadap diri Anda terkait aktivitas belajar.	</center>
                                                      </p>
                                                      <p>
                                                        <center>Mohon mengerjakan tes ini dengan sungguh-sungguh, dan tidak terdistraksi (terganggu) dengan aktivitas lain. Jawablah secara spontan, tidak terlalu lama dipikirkan, dan jadilah diri sendiri. Hasil akan semakin akurat apabila Anda jujur terhadap diri Anda sendiri dan menjawab dengan apa adanya. </center>
                                                      </p>

                                                      <p>
                                                        <label for="">
                                                          <center>
                                                            <b>
                                                              SELAMAT MENGERJAKAN
                                                            </b>
                                                          </center>
                                                        </label>
                                                      </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-primary" id="put-cache-info" data-dismiss="modal" assessmentid="{{$decryptAssId}}">Mengerti</button>
                                                    </div>
                                                  </div>

                                                </div>
                                              </div>
                                            @endif
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
              @if($countQuestions > 0)
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1 style="text-align:center;">Assessment : {{$competencyType}}</h1>

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
                                                              <table class="table dataTable" id="datatables">
                                                                  <thead>
                                                                      <tr>
                                                                          <th width="5%" style="text-align:center;"></th>
                                                                          <!-- <th>Competencies</th> -->
                                                                          <th></th>
                                                                          <!-- Situation -->
                                                                          <!-- <th style="text-align:center;">Score</th> -->
                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                      <?php $x = 1;?>
                                                                      <?php $no = 1;?>
                                                                      @foreach($questions as $row)
                                                                        <tr>
                                                                          <td width="5%" style="text-align:center;">{{$no}}</td>

                                                                          <td style="text-align:justify;">
                                                                            <div class="form-group-inner">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                          @foreach($row->getJawabans as $key2=>$row2)

                                                                                          <div class="has-feedback">
                                                                                              <label class="input-group">
                                                                                                  <span class="input-group-addon">
                                                                                                    <input type="hidden" value="{{$decryptAssId}}" class="assessmentid"  name="assessmentid{{$x}}" id="assessmentid{{$x}}" required>
                                                                                                    <input type="hidden" value="{{$row2->selfhood_pertanyaan_id}}" class="pertanyaanid" name="pertanyaanid{{$x}}" id="pertanyaanid{{$x}}" required>
                                                                                                    <input type="hidden" value="{{$row2->id}}" class="jawabanid" name="jawabanid{{$x}}" id="jawabanid{{$x}}" required>
                                                                                                    <input type="hidden" value="{{$row2->kepribadian_id}}" class="kepribadian_id" name="kepribadian_id{{$x}}" id="kepribadian_id{{$x}}" required>

                                                                                                    <input type="radio" style="display:inline;" value="{{$row2->code_opsi_jawaban}}" class="opsi_jawaban form-radio" name="opsi_jawaban{{$x}}" id="opsi_jawaban{{$x}}" assessmentid="{{$decryptAssId}}" pertanyaanid="{{$row2->selfhood_pertanyaan_id}}" jawabanid="{{$row2->jawaban_id}}" <?php foreach($hasilJawaban as $key=>$vale) echo ($vale == $row2->id) ? 'checked' : '';?>>

                                                                                                  </span>
                                                                                                  <div class="form-control form-control-static">
                                                                                                    {{ucfirst($row2->opsi_jawaban)}}
                                                                                                  </div>
                                                                                                  <span class="glyphicon form-control-feedback "></span>
                                                                                              </label>
                                                                                          </div>
                                                                                            <!-- assessmentid="{{$decryptAssId}}" pertanyaanid="{{$row2->pertanyaan_id}}" jawabanid="{{$row2->id}}" <?php foreach($hasilJawaban as $key=>$vale) echo ($vale == $row2->id) ? 'checked' : '';?> -->

                                                                                          @endforeach

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

                                                              <div style="margin-top: 20px;">
                                                                <button style="margin-left:50%;" type="button" class="btn btn-primary" id="btn_save" data-count="{{$x}}">Save</button>
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

              @else
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="tab-content-details shadow-reset">
                          <img id="rightclick" src="{!! asset('images/images-users/confused.png') !!}" alt="" class="img-responsive" draggable="false" style="display: block;margin-left: auto;margin-right: auto;">
                          <h2>Oops, sorry...</h2>
                          <p>{{Session::get("first_name")}} {{Session::get("last_name")}}, all questions were still empty. Please contact administrator first. Thank you.</p>
                      </div>
                  </div>
              </div>
              @endif
            </div>
        </div>
        <!-- Basic Form End-->
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
    <!-- <script src="{!! asset('js/pagination.js') !!}" charset="utf-8"></script> -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //
      });
    </script>


    <script type="text/javascript">
      //Right Click image
      $(document).ready(function(){
        $('img').bind('contextmenu', function(e){
            return false;
        });
      });
    </script>

    <script type="text/javascript">


      $(document).ready(function(){
        var table = $("#datatables").DataTable({
          "pagingType": "simple",
          // "sPaginationType": "full_numbers",
          "searching": false,
          "pageLength": {{$batas}},
          "info":     false,
          dom: 'Bfrtip',
          "ordering": false,
          // stateSave: true,
          // // "bJQueryUI": true,
          // "fnStateSave": function (oSettings, oData) {
          //     localStorage.setItem('offersDataTables', JSON.stringify(oData));
          // },
          // "fnStateLoad": function (oSettings) {
          //     return JSON.parse(localStorage.getItem('offersDataTables'));
          // }
        });

        $(window).load(function(){
          $('#modalInfo').modal(
            {backdrop: 'static', keyboard: false}
          );
        });

        $(document).ready(function(){
          $("#put-cache-info").on("click", function(){
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            var varAssId         = $(this).attr("assessmentid");

            try {
              $.ajax({
                type      : "PUT",
                url       : "{{ url('user/pages/selfhood/questions/update/cache/info') }}",
                async     : true,
                dataType  : "JSON",
                cache     : true,
                data      : {
                  id          : varAssId,
                  modal_info  : "2"
                },
                success:function(data){
                  console.log(data);
                },
                error:function(data){
                  console.log(data);
                }
              });
            } catch (e) {
              console.log(e);
            } finally {

            }
          });
        });

        $(document).on("click", ".opsi_jawaban", function() {
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          var varOpsiJawaban   = table.$(this).val();
          var varAssId         = table.$(this).attr("assessmentid");
          var varPertanyaanId  = table.$(this).attr("pertanyaanid");
          var varJawabanId     = table.$(this).attr("jawabanid");
          // console.log(varOpsiJawaban);
          // console.log("Assessment ID : "+varAssId);
          // console.log("Pertanyaan ID : "+varPertanyaanId);
          // console.log("Jawaban ID : "+varJawabanId);

          try {
            $.ajax({
              type      : "POST",
              url       : "{{ url('user/pages/selfhood/questions/store') }}",
              async     : true,
              dataType  : "JSON",
              cache     : true,
              data      : {
                ass_id            : varAssId,
                nilai             : varOpsiJawaban,
                pertanyaan_id     : varPertanyaanId,
                jawaban_id        : varJawabanId
              },
              success:function(data){
                console.log(data);
              },
              error:function(data){
                console.log(data);
              }
            });
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
            var varJenisAssesmentId  = table.$("input[name=assessmentid"+i+"]").val();
            var varPertanyaanId      = table.$("input[name=pertanyaanid"+i+"]").val();
            var varJawabanId         = table.$("input[name=jawabanid"+i+"]").val();
            var varNilai             = table.$("input[name=nilai"+i+"]:checked").val();
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
              swal({
                title: 'Are you sure?',
                text: "Click yes to process your answers",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
              }).then((result) => {
                if(result.value){
                  $.ajax({
                    type      : "PUT",
                    url       : "{{ url('user/pages/questions/update') }}",
                    async     : true,
                    dataType  : "JSON",
                    cache     : true,
                    data      : {
                      id      : varJenisAssesmentId,
                      selesai : "1"
                      // "pertanyaan_id[]" : arrPertanyaanId,
                      // "jawaban_id[]"    : arrJawabanId,
                      // "nilai[]"         : arrNilai
                    },
                    success:function(data){
                      // if(data.response == "success"){
                      //   window.location.href="{{ url('user/pages/results/final') }}"+"/"+data.assId;
                      // }
                      // console.log(data);
                      if(data.response == "success"){
                        swal({
                          type      : "success",
                          title     : "Success",
                          timer     : 3000,
                        }).then(function(){
                          window.location.href="{{ url('user/pages/results/final') }}"+"/"+data.assId;
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
