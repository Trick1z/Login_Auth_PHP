<?php
    include('games_server.php');
    if(isset($_GET['deleteid'])){
        $id =  $_GET['deleteid'];


        $sql = "DELETE FROM user WHERE id = '$id' ";
        $result = mysqli_query($conn,$sql);

        header('location: user02.php');
    }


?>