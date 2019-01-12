
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Loopinc.id</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('assets/assets_admin/img/favicon.ico') !!}">
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
    <!-- touchspin CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/touchspin/jquery.bootstrap-touchspin.min.css') !!}">
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/datapicker/datepicker3.css') !!}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/form/themesaller-forms.css') !!}">
    <!-- colorpicker CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/colorpicker/colorpicker.css') !!}">
    <!-- select2 CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/select2/select2.min.css') !!}">
    <!-- chosen CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/chosen/bootstrap-chosen.css') !!}">
    <!-- ionRangeSlider CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/ionRangeSlider/ion.rangeSlider.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/assets_admin/css/ionRangeSlider/ion.rangeSlider.skinFlat.css') !!}">
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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">
    <style>
    .inline-option {
      border: none;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      margin: 4px 40px;
      cursor: pointer;
    }
    </style>
</head>

<body>

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
                                            <li><span class="bread-blod">Add Question</span>
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
        <!-- Advanced Form Start -->
        <div class="advanced-form-area mg-b-15">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <button type="button" class="btn btn-danger" id="btn_delete_pertanyaan" data-id="{{Crypt::encrypt($pertanyaan->id)}}">Delete Question</button>
                                    <h1>Add Question</h1>
                                </div>
                            </div>
                            <div class="sparkline10-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="row">

                                        <form action="{{ url('backend/pages/questions/update') }}" method="post" autocomplete="off">
                                          {{ csrf_field() }}
                                          {{ method_field('PUT') }}
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                              @if($errors->has('pertanyaan'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Oh snap!</strong> {{$errors->first('pertanyaan')}}
                                                </div>
                                              @endif
                                              @if($errors->has('assesment_id'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Oh snap!</strong> {{$errors->first('assesment_id')}}
                                                </div>
                                              @endif
                                              @if($errors->has('kompetensi_id'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Oh snap!</strong> {{$errors->first('kompetensi_id')}}
                                                </div>
                                              @endif
                                              @if($errors->has('rowscore_id'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Oh snap!</strong> {{$errors->first('rowscore_id')}}
                                                </div>
                                              @endif

                                              <div class="chosen-select-single mg-b-20">
                                                  <input type="hidden" class="form-control" id="id" name="id" placeholder="Id" value="{{Crypt::encrypt($pertanyaan->id)}}" readonly>

                                                  <!-- <textarea class="form-control" rows="5" id="jawaban_id" style="height: 150px;" name="jawaban_id" placeholder="Question"></textarea> -->
                                              </div>
                                              <div class="chosen-select-single mg-b-20">
                                                  <label>Assesment Type</label>
                                                  <select data-placeholder="Choose Assesment Type" id="assesment_id" name="assesment_id" class="chosen-select" tabindex="-1">
                                                    @foreach($assesments as $row)
                                                      <option value="{{$row->id}}" <?php echo ($row->id == $pertanyaan->assesment_id) ? "selected" : "";?>>{{$row->nama}}</option>
                                                    @endforeach
                        													</select>
                                              </div>
                                              <div class="chosen-select-single mg-b-20">
                                                  <label>Competencies Type</label>
                                                  <select data-placeholder="Choose Competency Type" id="kompetensi_id" name="kompetensi_id" class="chosen-select" tabindex="-1">
                                                    @foreach($kompetensi as $row)
                                                      <option value="{{$row->id}}" <?php echo ($row->id == $pertanyaan->kompetensi_id) ? "selected" : "";?>>{{$row->kompetensi}}</option>
                                                    @endforeach
                        													</select>
                                              </div>

                                              <div class="chosen-select-single mg-b-20">
                                                  <label>RowScores Type</label>
                                                  <select data-placeholder="Choose Competency Type" id="rowscore_id" name="rowscore_id" class="chosen-select" tabindex="-1">
                                                    @foreach($rowscore as $row)
                                                      <option value="{{$row->id}}" <?php echo ($row->id == $pertanyaan->rowscore_id) ? "selected" : "";?>>{{$row->nama_rowscore}}</option>
                                                    @endforeach
                        													</select>
                                              </div>

                                              <div class="chosen-select-single mg-b-20">
                                                  <label>Question</label>
                                                  <textarea class="form-control" rows="5" id="pertanyaan" style="height: 150px;" name="pertanyaan" placeholder="Question">{{$pertanyaan->pertanyaan}}</textarea>
                                              </div>

                                              <div class="chosen-select-single mg-b-20">
                                                  <label>Sequence Number to</label>
                                                  <input class="form-control" type="number" min="1" id="no_urut_pertanyaan" name="no_urut_pertanyaan" placeholder="Sequence Number to" value="{{$pertanyaan->no_urut_pertanyaan}}">
                                              </div>

                                              <div class="input-group-btn inline-option">
                                                  <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                              </div>

                                              <div class="inline-option">
                                                <div class="chosen-select-single mg-b-20">
                                                    <select data-placeholder="Choose Answer Model (Option)" data-jawaban_id="{{Crypt::encrypt($pertanyaan->id)}}" id="model_answer" name="model_answer" class="chosen-select" tabindex="-1">
                                                      <option></option>
                                                      <option value="1">Agree/Disgree</option>
                                                      <option value="2">True/False</option>
                          													</select>
                                                </div>
                                              </div>

                                              <div class="model-answer"></div>
                                              <div class="model-truefalse"></div>
                                              <div class="after-add-more type_answer">
                                                <div class="control-group" style="margin-top:10px">
                                                <?php $h = 0;?>
                                                @foreach($pertanyaan->data_jawabans as $key=>$row)
                                                  <div class="chosen-select-single mg-b-20">
                                                      <input type="hidden" min="0" class="form-control jawaban_id" id="jawaban_id" name="jawaban_id[]" placeholder="Answer Id" value="{{Crypt::encrypt($row->id)}}">
                                                  </div>
                                                  <div class="chosen-select-single mg-b-20">
                                                      <label>Answer</label>
                                                      <textarea class="form-control disabled-jawaban<?php echo $h;?>" rows="5" id="jawaban" name="jawaban[]" style="height: 150px;" name="answer" placeholder="Answer">{{$row->jawaban}}</textarea>
                                                  </div>

                                                  <div class="chosen-select-single mg-b-20">
                                                      <label>Score</label>
                                                      <input type="number" min="0" class="form-control disabled-nilai<?php echo $h;?>" id="nilai" name="nilai[]" placeholder="Score" value="{{$row->nilai}}">
                                                  </div>

                                                  <div class="input-group-btn">
                                                      <button class="btn btn-danger btn_delete" data-jawaban_id="{{Crypt::encrypt($row->id)}}" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                                  </div>
                                                  <?php $h++;?>
                                                @endforeach
                                                  <input type="hidden" name="" id="count" value="{{count($pertanyaan->data_jawabans)}}">
                                                </div>
                                              </div>

                                              <div class="copy hide">
                                                <div class="control-group input-group" style="margin-top:10px">
                                                <div class="chosen-select-single mg-b-20">
                                                    <label>Answer</label>
                                                    <textarea class="form-control" rows="5" id="jawaban" name="jawaban[]" style="height: 150px;" name="answer" placeholder="Answer"></textarea>
                                                </div>

                                                <div class="chosen-select-single mg-b-20">
                                                    <label>Score</label>
                                                    <input type="number" min="0" class="form-control" id="nilai" name="nilai[]" placeholder="Score">
                                                </div>

                                                <div class="input-group-btn">
                                                    <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                                </div>
                                              </div>
                                              </div>

                                              <br>
                                              <button type="submit" id="btn_save" class="btn btn-primary">Save</button>

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
        <!-- Advanced Form End-->
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
    <!-- touchspin JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/touchspin/jquery.bootstrap-touchspin.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/touchspin/touchspin-active.js') !!}"></script>
    <!-- colorpicker JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/colorpicker/jquery.spectrum.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/colorpicker/color-picker-active.js') !!}"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/datapicker/bootstrap-datepicker.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/datapicker/datepicker-active.js') !!}"></script>
    <!-- input-mask JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/input-mask/jasny-bootstrap.min.js') !!}"></script>
    <!-- chosen JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/chosen/chosen.jquery.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/chosen/chosen-active.js') !!}"></script>
    <!-- select2 JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/select2/select2.full.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/select2/select2-active.js') !!}"></script>
    <!-- ionRangeSlider JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/ionRangeSlider/ion.rangeSlider.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/ionRangeSlider/ion.rangeSlider.active.js') !!}"></script>
    <!-- rangle-slider JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/rangle-slider/jquery-ui-1.10.4.custom.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/rangle-slider/jquery-ui-touch-punch.min.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/rangle-slider/rangle-active.js') !!}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{!! asset('assets/assets_admin/js/knob/jquery.knob.js') !!}"></script>
    <script src="{!! asset('assets/assets_admin/js/knob/knob-active.js') !!}"></script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js" charset="utf-8"></script>

    <script>
        $(document).ready(function () {
            $(".assesment_id").select2({
                placeholder: "Please select type of assesment",
                allowClear: true
            });

            $(".kompetensi_id").select2({
                placeholder: "Please select competencie",
                allowClear: true
            });

            $(".rowscore_id").select2({
                placeholder: "Please select row score",
                allowClear: true
            });
        });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#model_answer").on("change", function(){
          var varPertanyaanId = $(this).data("jawaban_id");
          var count = $("#count").val();

          for(var i=0;i<count;i++){
            $(".disabled-jawaban"+i).attr("disabled", "disabled");
            $(".disabled-nilai"+i).attr("disabled", "disabled");
          }
          // console.log(varPertanyaanId);
          var varModelId = $(this).val();
          if(varModelId == 1 || varModelId == "1"){
            $(".type_answer").hide();
            var html = "";
            html+='<div class="after-add-more model-answer">'+
              '<div class="chosen-select-single mg-b-20">'+
                  '<label>Answer</label>'+
                  '<textarea class="form-control" rows="5" id="jawaban" name="jawaban[]" style="height: 150px;" name="answer" placeholder="Answer">Strongly Disagree</textarea>'+
              '</div>'+
              '<div class="chosen-select-single mg-b-20">'+
                  '<label>Score</label>'+
                  '<input type="number" min="0" class="form-control" id="nilai" name="nilai[]" placeholder="Score">'+
              '</div>'+
              '<div class="chosen-select-single mg-b-20">'+
                  '<label>Answer</label>'+
                  '<textarea class="form-control" rows="5" id="jawaban" name="jawaban[]" style="height: 150px;" name="answer" placeholder="Answer">Disagree</textarea>'+
              '</div>'+
              '<div class="chosen-select-single mg-b-20">'+
                  '<label>Score</label>'+
                  '<input type="number" min="0" class="form-control" id="nilai" name="nilai[]" placeholder="Score">'+
              '</div>'+
              '<div class="chosen-select-single mg-b-20">'+
                  '<label>Answer</label>'+
                  '<textarea class="form-control" rows="5" id="jawaban" name="jawaban[]" style="height: 150px;" name="answer" placeholder="Answer">Agree</textarea>'+
              '</div>'+
              '<div class="chosen-select-single mg-b-20">'+
                  '<label>Score</label>'+
                  '<input type="number" min="0" class="form-control" id="nilai" name="nilai[]" placeholder="Score">'+
              '</div>'+
              '<div class="chosen-select-single mg-b-20">'+
                  '<label>Answer</label>'+
                  '<textarea class="form-control" rows="5" id="jawaban" name="jawaban[]" style="height: 150px;" name="answer" placeholder="Answer">Strongly Agree</textarea>'+
              '</div>'+
              '<div class="chosen-select-single mg-b-20">'+
                  '<label>Score</label>'+
                  '<input type="number" min="0" class="form-control" id="nilai" name="nilai[]" placeholder="Score">'+
              '</div>'+
            '</div>';


            $(".model-answer").html(html);
          }
          else if(varModelId == 2 || varModelId == "2"){
            $(".type_answer").hide();
            $(".model-answer").hide();
            var html = "";
            html+='<div class="after-add-more model-answer">'+
              '<div class="chosen-select-single mg-b-20">'+
                  '<label>Answer</label>'+
                  '<textarea class="form-control" rows="5" id="jawaban" name="jawaban[]" style="height: 150px;" name="answer" placeholder="Answer">True</textarea>'+
              '</div>'+
              '<div class="chosen-select-single mg-b-20">'+
                  '<label>Score</label>'+
                  '<input type="number" min="0" class="form-control" id="nilai" name="nilai[]" placeholder="Score">'+
              '</div>'+
              '<div class="chosen-select-single mg-b-20">'+
                  '<label>Answer</label>'+
                  '<textarea class="form-control" rows="5" id="jawaban" name="jawaban[]" style="height: 150px;" name="answer" placeholder="Answer">False</textarea>'+
              '</div>'+
              '<div class="chosen-select-single mg-b-20">'+
                  '<label>Score</label>'+
                  '<input type="number" min="0" class="form-control" id="nilai" name="nilai[]" placeholder="Score">'+
              '</div>'+
            '</div>';
            $(".model-truefalse").html(html);
          }
        })
      })
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
          $(".add-more").click(function(){
              var html = $(".copy").html();
              $(".after-add-more").after(html);
          });
          $("body").on("click",".remove",function(){
              $(this).parents(".control-group").remove();
          });
        });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#btn_delete_pertanyaan").on("click", function(){
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

          var varPertanyaanId = $(this).data("id");

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
                    id      : varPertanyaanId
                  },
                  success:function(data){
                    console.log(data);
                    if(data.response == "success"){
                      swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      ).then(function(){
                        window.location = "{{ url('backend/pages/questions') }}";
                      });
                    }
                    else if (data.response == "failed") {
                      swal(
                        'Failed!',
                        'The question failed to be deleted.',
                        'error'
                      );
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


        $(".btn_delete").on("click", function(){
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          var varId           = $(this).data("jawaban_id");
          var varPertanyaanId = $("#id").val();

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
                  url       : "{{ url('backend/pages/answers/delete') }}",
                  async     : true,
                  dataType  : "JSON",
                  data      : {
                    id      : varId
                  },
                  success:function(data){
                    // console.log(data);
                    if(data.response == "success"){
                      swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      ).then(function(){
                        window.location = "{{ url('backend/pages/questions') }}"+"/"+varPertanyaanId;
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
