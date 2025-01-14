<?php


session_start(); 
include('includes/session.php'); 

$usersession=$_SESSION['emp_code'];
$titleblog = $_POST['titleblog'];
$descblog = $_POST['descblog'];

$filename = $_FILES["fileToUpload"]["name"];
$tempname = $_FILES["fileToUpload"]["tmp_name"];
$folder = "./image/" . $filename;

$fileToUpload = $_POST['fileToUpload'];
//$fileToUpload = $_POST['fileToUpload'];

$insertblogQ=$db->prepare("INSERT INTO `blogppost`(`blog_title`, `blog_description`, `blog_content`, `blog_createddate`) VALUES ('$titleblog','$descblog','$filename',NOW())");
$insertblogQ->execute();

if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>&nbsp; Image uploaded successfully!</h3>";
    } else {
        echo "<h3>&nbsp; Failed to upload image!</h3>";
    }
echo '<script type="text/javascript">'; 
echo 'alert("Successfully Posted! ");';
echo 'window.location.href = "blogpost.php";';
echo '</script>';
?>