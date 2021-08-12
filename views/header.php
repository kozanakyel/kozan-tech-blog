<?php
ob_start();
session_start();
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./resources/styles.css" type="text/css">
    <script src="https://kit.fontawesome.com/f85b28bbc8.js" crossorigin="anonymous"></script>
  <title>Kozan Akyel Technology</title>
</head>
<body>
  <div class="nav">
    <div class="brand">
      <a id="header-brand" href="index.php">KOZANAKYEL</a>

      <a href="goat_phoneix.php"><i style="background:black;" class="fas fa-dragon fa-2x"></i></a>
    </div>
    <label id="hamburger" for="toggle">  &#9776; </label>
    <input type="checkbox" id="toggle"/>
    <div class="menu">
      <a href="index.php">Home</a>
      <a href="resume.php">CV/Resume</a>
      <a href="about.php">About</a>
      <?php
        if (isset($_SESSION["dragon_user"])) {
          echo "<a href='admin.php'>Admin</a>";
        }
       ?>
    </div>
  </div>
