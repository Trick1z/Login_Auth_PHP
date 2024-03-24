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
        <form action="register_db.php"  method="post">




            <h1>Register</h1>
            <?php include('error.php'); ?>
            <!-- username input -->
            <div class="input-box">
                <input type="text" name="r_username"  placeholder="Username" required>
                <i class='bx bx-envelope' ></i>
            </div>

            <div class="input-box">
                <input type="text" name="r_password" placeholder="Password" required>
                <i class='bx bx-lock-alt'></i>
            </div>

            <div class="input-box">
                <input type="text" name="rc_password"  placeholder="Confirm password" required>
                <i class='bx bx-lock-alt'></i>
            </div>

            <div class="input-box">
                <input type="text" name="r_email"  placeholder="Email" required>
                <i class='bx bx-envelope' ></i>
            </div>


                <div class="confirm-btn" style="text-align: center; margin: 10px;">
                    <button type="submit" name="register_user" class="btn-r-confirm">Confirm</button>
            

                </div>
            
            <div class="alrady-have" style="text-align: center;">
                <p >Already Have an account ? <a href="login.php">Sign in</a></p>


            </div>
            
            
        </form>
    </div>

</body>




</html>