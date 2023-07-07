<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html lang="en">
    
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Hustle - Sports Club</title>
       <link rel="stylesheet" href="styles/membership.css">
       <script src="https://kit.fontawesome.com/fbe7b84f5f.js" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
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
    <link
          rel="shortcut icon"
          href="./assets/images/icons8-javelin-throw-ios-16-glyph-32.png"
          type="image/x-icon"
        />
        <link rel="stylesheet" href="css/swiper-bundle.min.css" />
        <link
        href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
        rel="stylesheet"
      />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
      </head>
<body>
    <nav class="navbar navbar-expand-lg bg-light d-flex justify-content-between">
        <div class="container-fluid">
          
          <a class="navbar-brand " href="index.php"><span>HU<span class="s">S</span>TLE</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="IndividualActivities.php">Individual Activities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="GroupActivities.php">Group Activities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AllActivities.php">All Activities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="membership.php">Become a Member</a>
              </li>
              
                </ul>
              </li>
            </ul>
         
        </div>
      </div>
      </nav>
      <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 border title-div">
                    
                    <img src="./assets/images/membership1.jpg" width="100%"
                height="500px" alt="">
                <h1 class="text-center mt-5">BECOME ONE OF US</h1>
                </div>
            </div>
        </div>
      </section>
         
      <div class="container">
  <div class="row">
    <div class="col-sm-4">
    </div>
     <div class="col-sm-4">
      <h1 class="design">Register Now!</h1>
    </div>
     <div class="col-sm-4">
    </div>
  </div>
	<div class="row">
<?php 
 if(isset($_POST['signup'])){
  extract($_POST);
  if(strlen($fname)<3){ // Minimum 
      $error[] = 'Please enter First Name using 3 charaters atleast.';
        }
if(strlen($fname)>20){  // Max 
      $error[] = 'First Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname)){
            $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
        }    
if(strlen($lname)<3){ // Minimum 
      $error[] = 'Please enter Last Name using 3 charaters atleast.';
        }
        
if(strlen($lname)>20){  // Max 
      $error[] = 'Last Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $lname)){
            $error[] = 'Invalid Entry Last Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
              }    
   
if(strlen($email)>50){  // Max 
            $error[] = 'Email: Max length 50 Characters Not allowed';
        }
        if(strlen($phone)<3){ // Minimum 
            $error[] = 'Please enter phone number using 3 charaters atleast.';
              }
         if(!isset($error)){ 

            
            $result = mysqli_query($dbc,"INSERT into registerations(fname,lname,email,phone) values('$fname','$lname','$email','$phone')");

           if($result)
    {
     $done=2; 
    }
    else{
      $error[] ='Failed : Something went wrong';
    }
 }
 } ?>

		 <div class="col-sm-4">
     
 <?php 
  if(isset($error)){ 
foreach($error as $error){ 
  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
}
}
?>
		</div>
		<div class="col-sm-4">
      <?php if(isset($done)) 
      { ?>
    <div class="successmsg"><span style="font-size:100px;">&#9989;</span> <br> You have registered successfully . <br> </div>
      <?php } else { ?>
       <div class="signup_form">
		<form action="" method="POST">
  <div class="form-group">
  	
        <label class="label_txt">First Name</label>
    <input type="text" class="form-control" name="fname" value="<?php if(isset($error)){ echo $_POST['fname'];}?>" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Last Name </label>
    <input type="text" class="form-control" name="lname" value="<?php if(isset($error)){ echo $_POST['lname'];}?>" required="">
  </div>
 
<div class="form-group">
    <label class="label_txt">Email </label>
    <input type="email" class="form-control" name="email" value="<?php if(isset($error)){ echo $_POST['email'];}?>" required="">
  </div>

  <div class="form-group">
    <label class="label_txt">Phone </label>
    <input type="text" class="form-control" name="phone" value="<?php if(isset($error)){ echo $_POST['phone'];}?>" required="">
  </div>

  <button type="submit" style="background-color:#016334;" name="signup" class="btn mt-2 btn-primary btn-group-lg form_btn">Register</button>
</form>
<?php } ?> 
</div>
		</div>
		<div class="col-sm-4">
		</div>

	</div>
</div> 


      <div class="container-fluid mt-5">
        <div class="row">
          <div class="section1 col-xl-4 ">
            <h4 class="ms-5 mt-5 ">About Us</h4>
            <p class="ms-5 mt-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod omnis obcaecati, repellendus, assumenda molestias quia,Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, eum? </p>
            <div class="ms-5"><i class="fa-regular fa-envelope"></i> <span class="ms-1">info@hustleclub.com</span></div>
            <div class="ms-5"><i class="fa-solid fa-phone"></i> <span class="ms-1">+90 2537618</span></div>
            <div class="ms-5"><i class="fa-thin fa-location-arrow"></i><span class="ms-1">somewhere on earth</span></div>
          </div>
          <div class="section2 col-xl-4 ">
            <h4 class="ms-5 mt-5 ">Quick Links</h4>
            <ul class="mt-3">
              <li class="ms-3 mt-1"><i class="fa-solid fa-greater-than  me-1  "></i><a href="#">HOME </a></li>
              <li class="ms-3 mt-1"><i class="fa-solid fa-greater-than me-1"></i><a href="#">ALL ACTIVITIES</a></li>
              <li class="ms-3 mt-1"><i class="fa-solid fa-greater-than me-1"></i><a href="#">INDIVIDUAL ACTIVITIES</a></li>
              <li class="ms-3 mt-1"><i class="fa-solid fa-greater-than me-1"></i><a href="#">GROUP ACTIVITIES</a></li>
              <li class="ms-3 mt-1"><i class="fa-solid fa-greater-than me-1"></i><a href="#">BECOME A MEMBER</a></li>
            </ul>
          </div>
          <div class="section3 col-xl-4 ">
            <h1 class="text-center mt-5">HU<span>S</span>TLE</h1>
            <h4 class="text-center">Follow us on social media</h4>
            <div class="social">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-pinterest"></i>
              <i class="fa-brands fa-reddit"></i>
              <i class="fa-brands fa-whatsapp"></i>
            </div>
          </div>
        </div>
      </div>
    
  <script src="./scripts/script.js"></script>
<!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"
  ></script>
</body>
</html>