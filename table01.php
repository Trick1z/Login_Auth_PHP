<?php include('Server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Document</title>
</head>
<body>
    
<div class="wrappers">
    <table class="table table-dark table-striped">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">username</th>
        <th scope="col">password</th>
        <th scope="col">email</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $sql = "SELECT * FROM user";
            $sql_result = mysqli_query($conn , $sql);

            
            if ($sql_result){


                while($row = mysqli_fetch_assoc($sql_result)){
                    $id = $row['id'];
                    $username = $row['username'];
                    $password = "[HIDDEN]";
                    $email = $row['email'];

                    echo '
                    <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$username.'</td>
                    <td>'.$password.'</td>
                    <td>'.$email.'</td>
                    </tr>
                  ';

                }
            }

        ?>


        
    </tbody>
    </table>

    <div class="bt" style="text-align: center;">
      <form action="index.php">
        <button type="submit" class="btn-exit">Exit</button>
      </form>
    </div>
    
</div>




</body>
</html>


<!-- 
<tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>


-->