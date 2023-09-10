<?php
    session_start();
    if (isset($_SESSION['email'])) {
        header('location:../account/html/fixed.php');
    }else{
        header('location:./index.html');
    }

?>