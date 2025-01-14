<?php  
include('library/connection.php');
session_start();
$emp_email=$_SESSION['emp_email'];

if($_POST['action']=='changepasswordq'){
	$oldpassword = $_POST['oldpassword'];
	$hasholdpassword=md5($_POST['oldpassword']);
	$newpassword = $_POST['newpassword'];
	$re_enterpassword = $_POST['re_enterpassword'];
	
	$empq=$db->prepare("SELECT * FROM employees WHERE emp_email='$emp_email' ");
	$empq->execute();
	$empr=$empq->fetchAll(PDO::FETCH_ASSOC);
	$dbpassword = $empr[0]['emp_password'];
	if($hasholdpassword==$dbpassword){
		if($newpassword==$re_enterpassword){
			$hashnewpass=md5($newpassword);
			$updateempq=$db->prepare("UPDATE employees SET emp_password='$hashnewpass' WHERE emp_email='$emp_email' ");
			$updateempq->execute();

			if($updateempq){
				echo "Updated successfully!";
			}
			else{
				echo "Error!";
			}
		}else{
			echo "New Password not the same!";
		}
	}else{
		echo "Invalid Old Password!";
	}
}


?>

