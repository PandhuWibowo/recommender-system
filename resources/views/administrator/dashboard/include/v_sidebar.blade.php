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
                                  <!-- <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Add Professor</span></a></li>
                                  <li><a title="Edit Professor" href="edit-professor.html"><span class="mini-sub-pro">Edit Professor</span></a></li>
                                  <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Professor Profile</span></a></li> -->
                              </ul>
                          </li>
                          <li>
                              <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Users</span></a>
                              <ul class="submenu-angle" aria-expanded="false">
                                  <li><a title="All Users" href="{{ url('backend/pages/users') }}"><span class="mini-sub-pro">All Users</span></a></li>
                                  <!-- <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Add Student</span></a></li>
                                  <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Edit Student</span></a></li>
                                  <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Student Profile</span></a></li> -->
                              </ul>
                          </li>
                          <li>
                              <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Assesments</span></a>
                              <ul class="submenu-angle" aria-expanded="false">
                                  <li><a title="All Jenis Assesments" href="{{ url('backend/pages/assesments') }}"><span class="mini-sub-pro">Type of Assesments</span></a></li>
                                  <li><a title="All Jenis Competencies" href="{{ url('backend/pages/competencies') }}"><span class="mini-sub-pro">Type of Competencies</span></a></li>
                                  <li><a title="All Jenis Row Scores" href="{{ url('backend/pages/rowscores') }}"><span class="mini-sub-pro">Row Scores</span></a></li>
                                  <li><a title="All Questions" href="{{ url('backend/pages/questions') }}"><span class="mini-sub-pro">Questions</span></a></li>
                                  <li><a title="All Description of Score" href="{{ url('backend/pages/scoredescriptions') }}"><span class="mini-sub-pro">Description of Scores</span></a></li>
                                  <li><a title="All User Assesments" href="{{ url('backend/pages/userassessments') }}"><span class="mini-sub-pro">User Assesments</span></a></li>
                                  <li><a title="Competency Results" href="{{ url("backend/pages/competenciesresults") }}"><span class="mini-sub-pro">Competency Results</span></a></li>
                              </ul>
                          </li>
                          <li>
                              <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Histories</span></a>
                              <ul class="submenu-angle" aria-expanded="false">
                                  <li><a title="All Histories" href="{{ url('backend/pages/histories') }}"><span class="mini-sub-pro">Log Histories</span></a></li>
                                  <!-- <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Add Student</span></a></li>
                                  <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Edit Student</span></a></li>
                                  <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Student Profile</span></a></li> -->
                              </ul>
                          </li>
                          <!--
                          <li>
                              <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Charts</span></a>
                              <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                  <li><a title="Bar Charts" href="bar-charts.html"><span class="mini-sub-pro">Bar Charts</span></a></li>
                                  <li><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Line Charts</span></a></li>
                                  <li><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Area Charts</span></a></li>
                                  <li><a title="Rounded Charts" href="rounded-chart.html"><span class="mini-sub-pro">Rounded Charts</span></a></li>
                                  <li><a title="C3 Charts" href="c3.html"><span class="mini-sub-pro">C3 Charts</span></a></li>
                                  <li><a title="Sparkline Charts" href="sparkline.html"><span class="mini-sub-pro">Sparkline Charts</span></a></li>
                                  <li><a title="Peity Charts" href="peity.html"><span class="mini-sub-pro">Peity Charts</span></a></li>
                              </ul>
                          </li>
                          <li>
                              <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Data Tables</span></a>
                              <ul class="submenu-angle" aria-expanded="false">
                                  <li><a title="Peity Charts" href="static-table.html"><span class="mini-sub-pro">Static Table</span></a></li>
                                  <li><a title="Data Table" href="data-table.html"><span class="mini-sub-pro">Data Table</span></a></li>
                              </ul>
                          </li>
                          <li>
                              <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">Forms Elements</span></a>
                              <ul class="submenu-angle form-mini-nb-dp" aria-expanded="false">
                                  <li><a title="Basic Form Elements" href="basic-form-element.html"><span class="mini-sub-pro">Bc Form Elements</span></a></li>
                                  <li><a title="Advance Form Elements" href="advance-form-element.html"><span class="mini-sub-pro">Ad Form Elements</span></a></li>
                                  <li><a title="Password Meter" href="password-meter.html"><span class="mini-sub-pro">Password Meter</span></a></li>
                                  <li><a title="Multi Upload" href="multi-upload.html"><span class="mini-sub-pro">Multi Upload</span></a></li>
                                  <li><a title="Text Editor" href="tinymc.html"><span class="mini-sub-pro">Text Editor</span></a></li>
                                  <li><a title="Dual List Box" href="dual-list-box.html"><span class="mini-sub-pro">Dual List Box</span></a></li>
                              </ul>
                          </li>
                          <li>
                              <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap"></span> <span class="mini-click-non">App views</span></a>
                              <ul class="submenu-angle app-mini-nb-dp" aria-expanded="false">
                                  <li><a title="Notifications" href="notifications.html"><span class="mini-sub-pro">Notifications</span></a></li>
                                  <li><a title="Alerts" href="alerts.html"><span class="mini-sub-pro">Alerts</span></a></li>
                                  <li><a title="Modals" href="modals.html"><span class="mini-sub-pro">Modals</span></a></li>
                                  <li><a title="Buttons" href="buttons.html"><span class="mini-sub-pro">Buttons</span></a></li>
                                  <li><a title="Tabs" href="tabs.html"><span class="mini-sub-pro">Tabs</span></a></li>
                                  <li><a title="Accordion" href="accordion.html"><span class="mini-sub-pro">Accordion</span></a></li>
                              </ul>
                          </li>
                          <li id="removable">
                              <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Pages</span></a>
                              <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                  <li><a title="Login" href="login.html"><span class="mini-sub-pro">Login</span></a></li>
                                  <li><a title="Register" href="register.html"><span class="mini-sub-pro">Register</span></a></li>
                                  <li><a title="Lock" href="lock.html"><span class="mini-sub-pro">Lock</span></a></li>
                                  <li><a title="Password Recovery" href="password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
                                  <li><a title="404 Page" href="404.html"><span class="mini-sub-pro">404 Page</span></a></li>
                                  <li><a title="500 Page" href="500.html"><span class="mini-sub-pro">500 Page</span></a></li>
                              </ul>
                          </li> -->
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
                                <!-- <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Add Professor</span></a></li>
                                <li><a title="Edit Professor" href="edit-professor.html"><span class="mini-sub-pro">Edit Professor</span></a></li>
                                <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Professor Profile</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Histories</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Histories" href="{{ url('user/pages/histories') }}"><span class="mini-sub-pro">Log Histories</span></a></li>
                                <!-- <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Add Student</span></a></li>
                                <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Edit Student</span></a></li>
                                <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Student Profile</span></a></li> -->
                            </ul>
                        </li>

                        <!--
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Charts</span></a>
                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                <li><a title="Bar Charts" href="bar-charts.html"><span class="mini-sub-pro">Bar Charts</span></a></li>
                                <li><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Line Charts</span></a></li>
                                <li><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Area Charts</span></a></li>
                                <li><a title="Rounded Charts" href="rounded-chart.html"><span class="mini-sub-pro">Rounded Charts</span></a></li>
                                <li><a title="C3 Charts" href="c3.html"><span class="mini-sub-pro">C3 Charts</span></a></li>
                                <li><a title="Sparkline Charts" href="sparkline.html"><span class="mini-sub-pro">Sparkline Charts</span></a></li>
                                <li><a title="Peity Charts" href="peity.html"><span class="mini-sub-pro">Peity Charts</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Data Tables</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="static-table.html"><span class="mini-sub-pro">Static Table</span></a></li>
                                <li><a title="Data Table" href="data-table.html"><span class="mini-sub-pro">Data Table</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">Forms Elements</span></a>
                            <ul class="submenu-angle form-mini-nb-dp" aria-expanded="false">
                                <li><a title="Basic Form Elements" href="basic-form-element.html"><span class="mini-sub-pro">Bc Form Elements</span></a></li>
                                <li><a title="Advance Form Elements" href="advance-form-element.html"><span class="mini-sub-pro">Ad Form Elements</span></a></li>
                                <li><a title="Password Meter" href="password-meter.html"><span class="mini-sub-pro">Password Meter</span></a></li>
                                <li><a title="Multi Upload" href="multi-upload.html"><span class="mini-sub-pro">Multi Upload</span></a></li>
                                <li><a title="Text Editor" href="tinymc.html"><span class="mini-sub-pro">Text Editor</span></a></li>
                                <li><a title="Dual List Box" href="dual-list-box.html"><span class="mini-sub-pro">Dual List Box</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap"></span> <span class="mini-click-non">App views</span></a>
                            <ul class="submenu-angle app-mini-nb-dp" aria-expanded="false">
                                <li><a title="Notifications" href="notifications.html"><span class="mini-sub-pro">Notifications</span></a></li>
                                <li><a title="Alerts" href="alerts.html"><span class="mini-sub-pro">Alerts</span></a></li>
                                <li><a title="Modals" href="modals.html"><span class="mini-sub-pro">Modals</span></a></li>
                                <li><a title="Buttons" href="buttons.html"><span class="mini-sub-pro">Buttons</span></a></li>
                                <li><a title="Tabs" href="tabs.html"><span class="mini-sub-pro">Tabs</span></a></li>
                                <li><a title="Accordion" href="accordion.html"><span class="mini-sub-pro">Accordion</span></a></li>
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a title="Login" href="login.html"><span class="mini-sub-pro">Login</span></a></li>
                                <li><a title="Register" href="register.html"><span class="mini-sub-pro">Register</span></a></li>
                                <li><a title="Lock" href="lock.html"><span class="mini-sub-pro">Lock</span></a></li>
                                <li><a title="Password Recovery" href="password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
                                <li><a title="404 Page" href="404.html"><span class="mini-sub-pro">404 Page</span></a></li>
                                <li><a title="500 Page" href="500.html"><span class="mini-sub-pro">500 Page</span></a></li>
                            </ul>
                        </li> -->
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
