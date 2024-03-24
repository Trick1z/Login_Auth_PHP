

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title> Login Page</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>



<body>
    <div class="wrapper">
        <form action=""  method="post">




            <h1>Update account</h1>
            <?php include('error.php'); ?>
            <!-- username input -->
            <div class="input-box">
                <input type="text" name="student_name"  placeholder="Name" required>
                <i class='bx bx-envelope' ></i>
            </div>

            <div class="input-box">
                <input type="text" name="student_id" placeholder="Student_id" required>
                <i class='bx bx-lock-alt'></i>
            </div>

            <button type="submit" name="update_user" class="btn">Update</button>

            <p style="text-align:center;">Back To Table ? <a href="table02.php">Table</a></p>

            
        </form>

        <?php
            include('games_server.php');

            $ids = $_GET['updateid'];

            if(isset($_POST['update_user'])){
                $student_name = $_POST['student_name'];
                $student_id = $_POST['student_id'];

                $sql = "UPDATE user SET id = '$ids', student_name = '$student_name' , student_id = '$student_id'  WHERE  id =$ids";

                $result = mysqli_query($conn , $sql); 

                if($result){
                    header('location: user02.php');

                }else{
                    die(mysqli_error($conn));
                }
            }
        
        ?>


    </div>

</body>




</html>