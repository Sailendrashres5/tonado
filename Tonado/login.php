<?php
session_start();
$error_msg = '';
$error_msg2 = '';
include 'db.php';
if ( $_POST ) {
    $email = $_REQUEST[ 'email' ];
    $password = $_REQUEST[ 'password' ];
    $login_check = "SELECT *  from user where email = '$email'";
    $result = mysqli_query( $conn, $login_check );
    $check = mysqli_num_rows( $result );
    if ( $check>0 ) {
        $row = mysqli_fetch_assoc( $result );
        $pass = $row[ 'Password' ];
        $password_validated = password_verify( $password, $pass );
        if ( $pass == $password ) {
            if ( $row[ 'admin' ] == 1 ) {
                // $admin_row = mysqli_fetch_array( $result );
                $_SESSION['full_name'] = $row[ 'Full_name' ];
                $_SESSION['email'] = $row['email'];
                $_SESSION['admin-logged-in'] = true;
                header( 'location:admin.php' );
            } else {
                
                // $user_row = mysqli_fetch_array( $result );
                $_SESSION[ 'full_name' ] = $row[ 'Full_name' ];
                $_SESSION['id'] = $row['id'];
                $_SESSION['user-logged-in'] = true;
                header( 'location:tonado.php' );
            }

        } else {
            $error_msg2 = 'Invalid Password';
            echo $error_msg2;
        }
    } else {
        $error_msg = "User Name doesn't exist";
        echo $error_msg;
    }
}
?>