<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../../dashboard/images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela!</title>

    <!-- Bootstrap -->
    <link href="../../dashboard/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../dashboard/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../dashboard/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../dashboard/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../../dashboard/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../dashboard/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../../dashboard/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../dashboard/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Research Articles</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img class="profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ auth()->user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

@include('dashboard.partials.sidebar')

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="../../dashboard/images/img.jpg" alt="">John Doe
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="/profile/{{ auth()->user()->id }}"> Profile</a>
                    <a class="dropdown-item"  href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

@yield('main')

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../../dashboard/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../dashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../../dashboard/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../dashboard/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../../dashboard/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../../dashboard/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../dashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../dashboard/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../../dashboard/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../../dashboard/vendors/Flot/jquery.flot.js"></script>
    <script src="../../dashboard/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../../dashboard/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../../dashboard/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../../dashboard/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../../dashboard/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../../dashboard/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../../dashboard/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../../dashboard/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../../dashboard/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../../dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../../dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../dashboard/vendors/moment/min/moment.min.js"></script>
    <script src="../../dashboard/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../dashboard/build/js/custom.min.js"></script>

  </body>
</html>
