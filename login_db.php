<?php
    session_start();
    include ('Server.php');
    $errors = array();

    if(isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($conn , $_POST['username']);
        $password = mysqli_real_escape_string($conn , $_POST['password']);
        

        if (empty($username)){
            array_push($errors , "username is required");
        }
        if (empty($password)){
            array_push($errors , "password is required");
        }

        if(count($errors) == 0){
            $put_password = md5($password);
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn , $query);
    
            if( mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
    
            }else{
                header('location: login_went_wrong.php');
            }
            

        }

    

    }
?>