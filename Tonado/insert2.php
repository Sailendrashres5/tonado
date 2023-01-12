<?php
    //including the configuration file.
    include 'db.php';
    //If something has been posted from the form
    if($_POST){
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
      
        $sql = "INSERT into user (`Full_name`, `Email`, `Password`) VALUES ('$full_name', '$email','$password')";
        if(mysqli_query($conn, $sql)){

            header('location:login.html');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>