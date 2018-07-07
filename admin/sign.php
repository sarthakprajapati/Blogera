<?php require_once '../inc/db.php';
session_start();
ob_start();
if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($conn,strtolower($_POST['username']));
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $check_username_query = "SELECT * FROM users where username = '$username'";
  $check_username_run = mysqli_query($conn,$check_username_query);

  if(mysqli_num_rows($check_username_run)){
    $row = mysqli_fetch_array($check_username_run);
    $db_username = $row['username'];
    $db_password = $row['password'];
    $db_role = $row['role'];
    $db_salt = $row['salt'];

    $hash = crypt($row['salt'],$password);
    echo "$password $db_password ";
    if($username == $db_username and $hash == $db_password){
      header('Location: index.php');
      $_SESSION['username'] = $db_username;
      $_SESSION['role'] = $db_role;
    }
    else {
      $error = "Username Or Password is incorrect";
    }
  }
  else{
    $error = "Username Or Password is incorrect";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Viewport -->

  <meta charset="UTF-8">
  <meta name="description" content="Blogging Website">
  <meta name="keywords" content="Blogging,Site,Platform">
  <meta name="author" content="Sarthak Prajapati">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Sign In</title>

   <link rel="stylesheet" type="text/css" href="../css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Open+Sans|Raleway|Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/sign.css">
  </head>

  <body>

    <div class="container animated shake">
      <form class="form-signin" method="post">
        <h3 class="form-signin-heading">Hello, Admin Sign In</h3>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <input type="submit" name="submit" value="Sign In" class="btn btn-lg btn-success btn-block">
      </form>

    </div> <!-- /container -->


  </body>
</html>
