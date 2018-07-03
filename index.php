<?php require_once('inc/top.php'); ?>
<body>
<?php require_once('inc/header.php'); ?>

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
				<?php 
					  $query = "SELECT * FROM posts where status = 'publish' order by id desc";
		              $run = mysqli_query($conn,$query);
		              if(mysqli_num_rows($run)>0){
		                while($row = mysqli_fetch_array($run)){
		                  
		                  $id = $row['id'];
		                  $date = getdate($row['date']);
		                  $day = $date['mday'];
		                  $month = $date['month'];
		                  $year = $date['year'];
		                  $title = $row['title'];
		                  $author = $row['author'];
		                  $author_image = $row['author_image'];
		                  $categories = $row['categories'];
		                  $tags = $row['tags'];
		                  $image = $row['image'];
		                  $post_data = $row['post_data'];
		                  $views = $row['views'];
		                  $status = $row['status'];
		       								 ?>      

		       	<div class="post">
					<div class="row">
						<div class="col-md-2 post-date">
							<div class="day"><?php echo $day; ?></div>
							<div class="month"><?php echo $month; ?></div>
							<div class="year"><?php echo $year; ?></div>
						</div>

						<div class="col-md-8 post-title">
							<a href="post.php?post_id=<?php echo($id); ?>"><h2><strong><?php echo $title; ?></strong></h2></a>
							<p>Written By: <span><?php echo $author; ?></span></p>
						</div>

						<div class="col-md-2 profile-picture ">
							<img src="img/<?php echo $author_image; ?>" class="img-circle">
						</div>
					</div>

					<a href="post.php?post_id=<?php echo($id); ?>"><img src="img/<?php echo $image; ?>" alt=""></a>

					<p class="desc">
						<?php echo substr($post_data, 0,420)."..."; ?>
					</p>

					<a href="post.php?post_id=<?php echo($id); ?>" class="btn btn-primary"> Read More </a>

					<div class="bottom">
						<span class="first"><i class="fa fa-folder"></i> <a href="">Category</a></span> |
					 	<span class="sec"><i class="fa fa-comment"></i> <a href="">Comment</a></span>
					</div>

				</div>

					<?php   }
		              }else{
		                echo "<center><h1>NO POST FOUND</h1></center>";
		              } ?>

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
		<?php require_once('inc/sidebar.php'); ?>
		</div>
	</div>
</section>

<?php require_once('inc/footer.php'); ?>
</body>
</html>