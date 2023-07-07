<!DOCTYPE html>
<?php 
session_start();
require_once("config.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <title>Document</title>
    <style>
    .design{
        font-size: 36px;
	line-height: 40px;
	margin: 1em 0 .6em 0;
	font-weight: normal;
	color: white;
	font-family: 'Hammersmith One', sans-serif;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.4);
	position: relative;
	color: #016334;
    }
</style>
</head>
<body>
<?php 

if (!isset($_SESSION['login_sess'])) {
	header("Location: AdminLogin.php");
}

if(isset($_POST['Create_Post'])){
  $title = $_POST['title'];
	$desc = $_POST['desc'];
	$img = $_POST['img'];
	$CreateQuery = "INSERT INTO group_posts (title, description, image_url)
    VALUES ('$title','$desc', '$img')";
	mysqli_query($dbc, $CreateQuery);
	header("Location: AdminPanel.php");
}
?>


    <div class="container col-sm-4 mt-5">
    <h1 class="design text-center">Create Post</h1>
<form method="post" action="CreateGroupPost.php">
  <!-- Name input -->
 
  <div class="form-group mb-4">
  <label class="form-label" for="form4Example1">Title</label>
  <input type="text" id="form4Example1" class="form-control border border-dark" name="title" required="" />

  </div>


  <!-- Message input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example3">Description</label>
  <textarea class="form-control border border-dark" id="form4Example3" rows="4" name="desc" placeholder="Details" required=""></textarea>
 
  </div>

  <div class="form-group mb-4">
  <label class="form-label" for="form4Example1">Thumbnail Url</label>
  <input type="text" id="form4Example1" class="form-control border border-dark" name="img" placeholder="Image Url" required=""/>

  </div>



  <!-- Submit button -->
  <button type="submit" name="Create_Post" class="btn btn-primary btn-block mb-4">
 Create
  </button>
</form>
</div>
</body>
</html>