<?php
	require_once 'db.php';
	if ($_POST) {
		# code...
		$username = $_REQUEST ['username'];
		$password = $_REQUEST ['password'];
		$h_password = password_hash($password, PASSWORD_DEFAULT);
		echo $h_password."<br>";
		$q_user = "select * from user where Full_Name = '$username'";
		$result = mysqli_query($conn,$q_user);
		// echo $conn->error;
		if(mysqli_num_rows($result)!=0){
			$user = mysqli_fetch_assoc($result);
			if (password_verify($password, $user['Password'])) {
			    if($user['admin']==1){
			    	session_start();
			    	$_SESSION['id']=$user['id'];
			    	echo "You are login";
			    	header("location:dashboard.php")
			    }else{
			    	echo "You are not admin";
			    }
			} else {
			    echo 'Invalid password.';
			}
		}else{
			echo "User not found";
		}
	}
?>


