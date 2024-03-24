<?php
    session_start();



    if(!isset($_SESSION['username'])){
        header('location:  login.php');
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

    
?>
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
        <!-- notification -->
        <?php if (isset($_SESSION['success'])): ?>
            <div class="success">
                <h3 style="text-align: center;">
                    <?php
                    echo $_SESSION['success'] ;
                    unset($_SESSION['success'] );
                    ?>

                </h3>

            </div>
        <?php endif ?>


        <form action="login.php" method="post" >

            <div class="connect-text">
            <h1> <?php include "Server.php";?> </h1>
            </div>

            <?php if (isset($_SESSION['username'])): ?>
                <h3 style="text-align: center;">Welcome : <strong style="color: red;"><?php echo $_SESSION['username']?></strong></h3>
                <h4 style="text-align: center;"> <a href="index.php?logout='1'">Log out</a></h4>

            <?php endif ?>
            
        </form>
        
        <div class="row">
            <div class="column" style="padding: 5px;" >
                <form action="script_c.php" class="table1" method="post">
                    <button style="margin: 5px;" type="submit" name="table" class="btn">table</button>
                </form>
            </div>

            <div class="column" style="padding: 5px;">
                <form action="script_user.php" method="post" >
                    <button style=" margin: 5px;" type="submit" name="games" class="btn">users</button>
                </form>
            </div>
        </div>

    </div>

</body>




</html>