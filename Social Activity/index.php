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
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/images/carousel4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>Are You a Sports Enthusiast?</h3>
            <p class="text-dark"><b>Bring out your toughness, Be an athlete</b></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/images/slider2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="">Special Community for Special Guys</h3>
            <p class="text-dark"><b>Join Hustle Club to Show Your Inner Potential</b></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/images/carousel5.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="">Train and Network</h3>
            <p class="text-dark"><b>Make Connections with Like-Minded People Who Help You Grow</b></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="container-fluid d-flex">
      <div class="row d-flex">
        <div class="col-xl-2  mini m-0 p-0"> <img src="./assets/images/mini8.jpg" alt="" width="300px" height="200px"><<i class="fa-solid fa-table-tennis-paddle-ball"></i><h4 class="mini-title">Table Tennis</h4></div>
        <div class="col-xl-2  mini"><img src="./assets/images/mini2.jpg" alt="" width="300px" height="200px">
          <i class="fa-solid fa-basketball"></i><h4 class="mini-title">Basketball</h4></div>
        <div class="col-xl-2  mini"><img src="./assets/images/mini3.jpg" alt="" width="300px" height="200px">
          <i class="fa-solid fa-futbol"></i><h4 class="mini-title">Football</h4></div>
        <div class="col-xl-2  mini"><i class="bi bi-bicycle"></i> <img src="./assets/images/mini4.jpg" alt="" width="300px" height="200px">
          <i class="fa-solid fa-person-walking"></i><h4 class="mini-title">Jogging</h4></div>
        <div class="col-xl-2  mini"><img src="./assets/images/mini5.jpg" alt="" width="300px" height="200px"> <i class="fa-solid fa-dumbbell"></i><h4 class="mini-title">Weightlifting</h4></div>
        <div class="col-xl-2  mini"><img src="./assets/images/mini9.jpg" alt="" width="300px" height="200px">
          <i class="fa-solid fa-volleyball"></i></i><h4 class="mini-title">Volleyball</h4></div>
      </div>
    </div>
    <!-- <div class="container-fluid">
      <div class="row ">
        <section class="col-xl-12">
          <center><h1 class="mt-3 sub-title"><b>SUBSCRIPTION PRICES </b></h1></center>
          <center><h5 class="mt-1 sub-desc">Exclusive Training Packages</h6></center>
            <div class="card-container d-flex">
            <div class="col-xl-4 mt-4">
              <div class="card " style="width: 18rem;">
                <img src="./assets/images/card1.jpg" width="300" height="250" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4>Personal Trainer</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="d-flex justify-space-between row card-options">
                    <span class="col-xl-4">$105</span>
                    <span class="col-xl-4">35 Hours</span>
                    <span class="col-xl-4 icon-span"><i class="fa-solid fa-arrow-right"></i></span>
                  </div>
                </div>
              
            </div>
            </div>
            <div class="col-xl-4 mt-4 ">
              <div class="card" style="width: 18rem;">
                <img src="./assets/images/card2.jpg" width="300" height="250" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4>Boxing Coach</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="d-flex justify-space-between row card-options">
                    <span class="col-xl-4">$200</span>
                    <span class="col-xl-4">40 Hours</span>
                    <span class="col-xl-4 icon-span"><i class="fa-solid fa-arrow-right"></i></span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-xl-4 mt-4 ">
              <div class="card" style="width: 18rem;">
                <img src="./assets/images/card3.jpg" width="300" height="250" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5>Body Building Course</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="d-flex justify-space-between row card-options">
                    <span class="col-xl-4">$300</span>
                    <span class="col-xl-4">50 Hours</span>
                    <span class="col-xl-4 icon-span"><i class="fa-solid fa-arrow-right"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div> -->
    <!-- video -->
     <!-- <section class="mt-5 mb-5 video-container "> 
    <video src="./assets/videos/featured1.mp4" loop muted autoplay width="100%" height="75%" ></video>
    <button class="video-button">Join Us </button>
    <h3 class="video-title">Do Sports and Enjoy a Healthy Life</h3>
  </section> -->
    
      
      <!-- Gallery -->
      
          <h1 class="gallery-title text-center mt-5">
            LATEST GALLERY
          </h1>
          <h6 class="text-center">WITNESS OUR GOALS</h6>
          <div class="container-fluid">
            <div class="row d-flex gallery-container mt-3">
              <div class="col-xl-3  mt-3">
                <img src="./assets/images/gallery1 (1).jpg" width="300px" height="300px" alt="">
              </div>
              <div class="col-xl-3 mt-3">
                <img src="./assets/images/gallery1 (2).jpg" width="300px" height="300px" alt="">
              </div>
              <div class="col-xl-3 mt-3">
                <img src="./assets/images/gallery1 (3).jpg" width="300px" height="300px" alt="">
              </div>
              <div class="col-xl-3 mt-3">
                <img src="./assets/images/gallery1 (4).jpg" width="300px" height="300px" alt="">
              </div>
              <div class="col-xl-3 mt-3">
                <img src="./assets/images/gallery1 (5).jpg" width="300px" height="300px" alt="">
              </div>
              <div class="col-xl-3 mt-3">
                <img src="./assets/images/gallery1 (6).jpg" width="300px" height="300px" alt="">
              </div>
              <div class="col-xl-3 mt-3">
                <img src="./assets/images/gallery1 (7).jpg" width="300px" height="300px" alt="">
              </div>
              <div class="col-xl-3 mt-3">
                <img src="./assets/images/gallery1 (8).jpg" width="300px" height="300px" alt="">
              </div>
              <div class="col-xl-3 mt-3">
                <img src="./assets/images/gallery1 (9).jpg" width="300px" height="300px" alt="">
              </div>
              <div class="col-xl-3 mt-3">
                <img src="./assets/images/gallery1 (10).jpg" width="300px" height="300px" alt="">
              </div>
              <div class="col-xl-3 mt-3">
                <img src="./assets/images/gallery1 (11).jpg" width="300px" height="300px" alt="">
              </div>
              <div class="col-xl-3 mt-3">
                <img src="./assets/images/gallery1 (12).jpg" width="300px" height="300px" alt="">
              </div>
        </div>
      </div>
      <!-- Accordion -->
      

     <!-- --ABOUT US-- -->
     <div class="container-fluid mt-4">
      <div class="row">
        <div class="about-us-container col-xl-12">
          <h2 class="about-us-title text-center mt-4">ABOUT US</h2>
          <h6 class="about-us-title text-center mt-2">Who Are We?</h6>
          <div class="about-us-desc ">
            <p class="mt-3">We are a university based sports club that encourages students to take part in sports and co curricural activities. We are playing a part of health activists who want to promote sports in our university as well as encourage people to adopt a healthier lifestyle</p>
            <button>READ MORE</button>
          </div>
        </div>
      </div>
     </div>
      <!-- <section class="mt-5">
        <div class="container-fluid mt-5">
          <div class="row faq-cards">
            <span class="faq-card col-xl-12">
              <h1 class="accordion-title text-center mt-3">About Us</h1>
      <h6 class="text-center mt-1">Who Are We?</h6>
              <h5 class="text-center mt-5">What is the age limit to join the club?</h5>
              
              <div>
                <button class="faq-card-button mt-3">Join Now</button>
              </div>
            </span>
           
          </div>
        </div>
      </section> -->
     
        <div class="container-fluid mt-5">
          <div class="row">
            <div class="section1 col-xl-4 ">
              <h4 class="ms-5 mt-5 ">About Us</h4>
              <p class="ms-5 mt-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod omnis obcaecati, repellendus, assumenda molestias quia,Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, eum? </p>
              <div class="ms-5"><i class="fa-regular fa-envelope"></i> <span class="ms-1">info@hustleclub.com</span></div>
              <div class="ms-5"><i class="fa-solid fa-phone"></i> <span class="ms-1">+90 2537618</span></div>
              <div class="ms-5"><i class="fa-solid fa-location-pin"></i><span class="ms-1">somewhere on earth</span></div>
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
