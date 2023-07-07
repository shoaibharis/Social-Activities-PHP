<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hustle - Sports Club</title>
   <link rel="stylesheet" href="styles/styles.css">
   <script src="https://kit.fontawesome.com/fbe7b84f5f.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light d-flex justify-content-between">
      <div class="container-fluid">
        
        <a class="navbar-brand " href="#"><span>HU<span class="s">S</span>TLE</span></a>
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
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown link
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li> -->
              </ul>
            </li>
          </ul>
       
      </div>
    </div>
    </nav>
   

    <?php
    require_once("config.php");
    if(isset($_POST['IP'])){
    $id=$_POST['hidden'];
    $select_post = "SELECT * FROM individual_posts WHERE id='$id'";
    $result = $dbc->query($select_post);}

    if(isset($_POST['GP'])){
        $id=$_POST['hidden'];
        $select_post = "SELECT * FROM group_posts WHERE id='$id'";
        $result = $dbc->query($select_post);
    }

    if(isset($_POST['joinACT'])){
      $title=$_POST['title'];
      $type=$_POST['category'];
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
           header("location:success.php");
         
            }
            else{
              header("location:membership.php");
            }
  
  }
  else {
    header("location:membership.php");
  }
  }
  else {
    header("location:membership.php");
  }
  }
    ?>

<div class="container" style="margin-bottom:20px; margin-top:20px;" ><h1><?php echo $_POST['category']?> </h1><hr style="width:100%"></div>
    <div class="container" style="margin-top:12px; margin-bottom: 20px;">
    <?php if($select_post) {
	while ($row =$result->fetch_assoc()) {;
    echo "<h1 class=mt-3 style=font-size:40px; font-weight:bold;>" . $row['title']. "</h1>";
    echo  "<img src=" . $row["image_url"] . " style='width: 60%; margin-top:20px; margin-bottom:20px; height: 20%;border-bottom-right-radius: 5px; object-fit: cover;' class='card-img-top'/>";
    echo   "<h3>Details</h3>";    
    echo "<p style=font-size:25px; margin-top:10px; margin-bottom:10px>" . $row['description'] . "</p>"; 
    echo "<div style=margin-top:50px; class=container border col-sm-4 mt-5>";
    echo "<h1 class=design text-center>Join Activity</h1>";
    echo "<form method=post action=Post.php>";
  
 
 echo " <div class=form-group mb-4>
  <label class=form-label for=form4Example1>Enter Your Email</label>
  <input type=text id=form4Example1 name=email class=form-control border border-dark required= /> </div> ";
  $row['title'] = preg_replace('/\s+/', '', $row['title']);
  echo "<div class=form-group mb-4>
  <label class=form-label for=form4Example1>Activity Title</label>
  <input type=text id=form4Example1 class=form-control name=title  border border-darkrequired='' value=" . $row['title'] . "/>

  </div>";
  
  $_POST['category'] = preg_replace('/\s+/', '_', $_POST['category']);
  echo "<div class=form-group mb-4>
  <label class=form-label for=form4Example1>Activity Type</label>
  <input type=text id=form4Example1  name=category class=form-control border border-dark  required='' value=" . $_POST['category'] . " />

  </div>";


  echo  "<button style='width: 125px; background-color:#016334; color:white'  type='submit' name='joinACT' class='btn mt-1 ml-0 btn-read' ><b>Join Activity</b></button>  For Members only. <br>";
  
  echo "</form>"; 
  echo "</div>";
   
    //echo "</form>";
  }}
?>
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