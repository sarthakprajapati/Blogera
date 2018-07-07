<?php
ob_start();
session_start();
header("location: sign.php");
session_destroy();
 ?>
