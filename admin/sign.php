<?php require_once '../inc/db.php';
session_start();
ob_start();
if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($conn,strtolower($_POST['username']));
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $check_username_query = "SELECT * FROM users where username = '$username'";
  $check_username_run = mysqli_query($conn,$check_username_query);

  if(mysqli_num_rows($check_username_run)){
    $row = mysqli_fetch_array($check_username_run);
    $db_username = $row['username'];
    $db_password = $row['password'];
    $db_role = $row['role'];
    $db_salt = $row['salt'];
    $db_author_image = $row['image'];

    $hash = crypt($row['salt'],$password);
    echo "$password $db_password ";
    if($username == $db_username and $hash == $db_password){
      header('Location: index.php');
      $_SESSION['username'] = $db_username;
      $_SESSION['role'] = $db_role;
      $_SESSION['author_image'] = $db_author_image;
    }
    else {
      $error = "Username Or Password is incorrect";
    }
  }
  else{
    $error = "Username Or Password is incorrect";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Viewport -->

  <meta charset="UTF-8">
  <meta name="description" content="Blogging Website">
  <meta name="keywords" content="Blogging,Site,Platform">
  <meta name="author" content="Sarthak Prajapati">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Sign In</title>

   <link rel="stylesheet" type="text/css" href="../css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Open+Sans|Raleway|Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/sign.css">
<style>
    #particle {
  top: 0px;
  bottom: 0;
  left: 0;
  right: 0;
  position: fixed;
  width: 100%;
  height: 100%;
}

</style>
  </head>

  <body>
<div id="particle"></div>
    <div class="container animated shake">
      <form class="form-signin" method="post">
        <h3 class="form-signin-heading">Hello, Admin Sign In</h3>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <input type="submit" name="submit" value="Sign In" class="btn btn-lg btn-success btn-block">
      </form>
</div>
    </div> <!-- /container -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<script type="text/javascript">
particlesJS("particle", {"particles":{"number":{"value":100,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"polygon","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.3,"width":1},"move":{"enable":true,"speed":3,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>
  </body>
</html>
