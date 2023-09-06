<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  
  <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
 <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"></i> <span>TRÀ TIẾN YÊN</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic" >
              <img src="<?php echo BASE_URL ?>/public/images/avatar.jpg" width="100" height="100" style="border-radius: 40%; margin-left:10px" alt="Profile Picture">
              </div>
              <div class="profile_info">
                <span style="font-size: 16px; margin-left: 30px">Welcome </span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li style = "font-size: 16px"><a><i class="fa fa-home"></i> Danh mục bài viết <span class="fa fa-chevron-down" ></span ></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo BASE_URL ?>/post/add_category">Thêm</a></li>
                      <li><a href="<?php echo BASE_URL ?>/post/list_category">Liệt kê</a></li>
                    </ul>
                  </li>
                  <li style = "font-size: 16px"><a><i class="fa fa-edit"></i> Bài viết <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo BASE_URL ?>/post/list_post">Liệt kê</a></li>
                      <li><a href="<?php echo BASE_URL ?>/post/add_post">Thêm</a></li>
                      
                    </ul>
                  </li>
                  <li style = "font-size: 16px"><a><i class="fa fa-desktop"></i> Danh mục sản phẩm <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo BASE_URL ?>/product/add_category">Thêm</a></li>
                      <li><a href="<?php echo BASE_URL ?>/product/list_category">Liệt kê</a></li>
                    </ul>
                  </li>
                  <li style = "font-size: 16px"><a><i class="fa fa-table"></i> Sản phẩm <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <li><a href="<?php echo BASE_URL ?>/product/add_product">Thêm</a></li>
                      <li><a href="<?php echo BASE_URL ?>/product/list_product">Liệt kê</a></li>
                    </ul>
                  </li>
                  <li style = "font-size: 16px"><a><i class="fa fa-bar-chart-o"></i> Đơn hàng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo BASE_URL ?>/order/order">Liệt kê</a></li>
                      
                    </ul>
                  </li>
                  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->



      <!-- footer content -->
        <!-- <footer>
          <div class="pull-right">
             <a href="https://colorlib.com">Hello</a>
          </div>
          <div class="clearfix"></div>
        </footer> -->
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
</body>
</html>