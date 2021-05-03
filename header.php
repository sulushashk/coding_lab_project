<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPoint</title>
    <link rel="stylesheet" href="css/style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="js/index.js"></script>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="footer, address, phone, icons" />   
</head>
<header>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-sm">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
         </button>
         <a href="index.php" class="nav-item ">
            <img src="images/logo.jpg">
          </a>
         <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav mx-5 mr-auto mt-2 mt-lg-0 ">
         <li class="nav-item - active">
              <a class="nav-link" href="index.php">Home<span class="sr-only"></span></a>
         </li>
         <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Products</a>
          <ul class="dropdown-menu">
           <li><a class="dropdown-item" href="#">IPhone</a></li>
           <li><a class="dropdown-item" href="#">IPad</a></li>
           <li><a class="dropdown-item" href="#">Mac</a></li>
           <li><a class="dropdown-item" href="#">AirPods</a></li>
          </ul>
          </li>
         <li class="nav-item">
              <a class="nav-link" href="#myid12">Contacts<span class="sr-only"></span></a>
         </li>
         <?php 
         if(isset($_SESSION["userName"])){
        echo 
        "<li class='nav-item'>
              <a class='nav-link' href='profile.php'>Profile Page<span class='sr-only'></span></a>
         </li>";
        echo 
        "<li class='nav-item'>
              <a class='nav-link' href='logout.php'>Log Out<span class='sr-only'></span></a>
         </li>";
         }
         else{
          echo 
          "<li class='nav-item'>
                <a class='nav-link' href='signup.php'>Sign Up<span class='sr-only'></span></a>
           </li>";
          echo 
          "<li class='nav-item'>
                <a class='nav-link' href='login.php'>Log In<span class='sr-only'></span></a>
           </li>";
           }
         ?>
              </ul>
           </div> 
      </div> </div>
     </nav>
     
</header>