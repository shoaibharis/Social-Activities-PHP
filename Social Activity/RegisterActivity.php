<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'config.php' ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
$title=$_POST['activityTitle'];
$type=$_POST['activityType'];
echo $type;
echo $hello;
if(isset($_POST['joinACT'])){
    $email=$_POST['email'];
    $check="SELECT * FROM registerations WHERE email='$email'";
    $res = mysqli_query($dbc,$check);
$numRows = mysqli_num_rows($res);
if($numRows  == 1){
        $row = mysqli_fetch_assoc($res);
        if($email==$row['email']){
            $fname=$row['fname'];
            $lname=$row['lname'];
          $register=mysqli_query($dbc,"INSERT INTO activity_registerations(activityTitle,activityType,fname,lname,email)values('$title','$type','$fname','$lname','$email')");
          if($register){
            echo "<div class=successmsg><span style=font-size:100px;>&#9989;</span> <br> You have registered successfully . <br> </div>";

          }
          else{
            $error[] ='Failed : Something went wrong';
          }

}
else {
    echo "<script>alert('You are not a member, please register first')</script>";
}
}
}
?>

<?php 
  if(isset($error)){ 
foreach($error as $error){ 
  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
}
}
?>


<div class="container col-sm-4 mt-5">
<h1 class="design text-center">Join Activity</h1>
<?php
echo "<form method=post action=RegisterActivity.php>";
  
 
 echo " <div class=form-group mb-4>
  <label class=form-label for=form4Example1>Enter Your Email</label>
  <input type=text id=form4Example1 name=email class=form-control border border-dark name=title required= /> </div> ";

  echo "<div class=form-group mb-4>
  <label class=form-label for=form4Example1>Activity Title</label>
  <input type=text id=form4Example1 class=form-control  border border-dark name=title required='' value=" . $_POST['activityTitle'] . "/>

  </div>";

  echo "<div class=form-group mb-4>
  <label class=form-label for=form4Example1>Activity Type</label>
  <input type=text id=form4Example1  class=form-control border border-dark name=title required='' value=" . $_POST['activityType'] . " />

  </div>";


  echo  "<button style='width: 125px; background-color:#016334; color:white'  type='submit' name='joinACT' class='btn mt-1 ml-0 btn-read' ><b>Join Activity</b></button>  For Members only. <br>";
  
  echo "</form>";
    ?>
    </div>
</body>
</html>