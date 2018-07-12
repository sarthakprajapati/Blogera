<?php require_once '../inc/db.php';
ob_start(); ?>

<?php session_start();
 if(!isset($_SESSION['username'])){
  header('Location: logout.php');
}

$session_username = $_SESSION['username'];

  if(isset($_GET['edit'])){
    $e_id = $_GET['edit'];
    $edit_query = "SELECT * FROM users WHERE id = $e_id";
    $edit_query_run = mysqli_query($conn,$edit_query);
    if(mysqli_num_rows($edit_query_run)>0){
      $edit_row = mysqli_fetch_array($edit_query_run);
      $e_username = $edit_row['username'];
        if($e_username == $session_username){
            $e_first_name = $edit_row['first_name'];
            $e_last_name = $edit_row['last_name'];
            $e_image = $edit_row['image'];
            $e_details = $edit_row['details'];
          }
          else {
            header('location: index.php');
          }
      }
    else {
      header('location: index.php');
    }
  }
  else {
    header('location: index.php');
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
      <h1><i class="fa fa-user"></i> Edit Profile <small></small></h1><hr>
      <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-tachometer-alt"></i> Dashboard </a></li>
        <li><i class="fa fa-user"></i> Edit Profile </li>
      </ul>
      <?php
      if(isset($_POST['submit'])){
        $fname = mysqli_real_escape_string($conn,$_POST['first-name']);
        $lname = mysqli_real_escape_string($conn,$_POST['last-name']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $details = mysqli_real_escape_string($conn,$_POST['details']);
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        if(empty($image)){
          $image = $e_image;
        }

        $salt_query = "SELECT * from users limit 1";
        $salt_run = mysqli_query($conn,$salt_query);
        $salt = mysqli_fetch_array($salt_run);
        $password = crypt('$2a$07$usesomesillystringforsalt$',$password);

        if(empty($fname) or empty($lname) or empty($password) or empty($image)){
          $error = "All (*) fields are required";
        }
        else{
          $update_query = "UPDATE `users` SET `first_name` = '$fname', `last_name` = '$lname', `image` = '$image', `details` = '$details' WHERE `users`.`id` = $e_id
";
          mysqli_query($conn,$update_query);
          $msg = "User has been updated";
          header("refresh:0; url=edit-user.php?edit=$e_id");
          if(!empty($image)){
            move_uploaded_file($image_tmp,"img/$image");
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
              <input type="text" name="first-name" value="<?php if(isset($e_first_name)){echo $e_first_name;} ?>" id="first-name" placeholder="First Name" class="form-control">
            </div>
            <div class="form-group">
              <label for="first-name">Last Name*:</label>
              <input type="text" name="last-name" value="<?php if(isset($e_last_name)){echo $e_last_name;} ?>" id="last-name" placeholder="Last Name" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password*:</label>
              <input type="password" name="password" id="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
              <label for="image">Profile Picture*:</label>
              <input type="file" id="image" name="image">
            </div>
            <div class="form-group">
              <label for="details">Details*:</label>
              <textarea name="details" rows="8" cols="80" placeholder="Details" class="form-control"><?php echo $e_details; ?></textarea>
            </div>
              <input type="submit" name="submit" value="Edit Profile" class="btn btn-primary">
          </form>
          <br><br>
        </div>
        <div class="col-md-4">
          <?php
            echo "<div class = 'img-thumbnail'><img src = 'img/$e_image' width = '100%'></div>";
            ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once('inc/footer.php'); ?>
  </body>
</html>
