<?php
$top_username = $_SESSION['username'];
$top_role = ucfirst($_SESSION['role']);
?>
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
          <a class="navbar-brand" href="index.php">Admin Panel</a>
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="profile.php"></span> <?php echo "Hello, $top_username ($top_role)"; ?></a></li>
            <li><a href="add-post.php"><span class="fa fa-plus-square"></span> Add Post</a></li>
            <li><a href="add-user.php"><span class="fa fa-user-plus"></span> Add User</a></li>
            <li><a href="profile.php"><span class="fa fa-user"></span> Profile</a></li>
            <li><a href="logout.php"><span class="fa fa-power-off"></span> Log Out</a></li>
          </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
