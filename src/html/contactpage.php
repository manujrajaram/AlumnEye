<?php

require('../PHP/connectFordB.php');
if(!isset($_SESSION['username'])){
  header('Location: http://localhost/INTP_project/Alumneye/src/html/index.html'); 
} 

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/78a1f04c92.js" crossorigin="anonymous"></script>
    <!--AOS CSS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--Material Design Boostrap-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <a class="navbar-brand" href="./homePage.html" style="font-size: xx-large;">AlumnEye</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="./homePage.html"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./about.html"><i class="fas fa-info-circle"></i> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact.html"><i class="fas fa-address-book"></i> Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user-friends"></i> My Network</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-circle"></i> Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="./profile.html">View Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="./index.html">Sign Out</a>
                </div>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
    </nav>
    <div class="container">
      <!-- Section: Contact v.1 -->
      <section class="my-5">

        <!-- Section heading -->
        <h2 class="display-4 font-weight-bold text-center my-5">Contact us</h2>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto pb-5">Please feel free to contact us for any queries</p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-5 mb-lg-0 mb-4">

            <!-- Form with header -->
            <div class="card">
              <div class="card-body">
                <!-- Header -->
                <div class="form-header">
                  <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
                </div>
                <!-- Body -->
                <form id="contact-form" name="contact-form" action="../PHP/contact.php" method="POST">
                  <div class="md-form">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                    <span id="name_validate"></span>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <span id="email_validate"></span>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-tag prefix grey-text"></i>
                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                    <span id="subject_validate"></span>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-pencil-alt prefix grey-text"></i>
                    <textarea id="message" name="message" class="form-control md-textarea" rows="3" placeholder="Write your messsage here"></textarea> 
                    <span id="textArea_validate"></span>
                  </div>
                </form>
                  <div class="text-center">
                    <a class="btn btn-custom" onclick="document.getElementById('contact-form').submit();">SUBMIT</a>
                  </div>
              </div>
            </div>
            <!-- Form with header -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-7">

            <!--Google map-->
            <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
              <iframe src="https://www.google.com/maps/d/embed?mid=1F-wi2O1AFR4tB_JjSK72BLWNmoRGSqJH" frameborder="0"
                style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Buttons-->
            <div class="row text-center">
              <div class="col-md-4">
                <a class="btn-floating">
                  <i class="fas fa-map-marker-alt"></i>
                </a>
                <p>New Panvel, East</p>
              </div>
              <div class="col-md-4">
                <a class="btn-floating">
                  <i class="fas fa-phone"></i>
                </a>
                <p>022- 2745 6030</p>
              </div>
              <div class="col-md-4">
                <a class="btn-floating">
                  <i class="fas fa-envelope"></i>
                </a>
                <p>pce@mes.ac.in</p>
              </div>
            </div>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Contact v.1 -->
  </div>





    <!--Bootstrap Script-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!--Material Design Bootstrap Script-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!--AOS Script-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="../js/contact.js"></script>
</body>
</html>