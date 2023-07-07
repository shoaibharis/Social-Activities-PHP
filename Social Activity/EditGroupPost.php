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
    <title>EditPosts</title>
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

$id1=$_POST['hidden'];
$post = "SELECT * FROM group_posts WHERE id='$id1'";
$post_result = $dbc->query($post);
$row = $post_result->fetch_assoc();

if(isset($_POST['EditPost'])){
$id=$_POST['id'];
    $title=$_POST['title'];
  $desc=$_POST['desc'];
  $image=$_POST['img'];
  $UpdateQuery = "UPDATE  group_posts SET title='$title',description='$desc',image_url='$image' WHERE id = '$id' ";
	mysqli_query($dbc, $UpdateQuery);
    header("location:AdminPanel.php");
}

?>


    <div class="container col-sm-4 mt-5">
    <h1 class="design text-center">Edit Details</h1>
<?php
echo "<form method=post action=EditGroupPost.php>";


echo "<div class=form-group mb-4>
  <label class=form-label for=form4Example1>ID</label>
  <input type=text id=form4Example1 class=form-control border border-dark name=id required='' value=" . $row['id'] . "/>

  </div>";


echo "<div class=form-group mb-4>
  <label class=form-label for=form4Example1>Title</label>
  <input type=text id=form4Example1 class=form-control border border-dark name=title required='' value=" . $row['title'] . "/>

  </div>";

echo "<div class=form-outline mb-4>
  <label class=form-label for=form4Example3>Description</label>
  <textarea class=form-control border border-dark id=form4Example3 rows=4 name=desc placeholder=Details required=''/>" . $row['description'] . "</textarea>
 
  </div>";

echo "<div class=form-group mb-4>
  <label class=form-label for=form4Example1>Thumbnail Url</label>
  <input type=text id=form4Example1 class=form-control border border-dark name=img placeholder=Image Url required='' value=" . $row['image_url']. "/>

  </div>";
 
 echo "<button type=submit style='width: 112px; background-color:#016334; color:white'  name=EditPost class=btn btn-primary btn-block mb-4>
 Update
  </button> ";
  
echo "</form>"
?>
</div>
</body>
</html>