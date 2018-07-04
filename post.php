<?php require_once('inc/top.php'); ?>
<body>

<?php require_once('inc/header.php'); ?>

<?php
if(isset($_GET['post_id'])){
	$post_id = $_GET['post_id'];
	$query = "select * from posts where status = 'publish' and id='$post_id'";
	$run = mysqli_query($conn,$query);
	if(mysqli_num_rows($run)>0){
			$row = mysqli_fetch_array($run);
			$id = $row['id'];
			$date = getdate($row['date']);
			$day = $date['mday'];
			$month = $date['month'];
			$year = $date['year'];
			$title = $row['title'];
			$image = $row['image'];
			$author_image = $row['author_image'];
			$author = $row['author'];
			$categories = $row['categories'];
			$post_data = $row['post_data'];
			$tags = $row['tags'];
	}
	else {
	header('location: index.php');
	}
} ?>
<div class="jumbotron">
	<div class="container-fluid">
		<div  class="animated fadeInLeft" id="details">
			<h1>Custom <span>Post</span></h1>
			<p>Here you can put your tag line</p>
		</div>
	</div>
</div>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
          <div class="col-md-12">
<div class="post">
          <div class="row">
            <div class="col-md-2 post-date">
              <div class="day"><?php echo $day; ?></div>
              <div class="month"><?php echo $month; ?></div>
              <div class="year"><?php echo $year; ?></div>
            </div>
            <div class="col-md-8 post-title">
              <a href="post.php?post_id=<?php echo $id; ?>"><h2><strong>
<?php echo $title; ?></strong></h2></a>
              <p>Written By: <span><?php echo ucfirst($author); ?></span></p>
            </div>
            <div class="col-md-2 profile-picture ">
              <img src="img/<?php echo $author_image; ?>" class="img-circle">
            </div>
          </div>

          <a href="img/<?php echo $image; ?>"><img src="img/<?php echo $image; ?>" alt=""></a>
          <p class="desc">
            <?php echo $post_data; ?>
					</p>
           <div class="bottom">
            <span class="first"><i class="fa fa-folder"></i> <a href="">Category</a></span> |
            <span class="sec"><i class="fa fa-comment"></i> <a href="">Comment</a></span>
           </div>
        </div>
           <div class="related-post">
           <h2>Related Posts</h2><hr>
            <div class="row">
							<?php
							$r_query = "SELECT * from posts where status = 'publish' AND title LIKE '%$title%' LIMIT 3";
							$r_result = mysqli_query($conn,$r_query);
							while($row = mysqli_fetch_array($r_result)){
								$r_id = $row['id'];
								$r_title = $row['title'];
								$r_image = $row['image'];

							 ?>
           <div class="col-md-4"><a href="post.php?post_id=<?php echo $r_id; ?>"><img src="img/<?php echo $r_image; ?>" alt="post1"><h4><?php echo $r_title; ?></h4></a></div>
				 <?php } ?>
					</div>
        </div>

        <div class="author">
          <div class="row">
            <div class="col-md-3">
              <img src="img/<?php echo $author_image; ?>" class="img-circle">
            </div>
            <div class="col-md-9">
              <h2><?php echo $author; ?></h2>
              <p class="author-desc">I am Sarthak Prajapati. I live in one of the most beautiful cities of North India. I have been using and doing this computer stuff from around 5 years if memory serves correctly. I was born in Ghaziabad. I have spent my entire childhood in Bareilly. As I fall into December, it makes me Sagittarius, mostly calm.</p>
            </div>
          </div>
        </div>

<?php $c_query="SELECT * FROM comments where status = 'approve' and post_id=$post_id ORDER BY id DESC";
			$c_run = mysqli_query($conn,$c_query);
				?>

<div class="comment">
        <h3>Comments</h3>
				<?php
				while($c_row = mysqli_fetch_array($c_run)){
			  $c_id = $c_row['id'];
				$c_username = $c_row['username'];
				$c_author_image = $c_row['image'];
				$c_comment = $c_row['comment'];
			 ?>
				<hr>
          <div class="row single-comment">
            <div class="col-md-2">
              <img src="img/<?php echo $c_author_image; ?>" class="img-circle">
            </div>
            <div class="col-md-10">
              <h2><?php echo $c_username; ?></h2>
              <p class="author-desc"><?php echo $c_comment; ?></p>
            </div>
          </div>
				<?php } ?>
				</div>

				<?php
				if(isset($_POST['submit'])){
					$cs_name = $_POST['name'];
					$cs_email = $_POST['email'];
					$cs_website = $_POST['website'];
					$cs_comment = $_POST['comment'];
					$cs_date = time();
					if(empty($cs_name) or empty($cs_email) or empty($cs_comment)){
						$err_msg = "All (*) fields are required.";
					}
					else {
						$cs_query = "INSERT INTO `comments` (`id`, `date`, `name`, `username`, `post_id`, `email`, `website`, `image`, `comment`, `status`) VALUES (NULL, '$cs_date', '$cs_name', '$c_username', '$post_id', '$cs_email', '$cs_website', '$author_image', '$cs_comment', 'pending');";
						if(mysqli_query($conn,$cs_query)){
							$msg = "Comment submitted and waiting for approval";
						}
						else {
							$msg = "Comment has not been submitted";
						}
					}
				}
?>
        <div class="col-md-12 contact-form">

            <h2>Comment Box</h2>
            <hr>
            <form action="" method="post">
              <div class="form-group">
                <label for="name">Full Name*:</label>
                <input type="text" id="name" name="name" placeholder="Full Name" class="form-control">
              </div>

              <div class="form-group">
                <label for="email">Email*:</label>
                <input type="text" id="email" name="email" placeholder="Email" class="form-control">
              </div>

              <div class="form-group">
                <label for="website">Website:</label>
                <input type="text" id="website" name="website" placeholder="Website" class="form-control">
              </div>

              <div class="form-group">
                <label for="message">Comment*:</label>
                <textarea id="message" cols="30" rows="10" name="comment" class="form-control" placeholder="Your Comment Should Be Here!"></textarea>
              </div>
              <input type="submit" name="submit" value="Submit Comment" class="btn btn-primary">

					 <?php
							if(isset($msg)) {
								echo "<span style = 'color:darkgreen; font-weight:bold;' class='pull-right'>$msg</span>";
								}
							elseif(isset($err_msg)){
								echo "<span class='pull-right' style = 'color:red; font-weight:bold;'>$err_msg</span>";
							} ?>
												 </form>

          </div>

         </div>


			</div>
			<div class="col-md-4">
        <?php require_once('inc/sidebar.php'); ?>
			</div>
	</div>
</section>
<?php require_once("inc/footer.php"); ?>
</body>
</html>
