<?php require_once('inc/top.php'); ?>
<body>
<?php require_once('inc/header.php');
	if (isset($_GET['page'])) {
		$page_id = $_GET['page'];
	}
	else {
		$page_id = 1;
	}

	if(isset($_GET['cat'])){
		$cat_id = $_GET['cat'];
		$cat_query = "SELECT * FROM categories WHERE id = $cat_id";
		$cat_run = mysqli_query($conn,$cat_query);
		$cat_row = mysqli_fetch_array($cat_run);
		$cat_name = $cat_row['category'];
	}

	$number_of_posts = 3;
if(isset($_POST['search'])){
	$search = $_POST['search-title'];
	$all_post_query = "SELECT * FROM posts WHERE status = 'publish'";
	$all_post_query .="and tags LIKE '%$search%'";
	$all_post_run = mysqli_query($conn, $all_post_query);
	$all_posts = mysqli_num_rows($all_post_run);
	$total_pages = ceil($all_posts / $number_of_posts);
	$post_start_from = ($page_id - 1)*$number_of_posts;

}

else {
	$all_post_query = "SELECT * FROM posts WHERE status = 'publish'";
	if(isset($cat_name)){
		$all_post_query .= " and categories = '$cat_name'";
	}
	$all_post_run = mysqli_query($conn, $all_post_query);
	$all_posts = mysqli_num_rows($all_post_run);
	$total_pages = ceil($all_posts / $number_of_posts);
	$post_start_from = ($page_id - 1)*$number_of_posts;

}

?>
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
				<?php if(isset($_POST['search-title'])){
					$search = $_POST['search-title'];
					$query = "SELECT * FROM posts where status = 'publish'";
					$query .=" and tags LIKE '%$search%'";
					$query .= " ORDER BY id DESC LIMIT $post_start_from, $number_of_posts";
			}

					else{ $query = "SELECT * FROM posts where status = 'publish'";
				 if(isset($cat_name)){
					 $query .=" and categories = '$cat_name'";
				 }
					 $query .= " ORDER BY id DESC LIMIT $post_start_from, $number_of_posts";
							 }
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
  				<?php
  				for($i=1; $i<=$total_pages;$i++){
  					echo "<li class='".($page_id == $i ? 'active':' ')."'><a href='index.php?page=".$i."&".(isset($cat_name)?"cat=$cat_id":"")."'>$i</a></li>";
  				} ?>
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
