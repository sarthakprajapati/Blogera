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

	<!-- 1.Animate.css
	2.Font-Awesome
	3.Bootstrap-Min
	4.Google Fonts
	5.External Stylesheet -->

	<!-- CSS -->

	<!-- 1 --><link rel="stylesheet" type="text/css" href="animate.css">
	<!-- 2 --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
	<!-- 3 --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- 4 --><link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Open+Sans|Raleway|Roboto" rel="stylesheet">
	<!-- 5 --><link rel="stylesheet" type="text/css" href="style.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Navbar -->

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
      		<a class="navbar-brand" href="sign.php">BLOG</a>
    	</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      		<ul class="nav navbar-nav navbar-right">
        		<li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        		<li class="dropdown">
        			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th"></span> Categories <span class="caret"></span>
        			</a>

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
			<h1>Sarthak<span> Blog</span></h1>
			<p>Blogging Website</p>
		</div>
	</div>
</div>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="post">
					<div class="row">
						<div class="col-md-2 post-date">
							<div class="day">18</div>
							<div class="month">June</div>
							<div class="year">2018</div>
						</div>

						<div class="col-md-8 post-title">
							<a href="#"><h2><strong>
Instagram plans to launch Snapchat Discover-style video hub</strong></h2></a>
							<p>Written By: <span>Sarthak Prajapati</span></p>
						</div>

						<div class="col-md-2 profile-picture ">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqjwcpug_2Sl2v844V-CBerlmS2R5AvH67mPtQL9hdy8Yye3Xqow" class="img-circle">
						</div>
					</div>

					<a href=""><img src="https://techcrunch.com/wp-content/uploads/2017/01/instagram-stories-steal-snapchat.png?w=1390&crop=1" alt=""></a>

					<p class="desc">
						Instagram  is preparing to unveil a home for longer-form video — a YouTube competitor and its take on Snapchat Discover. According to multiple sources, Instagram will offer a dedicated space featuring scripted shows, music videos and more in vertically oriented, full-screen, high-def 4K resolution. Instagram has been meeting with popular social media stars and content publishers to find out how their video channels elsewhere would work within its app. It’s also lining up launch partners for an announcement of the long-form video effort tentatively scheduled for June 20th.
					</p>

					<a href="#" class="btn btn-primary"> Read More </a>

					<div class="bottom">
						<span class="first"><i class="fa fa-folder"></i> <a href="">Category</a></span> |
					 	<span class="sec"><i class="fa fa-comment"></i> <a href="">Comment</a></span>
					</div>

				</div>


				<div class="post">
					<div class="row">
						<div class="col-md-2 post-date">
							<div class="day">18</div>
							<div class="month">June</div>
							<div class="year">2018</div>
						</div>
						<div class="col-md-8 post-title">
							<a href="#"><h2><strong>
Subscription video services’ recommendations aren’t working, study claims</strong></h2></a>

							<p>Written By: <span>Sarthak Prajapati</span></p>
						</div>

						<div class="col-md-2 profile-picture ">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqjwcpug_2Sl2v844V-CBerlmS2R5AvH67mPtQL9hdy8Yye3Xqow" class="img-circle">
						</div>

					</div>

					<a href=""><img src="https://techcrunch.com/wp-content/uploads/2017/04/hulu-youtube-netflix-hbo-cbs-nfl-sunday-ticket.png?w=1390&crop=1" alt=""></a>
					
					<p class="desc">
						Streaming video services invest heavily in technology to improve their ability to show users a set of personalized recommendations about what to watch next. But according to a new research study released today by UserTesting, it seems that consumers aren’t watching much recommended content — in fact, only 29 percent of the study’s participants said they actually watched something the service recommended.
					 </p>

					 <a href="#" class="btn btn-primary"> Read More </a>

					<div class="bottom">
					 	<span class="first"><i class="fa fa-folder"></i> <a href="">Category</a></span> |
					 	<span class="sec"><i class="fa fa-comment"></i> <a href="">Comment</a></span>
					</div>

				</div>

				<div class="post">
					<div class="row">
						<div class="col-md-2 post-date">
							<div class="day">18</div>
							<div class="month">June</div>
							<div class="year">2018</div>
						</div>

						<div class="col-md-8 post-title">
							<a href="#"><h2><strong>
YouTube introduces channel memberships, merchandise and premieres</strong></h2></a>

							<p>Written By: <span>Sarthak Prajapati</span></p>
						</div>

						<div class="col-md-2 profile-picture ">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqjwcpug_2Sl2v844V-CBerlmS2R5AvH67mPtQL9hdy8Yye3Xqow" class="img-circle">
						</div>

					</div>

					<a href=""><img src="https://techcrunch.com/wp-content/uploads/2017/09/gettyimages-502130278a.jpg?w=1390&crop=1" alt=""></a>

					<p class="desc">
						YouTube  creators are gaining a number of new tools to generate revenue from their videos outside of traditional advertising, as well as those that will help them better engage their fans, according to news the video streaming site announced today at the VidCon conference in Anaheim, California. This includes the rollout of channel memberships, merchandising, marketing partnerships via FameBit and the launch of “Premieres,” which offers a middle ground between pre-recorded, edited video and live streaming.
					 </p>

					 <a href="#" class="btn btn-primary"> Read More </a>

					 <div class="bottom">
					 	<span class="first"><i class="fa fa-folder"></i> <a href="">Category</a></span> |
					 	<span class="sec"><i class="fa fa-comment"></i> <a href="">Comment</a></span>
					 </div>

				</div>

				<!-- Pagination -->

	<nav aria-label="Page navigation">
		<div id="pagination">
  			<ul class="pagination">
    			<li>	
    				<a href="#" aria-label="Previous">
        				<span aria-hidden="true">&laquo;</span>
      				</a>
    			</li>
    			<li class="active"><a href="#">1</a></li>
    			<li><a href="#">2</a></li>
    			<li><a href="#">3</a></li>
    			<li><a href="#">4</a></li>
    			<li><a href="#">5</a></li>
    			<li>
      			<a href="#" aria-label="Next">
        			<span aria-hidden="true">&raquo;</span>
      			</a>
    			</li>
  			</ul>
  		</div>
</nav>

<!-- Pagination Ends -->

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