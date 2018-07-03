<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <!-- 1 --><link rel="stylesheet" type="text/css" href="animate.css">
  <!-- 2 --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Latest compiled and minified CSS -->
  <!-- 3 --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- 4 --><link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Open+Sans|Raleway|Roboto" rel="stylesheet">
  <!-- 5 --><link rel="stylesheet" type="text/css" href="css/style_admin.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin Panel</a>
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="fa fa-plus-square"></span> Add Post</a></li>
            <li><a href="contact.php"><span class="fa fa-user-plus"></span> Add User</a></li>
            <li><a href="#"><span class="fa fa-user"></span> Profile</a></li>
            <li><a href="contact.php"><span class="fa fa-power-off"></span> Log Out</a></li>
          </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="list-group">
    <a href="index.php" class="list-group-item active">
        <span class="fa fa-tachometer-alt"></span> Dashboard
    </a>
    <a href="#" class="list-group-item">
        <span class="fa fa-file-alt"></span> All Post <span class="badge">145</span>
    </a>
    <a href="categories.php" class="list-group-item">
        <span class="fa fa-folder"></span> Categories <span class="badge">50</span>
    </a>
    <a href="#" class="list-group-item">
        <span class="fa fa-comment"></span> Comments <span class="badge">8</span>
    </a>
    <a href="users.php" class="list-group-item">
        <span class="fa fa-users"></span> Users <span class="badge">8</span>
    </a>
</div>
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