<?php

$db_login="root";
$db_name="rarejob";
$db_pass="";
$db_host = 'localhost';
try{
$db = new PDO("mysql:host=localhost;dbname=$db_name","$db_login","$db_pass");
}catch(exception $e){
	echo $e;
}
?>