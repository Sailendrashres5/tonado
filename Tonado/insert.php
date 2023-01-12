<?php
    //including the configuration file.
    include 'db.php';
    //If something has been posted from the form
    if($_POST){
        $alert = true;
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($full_name="") {
            echo "fullname cannot be empty";
           $alert =  false;
        }
        elseif ($email="") {
            echo "email cannot be empty";
            $alert = false;
        }
        elseif (strlen($password)<8) {
            echo "password must be at least 8 characters";
            $alert = false;
        }

        if($alert=true){

        $sql = "INSERT into user (`Full_name`, `Email`, `Password`) VALUES ('$full_name', '$email','$password')";
        if(mysqli_query($conn, $sql)){
            echo "New record added successfully"; 
            echo "<br /> <a href='http://localhost/tonado/fetch.php'
            >Go back</a>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    }
    mysqli_close($conn);
?>