<?php require_once '../inc/db.php'; ?>
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

        <?php
        $user_query = "SELECT * FROM users";
        if($user_data = mysqli_query($conn,$user_query)){
        ?>

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
              <?php
                while($row = mysqli_fetch_array($user_data)){
                $id = $row['id'];
                echo "<h1>string</h1>";
                $date = getdate($row['date']);
                $day = $date['mday'];
                $month = $date['month'];
                $year = $date['year'];
                $fname = $row['first_name'];
                $lname = $row['last_name'];
                $uname = $row['username'];
                $email = $row['email'];
                $image = $row['image'];
                $password = $row['password'];
                $role = $row['role'];
                $details = $row['details'];
                $salt = $row['salt'];
               ?>
              <tr>
                <td><input type="checkbox"></td>
                <td><?php echo $id; ?></td>
                <td><?php echo "$day ".substr($month,0,3)." $year"; ?></td>
                <td><?php echo "$fname $lname"; ?></td>
                <td><?php echo $uname; ?></td>
                <td><?php echo $email; ?></td>
                <td><img src="img/<?php echo $image; ?>" width="30px"></td>
                <td>*********</td>
                <td><?php echo $role; ?></td>
                <td>11</td>
                <td><a href="add-user.php?edit=<?php echo $id; ?>"><i class="fa fa-pencil-alt"></i></a></td>
                <td><a href="users.php?del=<?php echo $id; ?>"><i class="fa fa-times"></i></a></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        <?php } else{  echo "<center><h1>No User Available</h1></center>";
           } ?>
        </div>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
