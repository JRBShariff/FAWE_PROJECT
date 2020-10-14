 <?php
include("connection.php");
session_start();
if(!$_SESSION['user']){
	header("location:index.php?must Login");
}
$_SESSION['active']="members";

?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>FAWE | Add Members</title>

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
  <link href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
  
  <!--  Fonts and icons     -->
<link rel="stylesheet" href="lib/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href="assets/css/themify-icons.css" rel="stylesheet">
	<!--data table-->
	<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

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
          <a class="navbar-brand" href="#">FAWE MRS | Adding Members</a>
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
			<div id="accordion">
				  <div class="card">
					<div class="header" id="headingOne">
						<div class="container-fullwidth">
							<div class="row">
								<div class="col-sm-10">
									 <h5 class="mb-0">
										
										<div class="col-sm-10">
											<h4 class="title">Add Multiple Member</h4>
										</div>
										<div >
											<button class="btn btn-info" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											  Open Form 
											</button>
										</div>
									  </h5>
								</div>
							 
							 </div>
						</div>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
					  <div class="content">
						<div class="container">
							<div class="row">
								<form enctype="multipart/form-data"  method="post" role="form">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="" >File Upload</label>
												<input type="file" class="form-control" name="file" id="file" size="150">
												<p class="help-block">Only CSV File Import.</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Excel Columns Format</label>
												<div class="table-responsive">
													<table class="table table-bordered">
														<tr>
															<td>Fname</td>
															<td>Lname</td>
															<td>Address</td>
															<td>Phone</td>
															<td>Gender</td>
															<td>Occupation</td>
															<td>Jdate</td>
															<td>Branch</td>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-success" name="Bulksubmit" value="submit">Upload Now</button>
								</form>
							</div>
						</div>
					  </div>
					</div>
				  </div>
			</div>
            <div class="card">
              <div class="header">
				<div class="container-fullwidth">
					<div clas="row">
						<div class="col-sm-12">
							<h4 class="title">Add Single Member</h4>
							<p class="category">Please Fill all required field *</p>
						</div>
					</div>
				</div>
              </div>
			  
              <div class="content">
			  
				<form method="POST" action="">
					<div class="container-fluid">

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >First Name *</label>
								<input type="text" required class="form-control border-input" name="fname" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Last Name *</label>
								<input type="text" required class="form-control border-input" name="lname" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >Address *</label>
								<input type="text" required class="form-control border-input" name="address" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Phone Number *</label>
								<input type="text" required class="form-control border-input" name="phone" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >Gender *</label>
								<select class="form-control border-input" name="gender" required>
									<option>Select a Gender</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Occupation *</label>
								<input type="text" required class="form-control border-input" name="occupation" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >Join Date *</label>
								<input type="date" required class="form-control border-input" name="date" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Branch *</label>
								<select  class="form-control border-input" name="branch" required>
									<option value="">Choose Branch</option>
									<?php
											$sql="select * from branch";
											$stm=$conn->query($sql);
											while($row=$stm->fetch(PDO::FETCH_ASSOC)){
												?>
												<option value="<?php  echo $row['branch_id']; ?>"> <?php  echo $row['branch_name']; ?></option>
												<?php
											}
										?>
								</select>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								
								<input type="submit" name="save" class="btn btn-success btn-fill" />
							</div>
						</div>
					</div>
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
</html>

<?php 
	if(isset($_POST['save'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$gender=$_POST['gender'];
		$occupation=$_POST['occupation'];
		$jdate=$_POST['date'];
		$branch=$_POST['branch'];
		
		$sql="insert into membership (fname,lname,address,phone_number,gender,occupation,join_date,branch) 
		values(:fname,:lname,:address,:phone,:gender,:occupation,:jdate,:branch)";
		$st=$conn->prepare($sql);
		$st->execute(array(':fname'=>$fname,':lname'=>$lname,':address'=>$address,':phone'=>$phone,':gender'=>$gender,':occupation'=>$occupation,':jdate'=>$jdate,':branch'=>$branch));
		echo "<script>window.open('members.php?re=success','_self');</script>";
	
	}else if(isset($_POST["Bulksubmit"])){
		$file = $_FILES['file']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;
        while(($filesop = fgetcsv($handle, 1000, ",")) !== false){
			$fname=$filesop[0];
			$lname=$filesop[1];
			$address=$filesop[2];
			$phone=$filesop[3];
			$gender=$filesop[4];
			$occupation=$filesop[5];
			$jdate=$filesop[6];
			$branch=$filesop[7];
			
			$sql="insert into membership (fname,lname,address,phone_number,gender,occupation,join_date,branch) 
			values(:fname,:lname,:address,:phone,:gender,:occupation,:jdate,:branch)";
			$st=$conn->prepare($sql);
			$st->execute(array(':fname'=>$fname,':lname'=>$lname,':address'=>$address,':phone'=>$phone,':gender'=>$gender,':occupation'=>$occupation,':jdate'=>$jdate,':branch'=>$branch));
			$c = $c + 1;
        }
		if($sql){
               echo "<script>window.open('members.php?re=success','_self');</script>";
        }else{
            echo "<script>alert('Invalid format!');</script>";
        }

	}

	
?>