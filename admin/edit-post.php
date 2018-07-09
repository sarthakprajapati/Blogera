<?php require_once '../inc/db.php'; ?>
<?php require_once("inc/top.php");
?>
<?php
session_start();
 if(!isset($_SESSION['username'])){
  header('Location: sign.php');
}
?>
  <body>
<?php require_once("inc/header.php");
$session_username = $_SESSION['username'];
$session_author_image = $_SESSION['author_image'];
$session_role = $_SESSION['role'];

if(isset($_GET['edit'])){
  $edit_id = $_GET['edit'];
  if($session_role == 'admin'){
    $get_query = "SELECT * FROM posts WHERE id = $edit_id";
    $get_run = mysqli_query($conn,$get_query);
  }

  elseif($session_role == 'author'){
    $get_query = "SELECT * FROM posts WHERE id = $edit_id author = '$session_username'";
    $get_run = mysqli_query($conn,$get_query);
  }

  if(mysqli_num_rows($get_run)>0){
    while($get_row = mysqli_fetch_array($get_run)){
    $title = $get_row['title'];
    $post_data = $get_row['post_data'];
    $tags = $get_row['tags'];
    $image = $get_row['image'];
    $status = $get_row['status'];
    $categories = $get_row['categories'];
  }
}
  else{
    header('location: posts.php');
  }

}

 ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <?php require_once("inc/sidebar.php"); ?>
    </div>

    <div class="col-md-9">
      <h1><i class="fa fa-pencil-alt"></i> Add Post <small></small></h1><hr>
      <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
        <li><i class="fa fa-pencil-alt"></i> Edit Post </li>
      </ul>
      <?php
      if(isset($_POST['update'])){
        $up_title = mysqli_real_escape_string($conn,$_POST['title']);
        $up_post_data = mysqli_real_escape_string($conn,$_POST['post_data']);
        $up_categories = $_POST['categories'];
        $up_tags = mysqli_real_escape_string($conn, $_POST['tags']);
        $up_image = $_FILES['image']['name'];
        $up_status = $_POST['status'];
        $up_tmp_image = $_FILES['image']['tmp_name'];
        if(empty($up_image)){
          $up_image = $image;
        }
        if(empty($up_title) or empty($up_post_data) or empty($up_tags)){
          $error = "All (*) fields are required";
        }
        else{
          $update_query = "UPDATE posts SET title = '$up_title', image = '$up_image',categories = '$up_categories', tags = '$up_tags', post_data = '$up_post_data',status = '$up_status' WHERE id = $edit_id ";
          if(mysqli_query($conn,$update_query)){
            $msg = "Post has been updated";
            $path = "img/$image";
            header('location: edit-post.php?edit=$edit_id');
            if(!empty($up_image)){
              if(move_uploaded_file($up_tmp_image,$path)){
                copy($path,"../$path");
              }
            }
          }
        }
      }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <?php if(isset($error)) {
            echo "<div class='alert alert-danger'>
                  <strong>$error</strong></div>";
          }
          elseif(isset($msg)) {
            echo "<div class='alert alert-success'>
                  <strong>$msg</strong></div>";
          } ?>
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="title">Title:*</label>
              <input type="text" name="title" class="form-control" placeholder="Type post title here" value="<?php if(isset($title)){echo $title;}?>">
            </div>
            <div class="form-group">
              <a href="media.php" class="btn btn-primary">Add Media</a>
            </div>
            <div class="form-group">
              <textarea name="post_data" rows="8" id="textarea" class="form-control" value="<?php if(isset($post_data)){echo $post_data;}?>"></textarea>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="file">Post Image:*</label>
                  <input type="file" name="image" >
                </div>
              </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="categories">Categories:*</label>
                    <select class="form-control" name="categories" id="categories">
                      <?php $cat_query = "SELECT * FROM categories";
                            $cat_query_run = mysqli_query($conn,$cat_query);
                            if(mysqli_num_rows($cat_query_run)>0){
                              while($cat = mysqli_fetch_array($cat_query_run))
                                {
                                  echo "<option value ='".$cat['category']."'>".ucfirst($cat['category'])."</option>";
                                }

                            }
                      ?>
                    </select>
                  </div>
                </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="tags">Tags:*</label>
                      <input type="text" name="tags" class="form-control" placeholder="Your Tags Here" value="<?php if(isset($tags)){echo $tags;}?>">
                    </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="status">Status:*</label>
                    <select class="form-control" name="status" id="status">
                      <option value="<?php if(isset($status) and $status == 'publish'){echo $status;}?>" >Publish</option>
                      <option value="<?php if(isset($status) and $status == 'draft'){echo $status;}?>">Draft</option>
                    </select>
                  </div>
              </div>
              </div>
                <input type="submit" name="update" class="btn btn-primary" value="Update">
            </div>

          </form>
        </div>
      </div>
  </div>
</div>
  </body>
</html>
