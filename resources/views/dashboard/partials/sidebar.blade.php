            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>Menu</h3>
                  <ul class="nav side-menu">
                    <li><a href="/backboard" class="{{ Request::is('backboard') ? 'active' : '' }}"><i class="fa fa-home"></i> Dashboard </a></li>
                    <li><a href="/backboard/publishers" class="{{ Request::is('backboard/publishers*') ? 'active' : '' }}"><i class="fa fa-bar-chart"></i> Publisher Control </a></li>
                    <li><a href="/backboard/journals" class="{{ Request::is('backboard/journals*') ? 'active' : '' }}"><i class="fa fa-edit"></i> Journal Control </a></li>
                    <li><a href="/backboard/articles" class="{{ Request::is('backboard/articles*') ? 'active' : '' }}"><i class="fa fa-desktop"></i> Article Control </a></li>
                    <li><a href="/backboard/users" class="{{ Request::is('backboard/users*') ? 'active' : '' }}"><i class="fa fa-user"></i> Users Control </a></li>
                    <li><a href="/backboard/subjects" class="{{ Request::is('backboard/subjects*') ? 'active' : '' }}"><i class="fa fa-bar-chart-o"></i> Subject Control </a></li>
                  </ul>
                </div>

              </div>
              <!-- /sidebar menu -->