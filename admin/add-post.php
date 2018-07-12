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
 ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <?php require_once("inc/sidebar.php"); ?>
    </div>

    <div class="col-md-9">
      <h1><i class="fa fa-plus-square"></i> Add Post <small></small></h1><hr>
      <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
        <li><i class="fa fa-plus-square"></i> Add Post </li>
      </ul>
      <?php
      if(isset($_POST['submit'])){
        $date = time();
        $title = mysqli_real_escape_string($conn,$_POST['title']);
        $post_data = mysqli_real_escape_string($conn,$_POST['post-data']);
        $categories = $_POST['categories'];
        $tags = mysqli_real_escape_string($conn, $_POST['tags']);
        $image = $_FILES['image']['name'];
        $status = $_POST['status'];
        $tmp_image = $_FILES['image']['tmp_name'];
        if(empty($title) or empty($post_data) or empty($tags) or empty($image)){
          $error = "All (*) fields are required";
        }
        else{
          $msg = "Post has been added";
          $insert_query = "INSERT INTO posts (date,title,author,author_image,image,categories,tags,post_data,views,status,username) VALUES('$date','$title','$session_username','$session_author_image','$image','$categories','$tags','$post_data','0','$status','$session_username')";
          if(mysqli_query($conn,$insert_query)){
            $msg = "Post has been added";
            $path = "img/$image";
            if(move_uploaded_file($tmp_image,$path)){
              copy($path,"../$path");
            }
            $title = "";
            $post_data = "";
            $categories = "";
            $tags = "";
            $image = "";
            $status ="";
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
              <textarea name="post-data" rows="8" id="textarea" class="form-control" value="<?php if(isset($post_data)){echo $post_data;}?>"></textarea>
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
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            </div>

          </form>
        </div>
      </div>
  </div>
</div>
<?php require_once('inc/footer.php'); ?>
  </body>
</html>
