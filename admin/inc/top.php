<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <!-- 1 --><link rel="stylesheet" type="text/css" href="../css/animate.css">
  <!-- 2 --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Latest compiled and minified CSS -->
  <!-- 3 --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- 4 --><link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Open+Sans|Raleway|Roboto" rel="stylesheet">
  <!-- 5 --><link rel="stylesheet" type="text/css" href="css/style_admin.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/code.js"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=9od8z3f2goxpplbb6jch5yueh4v15w7b661qes4hpt449ur2"></script>
  <script>
  tinymce.init({
selector: 'textarea#textarea',
height: 300,
theme: 'modern',
plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
image_advtab: true,
  toolbar: "image",
  image_list: [
    <?php
     $media_get_query = "SELECT * FROM media";
     $media_get_query_run = mysqli_query($conn,$media_get_query);
     if(mysqli_num_rows($media_get_query_run)>0){

      ?>
      <?php    while($image = mysqli_fetch_array($media_get_query_run)){
           $img = $image['image'];
            ?>
        {title: '<?php echo $img; ?>', value: '<?php echo "media/$img"; ?>'},

<?php } echo"]";} ?>

,
content_css: [
  '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
  '//www.tinymce.com/css/codepen.min.css'
],
});
  </script>
  </head>
