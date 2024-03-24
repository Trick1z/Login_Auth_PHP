

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
        <form action="Login_db.php" method="post" >
    

            <h1>Login</h1>
            <!-- username input -->
            <div class="input-box">
                <input type="text" name="username"  placeholder="Username" required>
                <i class='bx bx-user'></i>
            </div>

            <!-- password input -->
            <div class="input-box">
                <input type="text" name="password" placeholder="Password" required>
                <i class='bx bx-lock-alt' ></i>
            </div>


            <!-- remember - forgot -->

                <div class="b-column" style="text-align: center ; margin: 10px" >

                <button type="submit" name="login_user" class="btn-login">Login</button>

                </div>
                
                <div class="register-link">
                    <p>Don't have an account <a href="Register.php">Register</a></p>
                </div>
 
        </form>

    </div>

</body>




</html>