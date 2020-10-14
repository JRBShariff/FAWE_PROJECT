<?php
include("connection.php");
session_start();
if(!$_SESSION['user']){
	header("location:index.php?must Login");
}
$_SESSION['active']="home";

?>
<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Fawe | Dashboard</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/paper-dashboard"/>

  <!--  Social tags      -->
  <meta name="keywords" content="bootstrap dashboard, creative tim, html dashboard, html css dashboard, web dashboard, paper design, bootstrap dashboard, bootstrap, css3 dashboard, bootstrap admin, paper bootstrap dashboard, frontend, responsive bootstrap dashboard">

  <meta name="description" content="Paper Dashboard is a beautiful Bootstrap Admin Panel for your next project.">




  <!-- Bootstrap core CSS     -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Animation library for notifications   -->
  <link href="assets/css/animate.min.css" rel="stylesheet"/>

  <!--  Paper Dashboard core CSS    -->
  <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="assets/css/demo.css" rel="stylesheet" />


  <!--  Fonts and icons     -->
<link rel="stylesheet" href="lib/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
  
    <!--nav -->
      <?php
		include("inc/sidebar.php");
	  ?>
   
 

  <div class="main-panel">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar bar1"></span>
            <span class="icon-bar bar2"></span>
            <span class="icon-bar bar3"></span>
          </button>
          <a class="navbar-brand" href="#">FAWE MRS | Dashboard</a>
        </div>
		
        <!--<div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="ti-panel"></i>
                <p>Stats</p>
              </a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="ti-bell"></i>
                <p class="notification">5</p>
                <p>Notifications</p>
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Notification 1</a></li>
                <li><a href="#">Notification 2</a></li>
                <li><a href="#">Notification 3</a></li>
                <li><a href="#">Notification 4</a></li>
                <li><a href="#">Another notification</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="ti-settings"></i>
                <p>Settings</p>
              </a>
            </li>
          </ul>

        </div>-->
      
	  </div>
    </nav>


    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="content">
                <div class="row">
                  <div class="col-xs-5">
                    <div class="icon-big icon-warning text-center">
                      <i class="fa fa-users"></i>
                    </div>
                  </div>
                  <div class="col-xs-7">
                    <div class="numbers">
                      <p>Total Members</p>
                      <?php
							$sq="SELECT count(*)from membership where status='member'";
							$result = $conn->query($sq); 
							echo $number_of_rows = $result->fetchColumn(); 
						?>
                    </div>
                  </div>
                </div>
                <div class="footer">
                  <hr />
                  <div class="stats">
                    <i class="ti-reload"></i> View more
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="content">
                <div class="row">
                  <div class="col-xs-5">
                    <div class="icon-big icon-success text-center">
                      <i class="fa fa-user-circle-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-7">
                    <div class="numbers">
                      <p>Pemba's Members</p>
                      <?php
							$sq="SELECT count(*)from branch b, membership m where b.branch_id=m.branch and branch_name='pemba' and status='member'";
							$result = $conn->query($sq); 
							echo $number_of_rows = $result->fetchColumn(); 
						?>
                    </div>
                  </div>
                </div>
                <div class="footer">
                  <hr />
                  <div class="stats">
                    <i class="ti-calendar"></i> View more
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="content">
                <div class="row">
                  <div class="col-xs-5">
                    <div class="icon-big icon-danger text-center">
                      <i class="fa fa-user-circle-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-7">
                    <div class="numbers">
                      <p>Unguja's Members</p>
                      <?php
							$sq="SELECT count(*)from branch b, membership m where b.branch_id=m.branch and branch_name='unguja' and status='member'";
							$result = $conn->query($sq); 
							echo $number_of_rows = $result->fetchColumn(); 
						?>
                    </div>
                  </div>
                </div>
                <div class="footer">
                  <hr />
                  <div class="stats">
                    <i class="ti-timer"></i> View more
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="content">
                <div class="row">
                  <div class="col-xs-5">
                    <div class="icon-big icon-info text-center">
                      <i class="fa fa-building"></i>
                    </div>
                  </div>
                  <div class="col-xs-7">
                    <div class="numbers">
                      <p>Totoal Branch</p>
                      <?php
							$sq="SELECT count(*)from branch ";
							$result = $conn->query($sq); 
							echo $number_of_rows = $result->fetchColumn(); 
						?>
                    </div>
                  </div>
                </div>
                <div class="footer">
                  <hr />
                  <div class="stats">
                    <i class="ti-reload"></i> view more
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="header">
                <h4 class="title">All Users</h4>
                <p class="category"> Graph Analysis</p>
              </div>
              <div class="content">
                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                <div class="footer">
                  <div class="chart-legend">
                    <i class="fa fa-circle text-info"></i> Open
                    <i class="fa fa-circle text-danger"></i> Bounce
                    <i class="fa fa-circle text-warning"></i> Unsubscribe
                  </div>
                  <hr>
                  <div class="stats">
                    <i class="ti-timer"></i> Last Update 10/2020
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



</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script src="assets/js/jquery.sharrre.js"></script>




<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        $.notify({
            icon: 'ti-gift',
            message: "Welcome to <b>FAWE Admin Panel</b> ."

        },{
            type: 'success',
            timer: 4000
        });

    });
</script>


<!-- Mirrored from demos.creative-tim.com/bs3/paper-dashboard/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Oct 2020 13:15:24 GMT -->
</html>
