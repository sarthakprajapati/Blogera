<?php require_once 'db.php'; ?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">BLOG</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th"></span> Categories <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
              $query = "SELECT * FROM categories order by id desc";
              $run = mysqli_query($conn,$query);
              if(mysqli_num_rows($run)>0){
                while($row = mysqli_fetch_array($run)){
                  $category = $row['category'];
                  $id = $row['id'];
                  echo "<li><a href='index.php?cat=$id'>$category</a></li>";
                }
              }else{
                echo "<li><a href='#''>No Categories Yet</a></li>";
              }
             ?>

          </ul>
        </li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>