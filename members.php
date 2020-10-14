 <?php
include("connection.php");
session_start();
if(!$_SESSION['user']){
	header("location:index.php?must Login");
}
$_SESSION['active']="members";
include("inc/Ecript_function.php");
?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>FAWE | Members</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/paper-dashboard"/>

  <!-- Bootstrap core CSS     -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Animation library for notifications   -->
  <link href="assets/css/animate.min.css" rel="stylesheet"/>

  <!--  Paper Dashboard core CSS    -->
  <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="assets/css/demo.css" rel="stylesheet" />

  <!--  Datatable     -->
<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" />
  
  <!--  Fonts and icons     -->
<link rel="stylesheet" href="lib/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href="assets/css/themify-icons.css" rel="stylesheet">
	<!--data table-->
	<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<style>
	.mb-4{
		margin-bottom:10px;
		float:right
	}
</style>
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
          <a class="navbar-brand" href="#">FAWE MRS | Manage Members</a>
        </div>
        <!-- <div class="collapse navbar-collapse">
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

        </div> -->
      </div>
    </nav>


    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-6 col-sm-10  pull-left" >
							<h4 class="title"><span class="hidden-xs ">List of </span> All Members</h4>
						</div>
						<div class="col-sm-2 col-xs-6 ">
								<a href="add_member.php" class="btn btn-warning btn-fill mb-4">Member <i class="fa fa-plus"></i></a>
						</div>
					</div>
				</div>
                
				
              </div>
              <div class="content table-responsive ">
                <table id="example" class="table table-condenced table-striped" >
					<thead>
						<tr>
						  <th>sNo</th>
						  <th>Full Name</th>
						  <th>Address</th>
						  <th>Phone</th>
						  <th>gender</th>
						  <th>occupation</th>
						  <th>join_date</th>
						  <th>branch</th>
						  <th>Edit</th>
						  <th>Delete</th>
						</tr>
					</thead>
					<tbody>
					  <?php
						//query
							$n=1;
							$sql="select * from membership m,branch b where b.branch_id=m.branch and status='member'";
							$st=$conn->query($sql);
							while($row=$st->fetch(PDO::FETCH_ASSOC)){
						?>
					  <tr>
						<td><?php echo $n; ?></td>
						<td><?php echo strtoupper($row['fname']." ".$row['lname']); ?></td>
						<td><?php echo strtoupper($row['address']); ?></td>
						<td><?php echo strtoupper($row['phone_number']); ?></td>
						<td><?php echo strtoupper($row['gender']); ?></td>
						<td><?php echo strtoupper($row['occupation']); ?></td>
						<td><?php echo strtoupper($row['join_date']);?></td>
						<td><?php echo strtoupper($row['branch_name']);?></td>
						<td><a class="btn btn-sm btn-sucess" href="edit_member.php?id=<?php  echo EncryptThis($row['member_id']); ?>"><i class="fa fa-edit"></i>Edit</a></td>
						<td><a onclick="return confirm('Are you Sure?')" class="btn btn-sm btn-danger" href="delete_member.php?id=<?php echo EncryptThis($row['member_id']); ?>"><i class="fa fa-trash"></i>Delete</a></td>
					  </tr>
					  <?php
						$n++;
							}
					  ?>
					</tbody>
                </table>

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


<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script src="assets/js/jquery.sharrre.js"></script>


 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<!--   notify   -->
<?php


if(isset($_GET["re"])){
	?>
	<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        $.notify({
            icon: 'ti-check',
            message: "<?php echo $_GET["re"]; ?>"

        },{
            type: 'success',
            timer: 4000
        });

    });
</script>
	<?php
}
?>
</html>
