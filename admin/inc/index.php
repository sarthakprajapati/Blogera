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
$query_comment = "SELECT * FROM comments where status = 'pending'";
$query_post = "SELECT * FROM posts";
$query_user = "SELECT * FROM users";
$query_category = "SELECT * FROM categories";


$query_comment_run = mysqli_query($conn,$query_comment);
$query_post_run = mysqli_query($conn,$query_post);
$query_user_run = mysqli_query($conn,$query_user);
$query_category_run = mysqli_query($conn,$query_category);

$count_comment = mysqli_num_rows($query_comment_run);
$count_post = mysqli_num_rows($query_post_run);
$count_user = mysqli_num_rows($query_user_run);
$count_category = mysqli_num_rows($query_category_run);
?>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <?php require_once("inc/sidebar.php"); ?>
    </div>


    <div class="col-md-9">
      <h1><i class="fa fa-tachometer-alt"></i> Dashboard <small>Statistics Preview</small></h1><hr>
      <ul class="breadcrumb">
        <li><i class="fa fa-tachometer-alt"></i> Dashboard </li>
      </ul>

      <div class="row tag-boxes">
        <div class="col-md-6 col-lg-3">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-comments fa-5x"></i>
                </div>
                <div class="col-xs-9">
                  <div class="text-right huge"><?php echo $count_comment; ?>
                  </div>
                  <div class="text-right">New Comments
                  </div>
                </div>
              </div>

            </div>
            <a href="comments.php">
                <div class="panel-footer">
                  <span class="pull-left">View All Comments</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle"></i></span>
                  <div class="clearfix"></div>
                  </div>
                  </a>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="panel panel-red">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-file-alt fa-5x"></i>
                </div>
                <div class="col-xs-9">
                  <div class="text-right huge"><?php echo $count_post; ?>
                  </div>
                  <div class="text-right">New Posts
                  </div>
                </div>
              </div>

            </div>
            <a href="posts.php">
                <div class="panel-footer">
                  <span class="pull-left">View All Posts</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle"></i></span>
                  <div class="clearfix"></div>
                  </div>
                  </a>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="panel panel-yellow">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-users fa-5x"></i>
                </div>
                <div class="col-xs-9">
                  <div class="text-right huge"><?php echo $count_user; ?>
                  </div>
                  <div class="text-right">New Users
                  </div>
                </div>
              </div>

            </div>
            <a href="users.php">
                <div class="panel-footer">
                  <span class="pull-left">View All Users</span>
                  <span class="pull-right"><i class="fa fa-arrow-circlec"></i></span>
                  <div class="clearfix"></div>
                  </div>
                  </a>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="panel panel-green">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-folder fa-5x"></i>
                </div>
                <div class="col-xs-9">
                  <div class="text-right huge"><?php echo $count_category; ?>
                  </div>
                  <div class="text-right">Categories
                  </div>
                </div>
              </div>

            </div>
            <a href="categories.php">
                <div class="panel-footer">
                  <span class="pull-left">View All Categories</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle"></i></span>
                  <div class="clearfix"></div>
                  </div>
                  </a>
          </div>
        </div>
      </div>
      <?php $user_query = "SELECT * FROM users";
      $user_query_run = mysqli_query($con,$user_query);
      ?>
      <h1>New Users</h1>
      <hr>
      <table class="table table-striped">
         <thead>
              <tr>
                  <th>Sr #</th>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Role</th>
              </tr>
          </thead>
          <tbody>
            <?php
            if(mysqli_num_rows($user_query_run)>0){
              while($row = mysqli_fetch_array($user_query_run)){
                $id = $row['id'];
                $date = getdate($row['date']);
                $day = $date['mday'];
                $month = $date['month'];
                $year = $date['year'];
                $name = $row['first_name']." ".$row['last_name'];
                $username = $row['username'];
                $role = $row['role'];
            ?>
              <tr>
                  <td><?php echo $id; ?></td>
                  <td><?php echo "$day $month $year"; ?></td>
                  <td><?php echo $name; ?></td>
                  <td><?php echo $username; ?></td>
                  <td><?php echo $role; ?></td>
              </tr>
            <?php    }
                }
             ?>
          </tbody>
      </table>
      <button class="btn btn-primary">View All Users</button>

      <hr>
           <h1>New Posts</h1>
      <hr>
      <table class="table table-striped">
         <thead>
              <tr>
                  <th>Sr #</th>
                  <th>Date</th>
                  <th>Post Title</th>
                  <th>Category</th>
                  <th>Views</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>1</td>
                  <td>20 June 2018</td>
                  <td>Instagram plans to launch Snapchat Discover-style video hub</td>
                  <td>Article</td>
                  <td><i class="fa fa-eye"></i> 12</td>
              </tr>
              <tr>
                  <td>1</td>
                  <td>20 June 2018</td>
                  <td>Instagram plans to launch Snapchat Discover-style video hub</td>
                  <td>Article</td>
                  <td><i class="fa fa-eye"></i> 12</td>
              </tr>
              <tr>
                  <td>1</td>
                  <td>20 June 2018</td>
                  <td>Instagram plans to launch Snapchat Discover-style video hub</td>
                  <td>Article</td>
                  <td><i class="fa fa-eye"></i> 12</td>
              </tr>
              <tr>
                  <td>1</td>
                  <td>20 June 2018</td>
                  <td>Instagram plans to launch Snapchat Discover-style video hub</td>
                  <td>Article</td>
                  <td><i class="fa fa-eye"></i> 12</td>
              </tr>
              <tr>
                  <td>1</td>
                  <td>20 June 2018</td>
                  <td>Instagram plans to launch Snapchat Discover-style video hub</td>
                  <td>Article</td>
                  <td><i class="fa fa-eye"></i> 12</td>
              </tr>
              <tr>
                  <td>1</td>
                  <td>20 June 2018</td>
                  <td>Instagram plans to launch Snapchat Discover-style video hub</td>
                  <td>Article</td>
                  <td><i class="fa fa-eye"></i> 12</td>
              </tr>
          </tbody>
      </table>
      <button class="btn btn-primary">View All Posts</button>
    </div>
  </div>
</div>
  </body>
</html>
