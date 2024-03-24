

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
                <input type="text" name="u_username"  placeholder="Username" required>
                <i class='bx bx-envelope' ></i>
            </div>

            <div class="input-box">
                <input type="text" name="u_password" placeholder="Password" required>
                <i class='bx bx-lock-alt'></i>
            </div>

            <div class="input-box">
                <input type="text" name="u_email"  placeholder="Email" required>
                <i class='bx bx-envelope' ></i>
            </div>

            <button type="submit" name="update_user" class="btn">Update</button>

            <p style="text-align:center;">Back To Table ? <a href="table02.php">Table</a></p>

            
        </form>

        <?php
            include('Server.php');

            $ids = $_GET['updateid'];

            if(isset($_POST['update_user'])){
                $username = $_POST['u_username'];
                $password = $_POST['u_password'];
                $email = $_POST['u_email'];

                $sql = "UPDATE user SET id = '$ids', username = '$username' , password = '$password' ,
                email = '$email' WHERE  id =$ids";

                $result = mysqli_query($conn , $sql); 

                if($result){
                    header('location: table02.php');

                }else{
                    die(mysqli_error($conn));
                }
            }
        
        ?>


    </div>

</body>




</html>