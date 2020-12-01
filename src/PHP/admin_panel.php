<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <title>Admin Console</title>
</head>
<body>
    <div class="container">
    <h1>Welcome, </h1>
    <h1><?php echo $_SESSION['adminname']; ?></h1>
    <h1 class="display-4 mb-4 mt-5">List of Users</h1>
    <table class="table table-striped table-dark" style="text-align: center;">
        <thead>
          <tr>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
    
        <tbody>
            <?php

            require('connectFordB.php');
            if(!isset($_SESSION['adminname'])){
              header('Location: http://localhost/INTP_project/Alumneye/src/html/index.html'); 
            }else{
              $query = " SELECT * FROM users ";
              $exequery = mysqli_query($connect, $query);

              while($row = mysqli_fetch_assoc($exequery)){
                $username = $row['username'];
                $password = $row['password'];
                $email = $row['email'];
                echo "<tr>";
                echo "<td>$username</td>";
                echo "<td>$password</td>";
                echo "<td>$email</td>";
                echo "</tr>";
              }
            }
            ?>        
        </tbody>
      </table>
      <a href="admin_delete.php" class="btn btn-danger mb-4">Delete User</a>
      <a href="../html/adminlogin.html" class="btn btn-secondary mb-4">Logout</a>
    </div> 
    <!--Bootstrap Script-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>