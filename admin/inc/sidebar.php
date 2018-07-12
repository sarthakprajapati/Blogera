<?php $top_role = ucfirst($_SESSION['role']);
?>
<?php $query_comment = "SELECT * FROM comments where status = 'pending'";
$query_comment_run = mysqli_query($conn,$query_comment);
$count_comment = mysqli_num_rows($query_comment_run);
$currentPage = basename($_SERVER['PHP_SELF']);  ?>
<div class="list-group">
    <a href="index.php" class="list-group-item  <?php if($currentPage =='index.php'){echo 'active';}?>">
        <span class="fa fa-tachometer-alt"></span> Dashboard
    </a>
    <a href="posts.php" class="list-group-item <?php if($currentPage =='posts.php' or $currentPage =='add-post.php'){echo 'active';}?>">
        <span class="fa fa-file-alt"></span> All Post
    </a>
    <a href="media.php" class="list-group-item <?php if($currentPage =='media.php'){echo 'active';}?>">
        <span class="fa fa-database"></span> Media
    </a>
    <?php if($top_role == 'Admin'){ ?>
    <a href="categories.php" class="list-group-item <?php if($currentPage =='categories.php'){echo 'active';}?>">
        <span class="fa fa-folder"></span> Categories
    </a>
    <a href="comments.php" class="list-group-item <?php if($currentPage =='comments.php'){echo 'active';}?>">
        <span class="fa fa-comment"></span> Comments <span class="badge"><?php echo $count_comment; ?></span>
    </a>
    <a href="users.php" class="list-group-item <?php if($currentPage =='users.php' or $currentPage =='add-user.php'){echo 'active';}?>">
        <span class="fa fa-users"></span> Users
    </a>
  <?php } ?>
</div>
