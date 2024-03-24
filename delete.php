<?php
    include('Server.php');
    if(isset($_GET['deleteid'])){
        $id =  $_GET['deleteid'];


        $sql = "DELETE FROM user WHERE id = '$id' ";
        $result = mysqli_query($conn,$sql);

        header('location: table02.php');
    }


?>