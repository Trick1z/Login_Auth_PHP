<?php
    include('Server.php');
    $id = $_GET['update_id'];


        $username = $_POST['u_username'];
        $password = $_POST['u_password'];
        $email = $_POST['u_email'];

        $sql = "UPDATE user SET id = '$id', username = '$username' , password = '$password' ,
         email = '$email' WHERE  id =$id";

        $result = mysqli_query($conn , $sql); 

        if($result){
            header('location: table02.php');

        }else{
            die(mysqli_error($conn));
        }



    



?>