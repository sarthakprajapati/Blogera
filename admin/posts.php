<?php require_once '../inc/db.php'; ?>
<?php session_start();
 if(!isset($_SESSION['username'])){
 header('Location: sign.php');
}
?>
<?php require_once("inc/top.php");
$username = $_SESSION['username'];
?>
<body>
<?php require_once("inc/header.php"); ?>
<?php if(isset($_GET['del'])){
    $del_id = $_GET['del'];

    if(isset($_SESSION['username']) && $_SESSION['role'] =='admin'){
      $del_query = "DELETE FROM `posts` WHERE `id` = $del_id";
      if(mysqli_query($conn,$del_query)){
        $msg = "Post has been deleted";
      }
      else {
        $error = "Post has not been deleted";
        }
      }
      else if(isset($_SESSION['username']) && $_SESSION['role'] == 'author'){
        $del_query = "DELETE FROM `posts` WHERE `id` = $del_id and username = '$username'";
        if(mysqli_query($conn,$del_query)){
          $msg = "Post has been deleted";
        }
        else {
          $error = "Post has not been deleted";
          }
      }
    }
if(isset($_POST['checkboxes'])){
  foreach ($_POST['checkboxes'] as $user_id) {
    $bulk_option = $_POST['bulk-options'];
    if($bulk_option =='delete'){
      $bulk_del_query = "DELETE FROM `posts` WHERE `id` = $user_id";
      mysqli_query($conn,$bulk_del_query);
    }
    elseif ($bulk_option == 'publish') {
      $bulk_author_query = "UPDATE `posts` SET `status` = 'publish' WHERE `id` = $user_id";
      mysqli_query($conn,$bulk_author_query);
    }
    elseif ($bulk_option == 'draft') {
      $bulk_admin_query = "UPDATE `posts` SET `status` = 'draft' WHERE `id` = $user_id";
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
      <h1><i class="fa fa-file"></i> Posts <small>View All Posts</small></h1><hr>
      <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-tachometer-alt"></i> Dashboard </a></li>
        <li><i class="fa fa-file"></i>Posts </li>
      </ul>
      <form action="" method="post">
      <div class="row">
        <div class="col-sm-8">
            <div class="row">
              <div class="col-xs-4">
                <div class="form-group">
                  <select name="bulk-options" id="" class="form-control">
                    <option value="delete">Delete</option>
                    <option value="publish">Publish</option>
                    <option value="draft">Draft</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-8">
                <input type="submit" value="Apply" class="btn btn-success">
                <a href="add-post.php" class="btn btn-primary">Add New</a>
              </div>
            </div>
        </div>

        <?php
        if($_SESSION['role'] == 'admin'){
        $user_query = "SELECT * FROM posts";
        }
        else if($_SESSION['role'] == 'author'){
        $user_query = "SELECT * FROM posts where username = '$username'";
        }

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
                <th>Title</th>
                <th>Name</th>
                <th>Image</th>
                <th>Categories</th>
                <th>Views</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Del</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_array($user_data)){
                $id = $row['id'];
                $date = getdate($row['date']);
                $day = $date['mday'];
                $month = $date['month'];
                $year = $date['year'];
                $title = $row['title'];
                $author = $row['author'];
                $image = $row['image'];
                $categories = $row['categories'];
                $views = $row['views'];
                $status = $row['status'];
               ?>
              <tr>
                <td><input name ="checkboxes[]" class="checkboxes" type="checkbox" value="<?php echo "$id"; ?>"></td>
                <td><?php echo $id; ?></td>
                <td><?php echo "$day ".substr($month,0,3)." $year"; ?></td>
                <td><?php echo $title; ?></td>
                <td><?php echo $author; ?></td>
                <td><img src="img/<?php echo $image; ?>" width="30px"></td>
                <td><?php echo $categories; ?></td>
                <td><?php echo $views; ?></td>
                <td><?php echo $status; ?></td>
                <td><a href="edit-post.php?edit=<?php echo $id; ?>"><i class="fa fa-pencil-alt"></i></a></td>
                <td><a href="posts.php?del=<?php echo $id; ?>"><i class="fa fa-times"></i></a></td>
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
