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
        <form action="Script_adduser.php" method="post">

            <h1>Add User</h1>
            <?php include('error.php'); ?>
            <!-- username input -->
            <div class="input-box">
                <input type="text" name="student_name"  placeholder="Name" >
                <i class='bx bx-envelope' ></i>
            </div>

            <div class="input-box">
                <input type="text" name="student_id" placeholder="Student-ID" >
                <i class='bx bx-lock-alt'></i>
            </div>

            <div class="confirm-btn" style="text-align: center; margin: 10px;">
                <div class="">
                    <button type="submit" name="confirm_adduser" class="btn-r-confirm">Confirm</button>
               </div>

            </div>

        </form>

        <form action="user02.php">
            <div style="margin: 5px; text-align:center;">
                <button type="submit"  class="btn-r-confirm">Back</button>
            </div>

        </form>
    </div>

</body>




</html>