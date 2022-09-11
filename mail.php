<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From: ".$name."<".$email.">\r\n";

$recipient = "micdaw@hotmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo('

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>NK2023</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container-fluid p-0">
    <img src="images/banner.png" class="banner" alt="NK2023">
  </div>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #1c1f2d;">
    <div class="container-fluid">
      <a class="navbar-brand">NK2023</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item mx-3">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="registration.html">Registration</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="accommodation.html">Accommodation</a>
          </li>
          <li class="nav-item dropdown mx-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Program
              </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="day1.html">September 26</a></li>
              <li><a class="dropdown-item" href="day2.html">September 27</a></li>
              <li><a class="dropdown-item" href="day3.html">September 28</a></li>
              <li><a class="dropdown-item" href="day4.html">September 29</a></li>
            </ul>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="travel.html">Travel information</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="sponsors.html">Sponsors & Exhibits</a>
          </li>
          <li class="nav-item dropdown mx-3">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-current="page" aria-expanded="false">
                About
              </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="norway.html">Norway</a></li>
              <li><a class="dropdown-item" href="contact.html">Contact</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row my-5 justify-content-between"  style = "min-height: 550px">
      <div class="col-sm-12 col-md-8 pe-5">

        <h1>Mail Sent.</h1>

        <p><strong>Thankyou for contacting us.<br />
          We will get back to you as soon as possible </strong></p>



      </div>

      <div class="col-sm-12 col-md-4 mt-4">
        <div class="card text-center bg-light " style="width: 18rem; height: 12rem;">
          <div class="card-body">
            <h1 class="card-title">Your logo here</h1>
            <p class="card-text">Please contact us about sponsorship opportunities.</p>
            <a href="contact.html" class="btn btn-secondary">Contact</a>
          </div>
        </div>
      </div>

    </div>
  </div>


  <footer class="text-center text-white">
    <div class="container-fluid p-0">
      <div class="row justify-content-around" style="background-color: #1c1f2d;">
        <div class="col-10 col-md-2 my-4">
          <a href="https://pixabay.com/photos/waterfall-river-mountains-trees-5838582/"><img src="images/norway1.jpg" class="rounded-3 w-100" /></a>
        </div>
        <div class="col-10 col-md-2 my-4">
          <a href="https://pixabay.com/photos/oslo-opera-house-norway-opera-917591/"><img src="images/norway2.jpg" class="rounded-3 w-100" /> </a>
        </div>
        <div class="col-10 col-md-2 my-4">
          <a href="https://pixabay.com/photos/lofoten-hamnoy-landscape-4827611/?download"><img src="images/norway3.jpg" class="rounded-3 w-100" /> </a>
        </div>
        <div class="col-10 col-md-2 my-4">
          <a href="https://pixabay.com/photos/building-house-market-harbor-6908494/"><img src="images/norway4.jpg" class="rounded-3 w-100" /> </a>
        </div>
        <div class="col-10 col-md-2 my-4">
          <a href="https://pixabay.com/photos/landscape-the-nature-of-the-mountain-4860722/"><img src="images/norway5.jpg" class="rounded-3 w-100" /> </a>
        </div>
      </div>
      <div class="row justify-content-around pt-4" style="background-color: #a9adc1;">
        <p class=" text-center"><a href="http://www.sni-online.org/" target="_blank"><img src="images/sni-logo.png" alt="SNI" /></a></p>
        <p class="text-center">&copy; 2023 Society for Natural Immunity. All rights reserved.<br>
          <a href="mailto:info@nk2023.org">info@nk2023.org</a>
        </p>
      </div>
  </footer>
  <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>

</body>

</html>


');

 ?>
