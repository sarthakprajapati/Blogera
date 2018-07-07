<?php require_once '../inc/db.php'; ?>
<?php session_start();
 if(!isset($_SESSION['username'])){
 header('Location: sign.php');
}
else if (isset($_SESSION['username'])&& $_SESSION['role']=='author') {
  header('Location: index.php');
}
?>
<?php require_once("inc/top.php"); ?>
<body>
<?php require_once("inc/header.php"); ?>
<?php if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    $del_query = "DELETE FROM `users` WHERE `id` = $del_id";
    if(isset($_SESSION['username']) && $_SESSION['role'] =='admin'){
      if(mysqli_query($conn,$del_query)){
        $msg = "User has been deleted";
      }
      else {
        $error = "User has not been deleted";
        }
      }
    }
if(isset($_POST['checkboxes'])){
  foreach ($_POST['checkboxes'] as $user_id) {
    $bulk_option = $_POST['bulk-options'];
    if($bulk_option =='delete'){
      $bulk_del_query = "DELETE FROM `comments` WHERE `id` = $user_id";
      mysqli_query($conn,$bulk_del_query);
    }
    elseif ($bulk_option == 'approve') {
      $bulk_author_query = "UPDATE `comments` SET `status` = 'approve' WHERE `comments`.`id` = $user_id";
      mysqli_query($conn,$bulk_author_query);
    }
    elseif ($bulk_option == 'unapprove') {
      $bulk_admin_query = "UPDATE `comments` SET `status` = 'pending' WHERE `comments`.`id` = $user_id";
      mysqli_query($conn,$bulk_admin_query);
    }
  }
}
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <?php require_once("inc/sidebar.php"); ?>
    </div>


    <div class="col-md-9">
      <h1><i class="fa fa-folder"></i> Users <small>View All Users</small></h1><hr>
      <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-tachometer-alt"></i> Dashboard </a></li>
        <li><i class="fa fa-user"></i> Users </li>
      </ul>
      <form action="" method="post">
      <div class="row">
        <div class="col-sm-8">
            <div class="row">
              <div class="col-xs-4">
                <div class="form-group">
                  <select name="bulk-options" id="" class="form-control">
                    <option value="delete">Delete</option>
                    <option value="approve">Approve</option>
                    <option value="unapprove">Unapprove</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-8">
                <input type="submit" value="Apply" class="btn btn-success">
              </div>
            </div>
        </div>

        <?php
        $user_query = "SELECT * FROM comments";
        if($user_data = mysqli_query($conn,$user_query)){
        ?>

        <div class="col-md-12">
          <?php if(isset($msg)){
            echo "<div class='alert alert-success'>
                  <strong>$msg</strong></div>";
          }
          else if(isset($error)) {echo "<div class='alert alert-dangers'>
                <strong>$error</strong></div>";}
          ?>
          <table class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th><input id="selectallboxes" type="checkbox"></th>
                <th>Sr #</th>
                <th>Date</th>
                <th>Username</th>
                <th>Comment</th>
                <th>Status</th>
                <th>Approve</th>
                <th>Unapprove</th>
                <th>Reply</th>
                <th>Del</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_array($user_data)){
                $id = $row['id'];
                $post_id = $row['post_id'];
                $date = getdate($row['date']);
                $day = $date['mday'];
                $month = substr($date['month'],0,3);
                $year = $date['year'];
                $uname = $row['username'];
                $comment = $row['comment'];
                $status = $row['status'];
                $username = $row['username'];

               ?>
              <tr>
                <td><input name ="checkboxes[]" class="checkboxes" type="checkbox" value="<?php echo "$id"; ?>"></td>
                <td><?php echo $id; ?></td>
                <td><?php echo "$day ".substr($month,0,3)." $year"; ?></td>
                <td><?php echo $username; ?></td>
                <td><?php echo $comment; ?></td>
                <td><?php echo ucfirst($status); ?></td>
                <td><a href="comments.php?approve=<?php echo $id; ?>">Approve</a></td>
                <td><a href="comments.php?unapprove=<?php echo $id; ?>">Unapprove</a></td>
                <td><a href="comments.php?reply=<?php echo $post_id; ?>"><i class="fa fa-reply"></i></a></td>
                <td><a href="comments.php?del=<?php echo $id; ?>"><i class="fa fa-times"></i></a></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
          </form>
        <?php } else{  echo "<center><h1>No User Available</h1></center>";
           } ?>
        </div>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
