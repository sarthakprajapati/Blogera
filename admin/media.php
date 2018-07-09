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
<?php require_once("inc/header.php"); ?>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <?php require_once("inc/sidebar.php"); ?>
    </div>

    <div class="col-md-9">
      <h1><i class="fa fa-database"></i> Media <small>Add or Delete Media Files</small></h1><hr>
      <ul class="breadcrumb">
        <li class="active"><a href="index.php"><i class="fa fa-tachometer-alt"></i> Dashboard </a></li>
        <li><i class="fa fa-database"></i> Media </li>
      </ul>
      <?php
      if(isset($_POST['submit'])){
        if(count($_FILES['media']['name'])>0){
          for($i = 0; $i < count($_FILES['media']['name']);$i++){
            $image = $_FILES['media']['name'][$i];
            $tmp_name = $_FILES['media']['tmp_name'][$i];
            $query = "INSERT INTO media (image) VALUES ('$image')";
            if(mysqli_query($conn,$query)){
              $path = "media/$image";
              move_uploaded_file($tmp_name,$path);
              copy($path,"../$path");
            }
          }
        }
      }
      ?>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-4 col-xs-8">
            <input type="file" name="media[]" required multiple> <!--IMPORTANT -->
          </div>
          <div class="col-sm-4 col-xs-4">
            <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Add Media">
          </div>
        </div>
      </form>
      <hr>
      <div class="row">
        <?php
        $get_query = "SELECT * FROM media ORDER BY id DESC";
        $get_query_run = mysqli_query($conn,$get_query);
        if(mysqli_num_rows($get_query_run)>0){
          while($get_row = mysqli_fetch_array($get_query_run)){
            $get_image = $get_row['image'];
        ?>
        <div class="col-lg-2 col-md-3 col-sm-6 thumb">
          <a href="media/<?php echo $get_image; ?>" class="thumbnail">
            <img src="media/<?php echo $get_image; ?>" width="100%" alt="">
          </a>
        </div>
        <?php
        }
        }
        else{
          echo "<h1><center>NO MEDIA</center></h1>";
        }
 ?>
</div>
  </div>
</div>
  </body>
</html>
