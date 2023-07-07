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

$id1=$_POST['hidden'];
$member = "SELECT * FROM registerations WHERE id='$id1'";
$member_result = $dbc->query($member);
$row = $member_result->fetch_assoc();

if(isset($_POST['EditMember'])){
$id=$_POST['id'];
    $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $UpdateQuery = "UPDATE  registerations SET fname='$fname',lname='$lname',email='$email',phone='$phone' WHERE id = '$id' ";
	mysqli_query($dbc, $UpdateQuery);
    header("location:AdminPanel.php");
}

?>


    <div class="container col-sm-4 mt-5">
    <h1 class="design text-center">Edit Details</h1>
<?php
echo "<form method=post action=EditMember.php>";


echo "<div class=form-group mb-4>
  <label class=form-label for=form4Example1>ID</label>
  <input type=text id=form4Example1 class=form-control border border-dark name=id required='' value=" . $row['id'] . "/>

  </div>";


echo "<div class=form-group mb-4>
  <label class=form-label for=form4Example1>First Name</label>
  <input type=text id=form4Example1 class=form-control border border-dark name=fname required='' value=" . $row['fname'] . "/>

  </div>";

  echo "<div class=form-group mb-4>
  <label class=form-label for=form4Example1>Last Name</label>
  <input type=text id=form4Example1 class=form-control border border-dark name=lname required='' value=" . $row['lname'] . "/>

  </div>";

  echo "<div class=form-group mb-4>
  <label class=form-label for=form4Example1>Email</label>
  <input type=text id=form4Example1 class=form-control border border-dark name=email required='' value=" . $row['email'] . "/>

  </div>";

  echo "<div class=form-group mb-4>
  <label class=form-label for=form4Example1>Phone</label>
  <input type=text id=form4Example1 class=form-control border border-dark name=phone required='' value=" . $row['phone'] . "/>

  </div>";
 
 
 echo "<button type=submit style='width: 112px; background-color:#016334; color:white'  name=EditMember class=btn btn-primary btn-block mb-4>
 Update
  </button> ";
  
echo "</form>"
?>
</div>
</body>
</html>