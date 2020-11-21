
<?php 
session_start();
if(!$_SESSION['user']){
	header("location:index.php?must Login");
}else{
	include("inc/Ecript_function.php");
	include("connection.php");
	$crt=sha1($_GET['tok2val']);
	$sql="update membership set status='removed' where member_id='$crt'";
	$stmt=$conn->query($sql);
	header("location:members.php?re=success delete a Member");
}
?>