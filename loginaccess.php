<?php  
session_start();
include('library/connection.php');
$uid = $_POST['uid'];
$uemail = $_POST['uemail'];
$password    = md5($_POST['password']);
$uname = $_POST['uname'];
$ubday = DATE("Y-m-d",strtotime($_POST['ubday']));

//if empty
if(empty($uemail) || empty($password)){
	$_SESSION['login_error']="Please Enter Username and Password";	
	header("location:index.php");
	exit;
}else{

	$getuserQuery=$db->prepare("SELECT * FROM employees WHERE emp_code ='$uid' AND emp_email = '$uemail' AND emp_password = '$password' AND emp_name='$uname' AND emp_bday='$ubday' AND emp_status ='0' ");
	$getuserQuery->execute();
	$getuserResult=$getuserQuery->fetchAll(PDO::FETCH_ASSOC);
	$getuserQueryCnt=$getuserQuery->rowCount();

			$_SESSION['emp_code'] = $getuserResult[0]['emp_code'];	
			$_SESSION['emp_name'] = $getuserResult[0]['emp_name'];
			$_SESSION['emp_password'] = $getuserResult[0]['emp_password'];
			$_SESSION['emp_email'] = $getuserResult[0]['emp_email'];
			$_SESSION['emp_bday'] = $getuserResult[0]['emp_bday'];
			include('includes/session.php');
			echo '<script type="text/javascript">'; 
			echo 'alert("Login Success! ");';
			echo 'window.location.href = "home.php";';
			echo '</script>';
}

?>

