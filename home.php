<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
  </style>
</head>

<body>

  <div class="bg-container">
    <div class="fade">
      <img src="bg.jpg" style="width:100%">
    </div>


    <?php include "header.php"?>

  </div>
  <br>
  <br>

  <div class="title">
    <h1>Gujarat Tourism</h1>
  </div>
  <div class="contain">
    <div class="heading">
      <h2>Popular Destination</h2>
    </div>
    <div class="box">
      <div class="imgBox">
        <img src="images//destination//ahmedabad.jpg" style="width: auto;height: 270px;">
      </div>
      <div class="name-text left1">
        <h2>Ahmedabad</h2>
        <a href="touristplace.php" class="btn">Visit</a>
      </div>
    </div>

    <div class="box">
      <div class="imgBox">
        <img src="images//destination//kutch.jpg" style="width: auto;height: 270px;">
      </div>
      <div class="name-text left2">
        <h2>Kutch</h2>
        <a href="touristplace.php" class="btn">Visit</a>
      </div>
    </div>

    <div class="box">
      <div class="imgBox">
        <img src="images//destination//gir.jpg" style="width: auto;height: 270px;">
      </div>
      <div class="name-text left3">
        <h2>Sasan Gir</h2>
        <a href="touristplace.php" class="btn">Visit</a>
      </div>
    </div>

    <div class="box">
      <div class="imgBox">
        <img src="images//destination//somnath.jpg" style="width: auto;height: 270px;">
      </div>
      <div class="name-text left4">
        <h2>Somnath</h2>
        <a href="touristplace.php" class="btn">Visit</a>
      </div>
    </div>

    <div class="destination-btn">
      <a href="touristplace.php">View all</a>
    </div>
  </div>
  <div class="about">
    <h2>Abouts Us</h2>
    <footer>
      <a href="https://www.facebook.com/"> <img src="images//logo//facebook.png" height="25px" width="25px"> </a>
      <a href="https://www.instagram.com/"> <img src="images//logo//instagram.png" height="25px" width="25px"> </a>
      <a href="https://twitter.com/"> <img src="images//logo//twitter.png" height="25px" width="25px"> </a>
      <p> <b>
          Contact Information: Gujarattourism@gmail.com<br>
          Contact Information: +91 9874588462</b></p>
    </footer>
  </div>
</body>


</html>