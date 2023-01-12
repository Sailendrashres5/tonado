<?php 
$servername = "localhost"; //Points to the local server
$username = "root"; //Username for connectiong the database
$password = ""; //Password for connection to the database
$dbname = "tonado"; //Name of the database
//Create connection
$conn= mysqli_connect($servername, $username, $password, $dbname);
//mysqli_connect function is used to conect the application to the 
if ($conn->connect_error) {
	die("connectiono failed:". $conn->connect_error);
}
else
{
	// echo "connecition success";
}
?>
