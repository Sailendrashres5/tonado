<?php
    include "db.php";
    if($_GET){
        if($_GET["id"]){
            $sql = "Delete from user where id = ".$_GET["id"];
            if(mysqli_query($conn, $sql)){
                echo "Record deleted successfully.";
                echo "<br /> <a href='http://localhost/tonado/fetch-records.php'
                     >Go back</a>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Invalid request";
        }
    } else {
        echo "Invalid request";
    }
    //connection close
    mysqli_close($conn);
?>