<?php require_once("inc/top.php"); ?>
  <body>
<?php require_once("inc/header.php"); ?>

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
      <div class="row">
        <div class="col-sm-8">
          <form action="">
            <div class="row">
              <div class="col-xs-4">
                <div class="form-group">
                  <select name="" id="" class="form-control">
                    <option value="delete">Delete</option>
                    <option value="author">Change To Author</option>
                    <option value="admin">Change to Admin</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-8">
                <input type="submit" value="Apply" class="btn btn-success">
                <a href="#" class="btn btn-primary">Add New</a>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-12">
          <table class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th><input type="checkbox"></th>
                <th>Sr #</th>
                <th>Date</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Image</th>
                <th>Password</th>
                <th>Role</th>
                <th>Posts</th>
                <th>Edit</th>
                <th>Del</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox"></td>
                <td>1</td>
                <td>23 June 2018</td>
                <td>Sarthak Prajapati</td>
                <td>sarthak_ishu11</td>
                <td>sarthakprajapati@live.in</td>
                <td><img src="img/1.jpg" width="30px"></td>
                <td>12345678</td>
                <td>Admin</td>
                <td>11</td>
                <td><a href="#"><i class="fa fa-times"></i></a></td>
                <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>1</td>
                <td>23 June 2018</td>
                <td>Sarthak Prajapati</td>
                <td>sarthak_ishu11</td>
                <td>sarthakprajapati@live.in</td>
                <td><img src="img/1.jpg" width="30px"></td>
                <td>12345678</td>
                <td>Admin</td>
                <td>11</td>
                <td><a href="#"><i class="fa fa-times"></i></a></td>
                <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>1</td>
                <td>23 June 2018</td>
                <td>Sarthak Prajapati</td>
                <td>sarthak_ishu11</td>
                <td>sarthakprajapati@live.in</td>
                <td><img src="img/1.jpg" width="30px"></td>
                <td>12345678</td>
                <td>Admin</td>
                <td>11</td>
                <td><a href="#"><i class="fa fa-times"></i></a></td>
                <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>1</td>
                <td>23 June 2018</td>
                <td>Sarthak Prajapati</td>
                <td>sarthak_ishu11</td>
                <td>sarthakprajapati@live.in</td>
                <td><img src="img/1.jpg" width="30px"></td>
                <td>12345678</td>
                <td>Admin</td>
                <td>11</td>
                <td><a href="#"><i class="fa fa-times"></i></a></td>
                <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>1</td>
                <td>23 June 2018</td>
                <td>Sarthak Prajapati</td>
                <td>sarthak_ishu11</td>
                <td>sarthakprajapati@live.in</td>
                <td><img src="img/1.jpg" width="30px"></td>
                <td>12345678</td>
                <td>Admin</td>
                <td>11</td>
                <td><a href="#"><i class="fa fa-times"></i></a></td>
                <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
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