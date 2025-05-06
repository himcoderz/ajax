<?php
	$server="localhost";
	$user="root";
	$pass="";
	$database="ajaxdb";	
	$conn=mysqli_connect($server,$user,$pass,$database);
	if(!$conn){
		die("not connected".mysqli_error($conn));
	}
	echo "";
?>