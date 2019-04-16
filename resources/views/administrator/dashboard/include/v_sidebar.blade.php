@if(Session::has("login"))
  @if(Session::get("level") == "Super Admin")
    <!-- Start Left menu area -->
      <div class="left-sidebar-pro">
          <nav id="sidebar" class="">
              <div class="sidebar-header">
                  <!-- <a href="{{ url('backend/pages/home') }}"><img class="main-logo img-responsive" width="0" src="{!! asset('images/icon.png') !!}" alt="" /></a>
                  <strong><a href="{{ url('backend/pages/home') }}"><img width="0" class="img-responsive" src="{!! asset('images/icon.png') !!}" alt="" /></a></strong> -->
              </div>
              <div class="left-custom-menu-adp-wrap comment-scrollbar">
                  <nav class="sidebar-nav left-sidebar-menu-pro">
                      <ul class="metismenu" id="menu1">
                          <li>
                              <a class="has-arrow" href="{{ url('backend/pages/home') }}">
                                 <span class="educate-icon educate-home icon-wrap"></span>
                                 <span class="mini-click-non">Home</span>
                              </a>
                              <ul class="submenu-angle" aria-expanded="true">
                                  <li><a title="Dashboard" href="{{ url('backend/pages/home') }}"><span class="mini-sub-pro">Dashboard</span></a></li>
                              </ul>
                          </li>
                          <!-- <li>
                              <a title="Landing Page" href="events.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>
                          </li> -->
                          <li>
                              <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Administrators</span></a>
                              <ul class="submenu-angle" aria-expanded="false">
                                  <li><a title="All Administrators" href="{{ url('backend/pages/administrator') }}"><span class="mini-sub-pro">All Administrators</span></a></li>
                              </ul>
                          </li>
                          <li>
                              <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Users</span></a>
                              <ul class="submenu-angle" aria-expanded="false">
                                  <li><a title="All Users" href="{{ url('backend/pages/users') }}"><span class="mini-sub-pro">All Users</span></a></li>
                              </ul>
                          </li>
                          <li>
                              <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Assesments</span></a>
                              <ul class="submenu-angle" aria-expanded="false">
                                  <li><a title="All Jenis Assesments" href="{{ url('backend/pages/assesments') }}"><span class="mini-sub-pro">Type of Assesments</span></a></li>
                                  <li><a title="All User Assesments" href="{{ url('backend/pages/userassessments') }}"><span class="mini-sub-pro">User Assesments</span></a></li>
                                  <li>
                                      <a class="has-arrow" aria-expanded="false"><span class="mini-click-non">Linked Scale</span></a>
                                      <ul class="submenu-angle" aria-expanded="false">
                                          <li><a title="All Jenis Competencies" href="{{ url('backend/pages/competencies') }}"><span class="mini-sub-pro">Competencies Type</span></a></li>
                                          <li><a title="All Jenis Row Scores" href="{{ url('backend/pages/rowscores') }}"><span class="mini-sub-pro">Row Scores</span></a></li>
                                          <li><a title="All Questions" href="{{ url('backend/pages/questions') }}"><span class="mini-sub-pro">Questions</span></a></li>
                                          <li><a title="All Description of Score" href="{{ url('backend/pages/scoredescriptions') }}"><span class="mini-sub-pro">Description of Scores</span></a></li>
                                          <li><a title="Description Results" href="{{ url("backend/pages/descriptionresults") }}"><span class="mini-sub-pro">Description Results</span></a></li>
                                          <li><a title="Configuration" href="{{ url("backend/pages/configurations") }}"><span class="mini-sub-pro">Configurations</span></a></li>
                                      </ul>
                                  </li>
                                  <li>
                                      <a class="has-arrow" aria-expanded="false"><span class="mini-click-non">Typical Scale</span></a>
                                      <ul class="submenu-angle" aria-expanded="false">
                                          <li><a title="All Personalities" href="{{ url('backend/pages/personalities') }}"><span class="mini-sub-pro">Form</span></a></li>
                                          <li><a title="All Selfhood Questions" href="{{ url('backend/pages/selfhood/questions') }}"><span class="mini-sub-pro">Questions</span></a></li>
                                          <li><a title="Configurations" href="{{ url("backend/pages/configurations/session/two") }}"><span class="mini-sub-pro">Configurations</span></a></li>
                                          <li><a title="Types" href="{{ url("backend/pages/types") }}"><span class="mini-sub-pro">Types</span></a></li>
                                          <li><a title="Model Types" href="{{ url("backend/pages/model/types") }}"><span class="mini-sub-pro">Detail Types</span></a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                          <li>
                              <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Partnerships</span></a>
                              <ul class="submenu-angle" aria-expanded="false">
                                  <li><a title="Partnership" href="{{ url('backend/pages/partnerships') }}"><span class="mini-sub-pro">Partnerships</span></a></li>
                              </ul>
                          </li>
                          <li>
                              <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Testimonial</span></a>
                              <ul class="submenu-angle" aria-expanded="false">
                                  <li><a title="Testimonial" href="{{ url('backend/pages/testimonial') }}"><span class="mini-sub-pro">Testimonial</span></a></li>
                              </ul>
                          </li>

                          <li>
                              <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Features</span></a>
                              <ul class="submenu-angle" aria-expanded="false">
                                  <li><a title="Features" href="{{ url('backend/pages/features') }}"><span class="mini-sub-pro">Features</span></a></li>
                              </ul>
                          </li>

                          <li>
                              <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Histories</span></a>
                              <ul class="submenu-angle" aria-expanded="false">
                                  <li><a title="All Histories" href="{{ url('backend/pages/histories') }}"><span class="mini-sub-pro">Log Histories</span></a></li>
                              </ul>
                          </li>
                      </ul>
                  </nav>
              </div>
          </nav>
      </div>
      <!-- End Left menu area -->
  @else
  <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <!-- <a href="{{ url('user/pages/home') }}"><img class="main-logo" src="{!! asset('assets/assets_admin/img/logo/logo.png') !!}" alt="" /></a>
                <strong><a href="{{ url('user/pages/home') }}"><img src="{!! asset('assets/assets_admin/img/logo/logosn.png') !!}" alt="" /></a></strong> -->
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="{{ url('user/pages/home') }}">
                               <span class="educate-icon educate-home icon-wrap"></span>
                               <span class="mini-click-non">Home</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard" href="{{ url('user/pages/home') }}"><span class="mini-sub-pro">Dashboard</span></a></li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a title="Landing Page" href="events.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>
                        </li> -->
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Assesments</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Assesments" href="{{ url('user/pages/assesments') }}"><span class="mini-sub-pro">Assesments</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Histories</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Histories" href="{{ url('user/pages/histories') }}"><span class="mini-sub-pro">Log Histories</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
  @endif
@else
  <!-- <script type="text/javascript">
    $(document).ready(function(){
      window.location.href = "{{ url('backend/pages/signin') }}";
    });
  </script> -->
  <!-- Masih belum bisa direct -->
@endif
