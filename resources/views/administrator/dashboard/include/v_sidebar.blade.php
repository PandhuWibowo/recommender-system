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
                              <a title="Home" href="{{ url('backend/pages/home') }}" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Home</span></a>
                          </li>
                          <li>
                              <a title="All of Administrators" href="{{ url('backend/pages/administrator') }}" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Administrators</span></a>
                          </li>
                          <li>
                              <a title="All of Users" href="{{ url('backend/pages/users') }}" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Users</span></a>
                          </li>
                          <li>
                              <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Assesments</span></a>
                              <ul class="submenu-angle" aria-expanded="false">
                                  <li><a title="A. Type" href="{{ url('backend/pages/assesments') }}"><span class="mini-sub-pro">A. Type</span></a></li>
                                  <li><a title="A. Permission" href="{{ url('backend/pages/userassessments') }}"><span class="mini-sub-pro">A. Permission</span></a></li>
                                  <li><a title="Competencies Types" href="{{ url('backend/pages/competencies') }}"><span class="mini-sub-pro">Competencies Types</span></a></li>
                                  <li><a title="Questions" href="{{ url('backend/pages/questions') }}"><span class="mini-sub-pro">Questions</span></a></li>
                                  <li><a title="Scores" href="{{ url('backend/pages/scoredescriptions') }}"><span class="mini-sub-pro">Scores</span></a></li>
                                  <!-- <li><a title="Description Summary" href="{{ url("backend/pages/descriptionresults") }}"><span class="mini-sub-pro">Description Summary</span></a></li> -->
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
                            <a title="Home" href="{{ url('user/pages/home') }}" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Home</span></a>
                        </li>
                        <li>
                            <a title="Assessments" href="{{ url('user/pages/assesments') }}" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Assesments</span></a>
                        </li>
                        <li>
                            <a title="Histories" href="{{ url('user/pages/histories') }}" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Histories</span></a>
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
