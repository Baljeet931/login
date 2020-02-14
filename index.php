<?php
session_start();
$connection=mysqli_connect("localhost","root","","project1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Starter Template · Bootstrap</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
              <h1 class="text-center">LOGIN</h1>
              <form action="" method="post">
                  <label for="">Email-ID</label><br>
                  <input type="text" name="email" placeholder="enter your email id here" class="form-control"><br>
                  <label for="">Password</label><br>
                  <input type="password" name="password" placeholder="enter your password here" class="form-control"><br>
                  <button class="btn btn-success mt-2" name="submit">Submit</button>
                  <button class="btn btn-danger mt-2 ml-2">Reset</button><br><br>
                  <a href="registration.php" class="btn btn-primary">Register here</a>
              </form>
          </div>
          
          <div class="col-md-2"></div>
      </div>
  </div>
    <?php
          if(isset($_POST['submit']))
          {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $query=mysqli_query($connection,"select * from registration where email='$email' and password='$password'");
              $total=mysqli_num_rows($query);
              if($total>0)
              {
                  
                  $_SESSION['email']="$email";
                  header("location:dashboard.php");
                  
              }
              else
              {
                   
                  header("location:index.php");
                  echo "wrong id password";
                 
              }
          }
        ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>