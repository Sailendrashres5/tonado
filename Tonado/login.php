<?php
if ($_POST['login']) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	include 'database_configuration.php';
	$sql = "SELECT * from admin";
	$result = $conn -> query ($sql);
	if ($result -> num_rows > 0) {
		while ($row = $result -> fetch_assoc()) {

			if ($email==$row['email']&&$password==$row['password']) {

				header('location:index.php');
			}
			else{
				header('location:Form-Validation.php');
			}
		}
	}
}
?>