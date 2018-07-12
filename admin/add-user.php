<?php require_once '../inc/db.php'; ?>
<?php session_start();
 if(!isset($_SESSION['username'])){
  header('Location: logout.php');
}
else if (isset($_SESSION['username'])&& $_SESSION['role']=='author') {
  header('Location: logout.php');
}
?>
<?php require_once("inc/top.php"); ?>
  <body>
<?php require_once("inc/header.php"); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <?php require_once("inc/sidebar.php"); ?>
    </div>


    <div class="col-md-9">
      <h1><i class="fa fa-user-plus"></i> Add New User <small></small></h1><hr>
      <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-tachometer-alt"></i> Dashboard </a></li>
        <li><i class="fa fa-user-plus"></i> Add User </li>
      </ul>
      <?php
      if(isset($_POST['submit'])){
        $fname = mysqli_real_escape_string($conn,$_POST['first-name']);
        $lname = mysqli_real_escape_string($conn,$_POST['last-name']);
        $uname = mysqli_real_escape_string($conn,strtolower($_POST['username']));
        $uname_trim = preg_replace('/\s+/','',$uname);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $role = $_POST['role'];
        $image = $_FILES['image']['name'];
        $email = strtolower($_POST['email']);
        $image_tmp = $_FILES['image']['tmp_name'];

        $check_query = "SELECT * from users WHERE username ='$uname' or email = '$email'";
        $check_run = mysqli_query($conn,$check_query);

        $salt_query = "SELECT * from users limit 1";
        $salt_run = mysqli_query($conn,$salt_query);
        $salt = mysqli_fetch_array($salt_run);
        $password = crypt('$2a$07$usesomesillystringforsalt$',$password);

        if(empty($fname) or empty($lname) or empty($uname) or empty($password) or empty($email) or empty($image)){
          $error = "All (*) fields are required";
        }
        elseif($uname != $uname_trim) {
          $error = "Don't Use Spaces in Username";
        }
        elseif (mysqli_fetch_array($check_run)>0) {
          $error = "Username or Email already in use!";
        }
        else{

          $insert_query = "INSERT INTO `users` (`id`, `date`, `first_name`, `last_name`, `username`, `email`, `image`, `password`, `role`, `details`) VALUES (NULL, 'getdate()[0];', '$fname', '$lname', '$uname', '$email', '$image', '$password', '$role','detail');";
          if(mysqli_query($conn,$insert_query)){
              $msg = "User has been added";
              move_uploaded_file($image_tmp,"img/$image");
              $image_check = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
              $image_run = mysqli_query($conn,$image_check);
              $image_row = mysqli_fetch_array($image_run);
              $check_image = $image_row['image'];
              $fname ="";
              $lname = "";
              $uname = "";
              $email = "";

          }
          else {
            $errmsg = "User has not been added";
          }
        }
      }
      ?>
      <div class="row">
        <div class="col-md-8">
          <form  action="" method="POST" enctype="multipart/form-data"> <!--IMPORTANT-->
            <div class="form-group">
              <label for="first-name">First Name*:</label>
              <?php if(isset($error)){ echo "<span class='pull-right' style='color:red; font-weight:bold;'>$error</span>" ;
              }
              elseif (isset($msg)) {
                echo "<span class='pull-right' style='color:green; font-weight:bold;'>$msg</span>";
              } ?>
              <input type="text" name="first-name" value="<?php if(isset($fname)){echo $fname;} ?>" id="first-name" placeholder="First Name" class="form-control">
            </div>
            <div class="form-group">
              <label for="first-name">Last Name*:</label>
              <input type="text" name="last-name" value="<?php if(isset($lname)){echo $lname;} ?>" id="last-name" placeholder="Last Name" class="form-control">
            </div>
            <div class="form-group">
              <label for="username">Username*:</label>
              <input type="text" name="username" value="<?php if(isset($uname)){echo $uname;} ?>" id="username" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email*:</label>
              <input type="text" name="email" id="email" value="<?php if(isset($email)){echo $email;} ?>" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password*:</label>
              <input type="password" name="password" id="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
              <label for="role">Role*:</label>
              <select name="role" class="form-control" ?>" id="role">
                <option value="author">Author</option>
                <option value="admin">Admin</option>
              </select>
            </div>
            <div class="form-group">
              <label for="image">Profile Picture*:</label>
              <input type="file" id="image" name="image">
            </div>
              <input type="submit" name="submit" value="Add User" class="btn btn-primary">
          </form>
        </div>
        <div class="col-md-4">
          <?php
          if(isset($check_image)){
            echo "<div class = 'img-thumbnail'><img src = 'img/$check_image' width = '100%'></div>";
          } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once('inc/footer.php'); ?>
  </body>
</html>
