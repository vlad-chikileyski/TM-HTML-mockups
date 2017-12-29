<?php
session_start();
if(isset($_SESSION['user'])){
echo '<div><p style="text-align: center;font-size: xx-large;">Hello, '.$_SESSION['user'] .'</p> </div>';
echo '<div><p style="text-align: center;font-size: xx-large;"><a href="logout.php">Logout</a></p> </div>';
} else {
        header("Location: /login.php");
}
 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>AngularApp</title>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/stylescombined2.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
  <app-root class="abee-offers-app"></app-root>

  <script src="assets/lib/jquery-3.2.1/jquery-3.2.1.min.js"></script>
  <script src="assets/lib/slick-carousel-1.6.0/slick.js"></script>
<script type="text/javascript" src="inline.bundle.js"></script>
<script type="text/javascript" src="polyfills.bundle.js"></script>
<script type="text/javascript" src="styles.bundle.js"></script>
<script type="text/javascript" src="vendor.bundle.js"></script>
<script type="text/javascript" src="main.bundle.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>
