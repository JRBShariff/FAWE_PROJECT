<?php 
	//Connection page
	$conn= new PDO ("mysql:hots=localhost;port=3306;dbname=fawe_db","root","");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>