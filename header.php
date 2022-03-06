<?php
session_start();
error_reporting(0);
//echo $_SESSION['user_id'];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="html-website/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <script src="assets/js/scripts.js"></script>
    <script src="contact_form.js" type = "text/javascript"></script>
    <title>OLYMPIA GYM!</title>
  </head>
  <body>
    <div class="container"><?php echo $_SESSION['id']; ?><!--session variable prints here-->
        <nav class="navbar sticky-top navbar-light bg-light">
          <a class="navbar-brand" href="index.php">
            <img src="html-website/images/logo5.png" width="100" height="100" class="d-inline-block align-center" alt="">
            Olympia Gym!
          </a>

          <ul class="nav nav-tabs">
              <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href= "dashboard.php" >Dashboard</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
              </li>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="signup.php">Signup</a>
              </li>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
              </li>
          </ul>
          </nav>

        
