<?php 

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "myPHP";


$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if($conn){
	echo "Database connected successfully!";
}
else{
	echo "Database not connected!";
}

