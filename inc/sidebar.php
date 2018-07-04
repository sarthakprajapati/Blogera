<div class="widgets">
<form class="" action="index.php" method="post">
<div class="input-group">
      				<input type="text" name="search-title" class="form-control" placeholder="Search for...">
      				<span class="input-group-btn">
        			<input type="submit" value="GO" class="btn btn-default" placeholder="Search for.." >
      				</span>
   				 </div><!-- /input-group -->
             </form>
   				 <div class="widgets">
   				 	<div class="popular">
   				 		<h4>POPULAR POSTS</h4>
   				 		<hr>
                     <?php
                 $query = "SELECT * FROM posts where status = 'publish' order by views desc LIMIT 5";
                    $srun = mysqli_query($conn,$query);
                    if(mysqli_num_rows($srun)>0){
                      while($row = mysqli_fetch_array($srun)){
                        $id = $row['id'];
                        $image = $row['image'];
                        $date = $row['date'];
                        $title = $row['title'];
                        $date = getdate($row['date']);
                        $day = $date['mday'];
                        $month = $date['month'];
                        $year = $date['year'];
                        ?>
   				 		<div class="row">
   				 		<div class="col-md-4">
   				 			<img src="img/<?php echo $image; ?>">
   				 		</div>
   				 		<div class="col-md-8 details">
   				 			<h5><a href="post.php?post_id=<?php echo $id; ?>"><?php echo $title; ?></a></h5>
   				 			<p><i class="fa fa-clock-o"></i>  <?php echo "$day $month $year"; ?> </p>
   				 		</div>
   				 	</div>
   				 	<hr>


               <?php   }
                    }else{
                      echo "<center><h1>NO POST FOUND</h1></center>";
                    } ?>

                 </div>
              </div>

   				 <div class="widgets">
   				 	<div class="popular">
   				 		<h4>RECENT POSTS</h4>
   				 		<hr>
                     <?php
                 $query = "SELECT * FROM posts where status = 'publish' order by id desc LIMIT 5";
                    $srun = mysqli_query($conn,$query);
                    if(mysqli_num_rows($srun)>0){
                      while($row = mysqli_fetch_array($srun)){
                        $id_p = $row['id'];
                        $image_p = $row['image'];
                        $date_p = $row['date'];
                        $title_p = $row['title'];
                        $date_p = getdate($row['date']);
                        $day_p = $date['mday'];
                        $month_p = $date['month'];
                        $year_p = $date['year'];
                        ?>
   				 		<div class="row">
   				 		<div class="col-md-4">
   				 			<img src="img/<?php echo $image_p; ?>">
   				 		</div>
   				 		<div class="col-md-8 details">
   				 			<h5><a href="post.php?post_id=<?php echo $id_p; ?>"><?php echo $title_p; ?></a></h5>
   				 			<p><i class="fa fa-clock-o"></i><?php echo "$day_p $month_p $year_p"; ?></p>
   				 		</div>
   				 	</div>
   				 	<hr>

               <?php   }
                    }else{
                      echo "<center><h1>NO POST FOUND</h1></center>";
                    } ?>
   				 	</div>
   				 </div>

   				 <div class="widgets">
   				 	<div class="popular">
   				 		<h4>CATEGORIES</h4>
   				 		<hr>
   				 		<div class="row">
   				 			<div class="col-md-6">
   				 			<ul>
                           <?php
                              $c_query = "SELECT * FROM categories";
                              $c_run = mysqli_query($conn,$c_query);
                              if(mysqli_num_rows($c_run)>0){
                                 $count = 2;
                                 while ($c_row = mysqli_fetch_array($c_run)) {
                                    $c_id = $c_row['id'];
                                    $c_category = $c_row['category'];
                                    $count = $count +1;

                                    if(($count % 2) == 0){
                                       echo "<li><a href='index.php?cat=$c_id'>$c_category</a></li>";
                           ?>
   				 			</ul>
   				 	</div>
   				 	<div class="col-md-6">
   				 			<ul>
                           <?php  } else echo "<li><a href='index.php?cat=$c_id'>$c_category</a></li>"; } }
                           else echo "<center><h1>NO CATEGORY</h1></center>";?>
   				 			</ul>
   				 	</div>
   				 	</div>
   				 </div>
			</div>
