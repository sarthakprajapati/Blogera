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
          <form action="">
            <div class="form-group">
              <label for="category">Category Name: </label>
              <input type="text" placeholder="Category Name" class="form-control">
            </div>
            <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
          </form>
        </div>
        <div class="col-md-6">
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
              <tr>
                <td>1</td>
                <td>Instagram</td>
                <td>12</td>
                <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
                <td><a href="#"><i class="fa fa-times"></i></a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Instagram</td>
                <td>12</td>
                <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
                <td><a href="#"><i class="fa fa-times"></i></a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Instagram</td>
                <td>12</td>
                <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
                <td><a href="#"><i class="fa fa-times"></i></a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Instagram</td>
                <td>12</td>
                <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
                <td><a href="#"><i class="fa fa-times"></i></a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Instagram</td>
                <td>12</td>
                <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
                <td><a href="#"><i class="fa fa-times"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  
    </div>
  </div>
</div>
  </body>
</html>