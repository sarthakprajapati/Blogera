<?php
error_reporting(0);
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
require_once("inc/top.php");
require_once("inc/header.php");
 if(!isset($_SESSION['username'])){
  header('Location: sign.php');
}
else {
    
 require_once '../inc/db.php';
}
?>

<body id="profile">

<?php
$session_username = $_SESSION['username'];
$profile_query = "SELECT * FROM users where username = '$session_username'";
$profile_query_run = mysqli_query($conn,$profile_query);
$row = mysqli_fetch_array($profile_query_run);


$image = $row['image'];
$id = $row['id'];
$date = getdate($row['date']);
$day = $date['mday'];
$month = $date['month'];
$year = $date['year'];
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$email = $row['email'];
$username = $row['username'];
$role = $row['role'];
$details = $row['details'];

?>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <?php require_once("inc/sidebar.php"); ?>
    </div>

    <div class="col-md-9">
      <h1><i class="fa fa-user"></i> Profile <small>Personal Details</small></h1><hr>
      <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-tachometer-alt"></i> Dashboard </a></li>
        <li><i class="fa fa-user"></i> Profile </li>
      </ul>
      <div class="row">
        <div class="col-xs-12">
          <center><img src="img/<?php echo $image; ?>" width="200px" class="img-circle img-thumbnail" id="profile-image"></center>
          <br>
          <a href="edit-profile.php?edit=<?php echo "$id"; ?>" class="btn btn-primary pull-right">Edit Profile</a>
          <br><br>
          <center><h3>Profile Details</h3></center>
          <table class="table table-hover table-bordered">
            <tr>
              <td width="20%"><b>User ID:</b></td>
              <td width="30%"><?php echo $id; ?></td>
              <td width="20%"><b>Signup Date:</b></td>
              <td width="30%"><?php echo "$day $month $year"; ?></td>
            </tr>
            <tr>
              <td width="20%"><b>FirstName:</b></td>
              <td width="30%"><?php echo $first_name; ?></td>
              <td width="20%"><b>Last Name:</b></td>
              <td width="30%"><?php echo $last_name; ?></td>
            </tr>
            <tr>
              <td width="20%"><b>Username:</b></td>
              <td width="30%"><?php echo $username; ?></td>
              <td width="20%"><b>Email:</b></td>
              <td width="30%"><?php echo $email; ?></td>
            </tr>
            <tr>
              <td width="20%"><b>Role</b></td>
              <td width="30%"><?php echo $role; ?></td>
              <td width="20%"><b></b></td>
              <td width="30%"></td>
            </tr>
          </table>
          <div class="row">
            <div class="col-lg-8 col-sm-12">
              <b>Details:</b>
              <div class="">
                <?php echo $details; ?>
              </div>
            </div>
          </div>
          <br><br>
        </div>
      </div>
    </div>
</div>
  </body>
  <?php require_once('inc/footer.php'); ?>
</html>
