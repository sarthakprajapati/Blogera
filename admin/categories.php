<?php session_start();
 if(!isset($_SESSION['username'])){
  header('Location: sign.php');
}
else if (isset($_SESSION['username'])&& $_SESSION['role']=='author') {
  header('Location: logout.php');
}

if(isset($_GET['edit'])){
    $edit_id = $_GET['edit'];
}

require_once '../inc/db.php';
if(isset($_GET['del'])){
  $del_id = $_GET['del'];
  if(isset($_SESSION['username']) && $_SESSION['role']=='admin'){
      $del_query = "DELETE FROM categories WHERE id = '$del_id'";
      if(mysqli_query($conn,$del_query)){
        $del_msg = "Category has been deleted";
      }
      else{
        $del_error = "Category has not been deleted";
      }
  }
}

include_once '../inc/db.php';

if(isset($_POST['submit'])){
    $cat_name = mysqli_real_escape_string($conn,strtolower($_POST['cat-name']));
    if(!empty($cat_name)){
    $cat_query = "SELECT * FROM categories where category = '$cat_name'";
    $cat_query_run = mysqli_query($conn,$cat_query);
    if(mysqli_num_rows($cat_query_run)>0){
      $error = "Category already exist";
    }
    else {
      $insert_query = "INSERT INTO categories (category) VALUES ('$cat_name')";
      if(mysqli_query($conn, $insert_query)){
        $msg = "Category has been added";
}
}
  }
  else if(empty($cat_name)){
    $error = "Must fill this field";
  }
      else {
        $error = "Category has not been added";
      }
  }



if(isset($_POST['update'])){
    $cat_name = mysqli_real_escape_string($conn,strtolower($_POST['cat-name']));
    if(!empty($cat_name)){
    $cat_query = "SELECT * FROM categories where category = '$cat_name'";
    $cat_query_run = mysqli_query($conn,$cat_query);
    if(mysqli_num_rows($cat_query_run)>0){
      $u_error = "Category already exist";
    }
    else {
      $update_query = "UPDATE `categories` SET `category` = '$cat_name' WHERE `categories`.`id` = '$edit_id';";
      if(mysqli_query($conn, $update_query)){
        $u_msg = "Category has been updated";
    }
  }
  }
  else if(empty($cat_name)){
    $u_error = "Must fill this field";
  }
  else {
        $error = "Category has not been updated";
      }
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
      <h1><i class="fa fa-folder"></i> Categories <small></small></h1><hr>
      <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-tachometer-alt"></i> Dashboard </a></li>
        <li><i class="fa fa-folder"></i> Categories </li>
      </ul>
      <div class="row">
        <div class="col-md-6">
          <?php if(isset($error)) {
            echo "<div class='alert alert-danger'>
                  <strong>$error</strong></div>";
          }
          elseif(isset($msg)) {
            echo "<div class='alert alert-success'>
                  <strong>$msg</strong></div>";
          } ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="category">Category Name: </label>
              <input type="text" placeholder="Category Name" name="cat-name"class="form-control">
            </div>
            <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
          </form>

        <hr>
        <?php if(isset($u_error)) {
          echo "<div class='alert alert-danger'>
                <strong>$u_error</strong></div>";
        }
        elseif(isset($u_msg)) {
          echo "<div class='alert alert-success'>
                <strong>$u_msg</strong></div>";
        } ?>
        <?php if(isset($_GET['edit'])){
          $edit_check_query = "SELECT * FROM categories WHERE id = $edit_id";
          $edit_check_run = mysqli_query($conn,$edit_check_query);
          if(mysqli_num_rows($edit_check_run)){
              $edit_row = mysqli_fetch_array($edit_check_run);
              $up_category = $edit_row['category'];
           ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="category">Update Category Name: </label>
              <input type="text" value="<?php echo "$up_category"; ?>" placeholder="Category Name" name="cat-name"class="form-control">
            </div>
            <input type="submit" name="update" value="Update Category" class="btn btn-primary">
          </form>
          <?php }
        } ?>
        </div>
        <div class="col-md-6">
          <?php if(isset($del_error)) {
            echo "<div class='alert alert-danger'>
                  <strong>$del_error</strong></div>";
          }
          elseif(isset($del_msg)) {
            echo "<div class='alert alert-success'>
                  <strong>$del_msg</strong></div>";
          } ?>
          <?php
          $get_query = "SELECT * FROM categories";
          $get_query_run = mysqli_query($conn,$get_query);
          if(mysqli_num_rows($get_query_run)>0){
          ?>
          <table class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>Sr #</th>
                <th>Category</th>
                <th>Posts</th>
                <th>Edit</th>
                <th>Del</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($cat_row = mysqli_fetch_array($get_query_run)){
                  $cat_id = $cat_row['id'];
                  $cat_name = $cat_row['category'];
              ?>
              <tr>
                <td><?php echo $cat_id; ?></td>
                <td><?php echo ucfirst($cat_name); ?></td>
                <td>12</td>
                <td><a href="categories.php?edit=<?php echo $cat_id; ?>"><i class="fa fa-pencil-alt"></i></a></td>
                <td><a href="categories.php?del=<?php echo $cat_id; ?>"><i class="fa fa-times"></i></a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <?php
            }
            else {
              echo "<h3><center>NO CATEGORY EXIST</center></h3>";
            }
         ?>
        </div>
      </div>

    </div>
  </div>
</div>
  </body>
</html>
