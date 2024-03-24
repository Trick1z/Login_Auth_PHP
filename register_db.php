<?php
    session_start();
    include('Server.php');

    $errors = array();

    if(isset($_POST['register_user'])){
        $r_username = mysqli_real_escape_string($conn , $_POST['r_username']);
        $r_password = mysqli_real_escape_string($conn , $_POST['r_password']);
        $rc_password = mysqli_real_escape_string($conn , $_POST['rc_password']);
        $r_email = mysqli_real_escape_string($conn , $_POST['r_email']);
    }

    if( $r_password != $rc_password){
        array_push($errors , "password do not match");
    }

    $user_check_query = "SELECT * FROM user WHERE username = '$r_username' OR email ='$r_email'";
    $query = mysqli_query($conn , $user_check_query);
    $result = mysqli_fetch_assoc($query);


    if($result){
        if($result['username'] === $r_username){
            array_push($errors , "username already exists");
        }

        if($result['email'] === $r_email){
            array_push($errors , "email already exists");
        }


    }




    if(count($errors) == 0){
        $put_password = md5($r_password);
        $insert_sql = "INSERT INTO user ( username , email , password ) VALUES ('$r_username' , '$r_email' , '$r_password') ";
        mysqli_query($conn ,  $insert_sql);


        $_SESSION['username'] = $r_username;
        $_SESSION['success'] = "You are now logged in";

        header('location: index.php');
    }else{
        if($r_password != $rc_password){
            header('location: register_p_went_wrong.php');
        }else{
            header('location: went_wrong.php');
        }
        
    }



?>