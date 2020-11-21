 <?php
include("connection.php");
session_start();
if(!$_SESSION['user']){
	header("location:index.php?must Login");
}
$_SESSION['active']="member-edit";
//include("inc/Ecript_function.php");
	
	
	echo  $crt=$_GET['tok2val'];
	$sql="select * from membership  where member_id = '$crt'";
	$st=$conn->query($sql);
	$row=$st->fetch(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>FAWE | Edit Members</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!-- Bootstrap core CSS     -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Animation library for notifications   -->
  <link href="assets/css/animate.min.css" rel="stylesheet"/>

  <!--  Paper Dashboard core CSS    -->
  <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="assets/css/demo.css" rel="stylesheet" />

	    <link href="assets/css/my-style.css" rel="stylesheet"/>

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
          <a class="navbar-brand" href="#">FAWE MRS | Editing Members</a>
        </div>
        
      </div>
    </nav>


    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="header">
				<div class="container-fullwidth">
					<div clas="row">
						<div class="col-sm-10">
							<h4 class="title">Edit Existing Member</h4>
							<p class="category">Please Fill all required field *</p>
						</div>
					</div>
				</div>
              </div>
              <div class="content">
				<form method="POST" action="">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >First Name *</label>
								<input type="text" required class="form-control border-input" value="<?php echo $row['fname']; ?>" name="fname" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Last Name *</label>
								<input type="text" required value="<?php echo $row['lname']; ?>" class="form-control border-input" name="lname" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >Address *</label>
								<input type="text" required value="<?php echo $row['address']; ?>" class="form-control border-input" name="address" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Phone Number *</label>
								<input type="text" required value="<?php echo $row['phone_number']; ?>" class="form-control border-input" name="phone" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >Gender *</label>
								<select class="form-control border-input" name="gender" required>
									<option>Select a Gender</option>
									<?php
										if($row['gender']=='M'){
											?>
											<option selected value="M">Male</option>
											<option  value="F">Female</option>
											<?php
										}else{
											?>
											<option  value="M">Male</option>
											<option selected value="F">Female</option>
											<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Occupation *</label>
								<input type="text" required value="<?php echo $row['occupation']; ?>" class="form-control border-input" name="occupation" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >Join Date *</label>
								<input type="date" required value="<?php echo date('Y-m-d',strtotime($row['join_date'])); ?>" class="form-control  border-input" name="date" />
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
											while($rw=$stm->fetch(PDO::FETCH_ASSOC)){
												if($rw['branch_id']==$row['branch']){
													?>
													<option selected value="<?php  echo $rw['branch_id']; ?>"> <?php  echo $rw['branch_name']; ?></option>
													<?php
												}else{
													?>
													<option  value="<?php  echo $rw['branch_id']; ?>"> <?php  echo $rw['branch_name']; ?></option>
												<?php
												}
												
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
//disable all error
error_reporting(0);

	try{
		$crt=DecryptThis($_GET['id']);
		$sql="select * from membership  where member_id = '$crt'";
		$st=$conn->query($sql);
		$row=$st->fetch(PDO::FETCH_ASSOC);
		
		if(isset($_POST['save'])){
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$address=$_POST['address'];
			$phone=$_POST['phone'];
			$gender=$_POST['gender'];
			$occupation=$_POST['occupation'];
			$jdate=$_POST['date'];
			$branch=$_POST['branch'];
			$sql="UPDATE  membership set fname=:fname,lname=:lname,address=:address,phone_number=:phone,gender=:gender,occupation=:occupation,join_date=:jdate,branch=:branch where member_id=$crt";
			$st=$conn->prepare($sql);
			$st->execute(array(':fname'=>$fname,':lname'=>$lname,':address'=>$address,':phone'=>$phone,':gender'=>$gender,':occupation'=>$occupation,':jdate'=>$jdate,':branch'=>$branch));
			echo "<script>window.open('members.php?re=Success Update member','_self');</script>";
		}		
	}catch(Exception $e){
		?>
		<script>
			 $(document).ready(function(){
				$.notify("Opps! Something Went Wrong, Please Contact Administrator",
					
				{
					
					animate: {
						enter: 'animated zoomInDown',
						exit: 'animated zoomOutUp'
					}
				});
			});
		</script>
		<?php
	}

	
?>
