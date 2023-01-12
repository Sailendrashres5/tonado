<?php
    session_start();
    session_unset();
    session_destroy();
    // unset($_SESSION[ 'full_name' ]);
    // unset($_SESSION['admin_id']);
    // unset($_SESSION['admin-logged-in']);
    header("location:login-page.php");
?>