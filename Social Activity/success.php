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
echo "<div class=successmsg><span style=font-size:100px;>&#9989;</span> <br> You have registered successfully . <br> </div>";
?>

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