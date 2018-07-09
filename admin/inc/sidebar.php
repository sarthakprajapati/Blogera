<?php $top_role = ucfirst($_SESSION['role']);
?>
<?php $query_comment = "SELECT * FROM comments where status = 'pending'";
$query_comment_run = mysqli_query($conn,$query_comment);
$count_comment = mysqli_num_rows($query_comment_run); ?>
<div class="list-group">
    <a href="index.php" class="list-group-item active">
        <span class="fa fa-tachometer-alt"></span> Dashboard
    </a>
    <a href="posts.php" class="list-group-item">
        <span class="fa fa-file-alt"></span> All Post <span class="badge">145</span>
    </a>
    <a href="media.php" class="list-group-item">
        <span class="fa fa-database"></span> Media <span class="badge">35</span>
    </a>
    <?php if($top_role == 'Admin'){ ?>
    <a href="categories.php" class="list-group-item">
        <span class="fa fa-folder"></span> Categories <span class="badge">50</span>
    </a>
    <a href="comments.php" class="list-group-item">
        <span class="fa fa-comment"></span> Comments <span class="badge"><?php echo $count_comment; ?></span>
    </a>
    <a href="users.php" class="list-group-item">
        <span class="fa fa-users"></span> Users <span class="badge">8</span>
    </a>
  <?php } ?>
</div>
