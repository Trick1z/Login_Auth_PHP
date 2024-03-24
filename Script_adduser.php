<?php
    session_start();
    include('games_server.php');

    $errors = array();

    if(isset($_POST['confirm_adduser'])){
        $student_name = mysqli_real_escape_string($conn , $_POST['student_name']);
        $student_id = mysqli_real_escape_string($conn , $_POST['student_id']);
    }


    $user_check_query = "SELECT * FROM user WHERE student_name = '$student_name' OR student_id ='$student_id'";
    $query = mysqli_query($conn , $user_check_query);
    $result = mysqli_fetch_assoc($query);


    if($result){
        if($result['student_name'] === $student_id){
            array_push($errors , "student name alreay added");
        }

        if($result['email'] === $r_email){
            array_push($errors , "studen id already added");
        }

    }

    if(count($errors) == 0){
        $put_userid = md5($student_id);
        $insert_sql = "INSERT INTO user ( student_name, student_id ) VALUES ('$student_name' , '$student_id') ";
        mysqli_query($conn ,  $insert_sql);

        header('location: user02.php');
    }else{
       
        header('location: went_wrong_user.php');
        
        
    }
?>