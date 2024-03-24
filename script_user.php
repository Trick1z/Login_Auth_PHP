<?php
    session_start();

    if($_SESSION['username'] === "admin" and $_SESSION['password'] === "rootSRJ" ){
        header('location: user02.php');
    }else{
        header('location: user01.php');
    }


?>