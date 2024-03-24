<?php
    session_start();

    if($_SESSION['username'] === "admin" and $_SESSION['password'] === "rootSRJ" ){
        header('location: table02.php');
    }else{
        header('location: table01.php');
    }


?>