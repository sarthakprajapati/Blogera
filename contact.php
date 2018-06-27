<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>BLOG</title>

    <!-- Viewport -->

  <meta charset="UTF-8">
  <meta name="description" content="Blogging Website">
  <meta name="keywords" content="Blogging,Site,Platform">
  <meta name="author" content="Sarthak Prajapati">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<link rel="stylesheet" type="text/css" href="animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Open+Sans|Raleway|Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

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
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
          </ul>
        </li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
	<div class="container-fluid">
		<div  class="animated fadeInLeft" id="details">
			<h1>Contact<span> Us</span></h1>
			<p>Available 24x7. So Feel Free To Contact Us</p>
		</div>
	</div>
</div>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">'
          <div class="col-md-12">
                  <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBXLUAvfnZWs0irxaMF8DBQscU64AhKqac'></script><div style='overflow:hidden;height:382px;width:100%;'><div id='gmap_canvas' style='height:382px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://mapswebsite.net/'> </a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=f14cedb025e3f86b8ec7b7839aa95a36aad8847f'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(28.380163,79.41054689999999),mapTypeId: google.maps.MapTypeId.SATELLITE};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.380163,79.41054689999999)});infowindow = new google.maps.InfoWindow({content:'<strong>Hartman College Road</strong><br>Paras Sweet<br>243001 Bareilly<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script> 
            </div>
          <div class="col-md-12 contact-form">
            <h2>Contact Form</h2>
            <hr>
            <form action="">
              <div class="form-group">
                <label for="full-name">Full Name*:</label>
                <input type="text" id="full-name" placeholder="Full Name" class="form-control">
              </div>

              <div class="form-group">
                <label for="email">Email*:</label>
                <input type="text" id="email" placeholder="Email" class="form-control">
              </div>

              <div class="form-group">
                <label for="website">Website:</label>
                <input type="text" id="website" placeholder="Website" class="form-control">
              </div>

              <div class="form-group">
                <label for="message">Message*:</label>
                <textarea id="message" cols="30" rows="10" class="form-control" placeholder="Your Message Should Be Here!"></textarea>
              </div>           
              <input type="submit" name="submit" value="Submit" class="btn btn-primary">                               
            </form>
          </div>
			</div>
			<div class="col-md-4">
				 <div class="input-group">
      				<input type="text" class="form-control" placeholder="Search for...">
      				<span class="input-group-btn">
        			<button class="btn btn-default" type="button">Go!</button>
      				</span>
   				 </div><!-- /input-group -->
   				 <div class="widgets">
   				 	<div class="popular">
   				 		<h4>POPULAR POSTS</h4>
   				 		<hr>
   				 		<div class="row">
   				 		<div class="col-md-4">
   				 			<img src="https://i2.wp.com/beebom.com/wp-content/uploads/2016/01/Reverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg?resize=640%2C426">	
   				 		</div>
   				 		<div class="col-md-8 details">
   				 			<h3>This is heading</h3>
   				 			<p><i class="fa fa-clock-o"></i>  18 June 2018</p>
   				 		</div>
   				 	</div>
   				 	<hr>
   				 		<div class="row">
   				 		<div class="col-md-4">
   				 			<img src="https://i2.wp.com/beebom.com/wp-content/uploads/2016/01/Reverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg?resize=640%2C426">	
   				 		</div>
   				 		<div class="col-md-8 details">
   				 			<h3>This is heading</h3>
   				 			<p><i class="fa fa-clock-o"></i>  18 June 2018</p>
   				 		</div>
   				 	</div>
   				 	<hr>
   				 		<div class="row">
   				 		<div class="col-md-4">
   				 			<img src="https://i2.wp.com/beebom.com/wp-content/uploads/2016/01/Reverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg?resize=640%2C426">	
   				 		</div>
   				 		<div class="col-md-8 details">
   				 			<h3>This is heading</h3>
   				 			<p><i class="fa fa-clock-o"></i>  18 June 2018</p>
   				 		</div>
   				 	</div>
   				 	<hr>
   				 		<div class="row">
   				 		<div class="col-md-4">
   				 			<img src="https://i2.wp.com/beebom.com/wp-content/uploads/2016/01/Reverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg?resize=640%2C426">	
   				 		</div>
   				 		<div class="col-md-8 details">
   				 			<h3>This is heading</h3>
   				 			<p><i class="fa fa-clock-o"></i>  18 June 2018</p>
   				 		</div>
   				 	</div>
   				 	</div>
   				 </div>

   				 <div class="widgets">
   				 	<div class="popular">
   				 		<h4>RECENT POSTS</h4>
   				 		<hr>
   				 		<div class="row">
   				 		<div class="col-md-4">
   				 			<img src="https://i2.wp.com/beebom.com/wp-content/uploads/2016/01/Reverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg?resize=640%2C426">	
   				 		</div>
   				 		<div class="col-md-8 details">
   				 			<h3>This is heading</h3>
   				 			<p><i class="fa fa-clock-o"></i>  18 June 2018</p>
   				 		</div>
   				 	</div>
   				 	<hr>
   				 		<div class="row">
   				 		<div class="col-md-4">
   				 			<img src="https://i2.wp.com/beebom.com/wp-content/uploads/2016/01/Reverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg?resize=640%2C426">	
   				 		</div>
   				 		<div class="col-md-8 details">
   				 			<h3>This is heading</h3>
   				 			<p><i class="fa fa-clock-o"></i>  18 June 2018</p>
   				 		</div>
   				 	</div>
   				 	<hr>
   				 		<div class="row">
   				 		<div class="col-md-4">
   				 			<img src="https://i2.wp.com/beebom.com/wp-content/uploads/2016/01/Reverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg?resize=640%2C426">	
   				 		</div>
   				 		<div class="col-md-8 details">
   				 			<h3>This is heading</h3>
   				 			<p><i class="fa fa-clock-o"></i>  18 June 2018</p>
   				 		</div>
   				 	</div>
   				 	<hr>
   				 		<div class="row">
   				 		<div class="col-md-4">
   				 			<img src="https://i2.wp.com/beebom.com/wp-content/uploads/2016/01/Reverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg?resize=640%2C426">	
   				 		</div>
   				 		<div class="col-md-8 details">
   				 			<h3>This is heading</h3>
   				 			<p><i class="fa fa-clock-o"></i>  18 June 2018</p>
   				 		</div>
   				 	</div>
   				 	</div>
   				 </div>

   				 <div class="widgets">
   				 	<div class="popular">
   				 		<h4>CATEGORIES</h4>
   				 		<hr>
   				 		<div class="row">
   				 			<div class="col-md-6">
   				 			<ul>
   				 				<li><a href="">Category</a></li>
   				 				<li><a href="">Category</a></li>
   				 				<li><a href="">Category</a></li>
   				 				<li><a href="">Category</a></li>
   				 				<li><a href="">Category</a></li>
   				 			</ul>
   				 	</div>
   				 	<div class="col-md-6">
   				 			<ul>
   				 				<li><a href="">Category</a></li>
   				 				<li><a href="">Category</a></li>
   				 				<li><a href="">Category</a></li>
   				 				<li><a href="">Category</a></li>
   				 				<li><a href="">Category</a></li>
   				 			</ul>
   				 	</div>
   				 	</div>
   				 </div>
			</div>
		</div>
	</div>
</section>


<footer>
<div class="container">
	Copyright &copy; by <a href=""> Sarthak Prajapati </a>. All Rights Reserved from 2017 - <?php echo date("Y"); ?>
</div>	
</footer>
</body>
</html>