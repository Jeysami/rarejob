<?php
	
	if(!isset($_SESSION['emp_code']) ){	header("location: index.php");exit;	}
	$sessionUserID=$_SESSION['emp_code'];
	$sessionFullname=$_SESSION['emp_name'];
	$emp_email=$_SESSION['emp_email'];
	$sessionPassword=$_SESSION['emp_password'];
	include("library/connection.php");
	include('library/functions.php');
?>	
