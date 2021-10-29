<?php
require_once "modules/connect.php";

$langTable = mysqli_query($link, "SELECT DISTINCT lang FROM cards");
$langTest = false;

if (empty($_GET['ln'])) {
  $pageLang = 'ru';
} else {
  while ($oneLang = mysqli_fetch_assoc($langTable)) {
    if ($_GET['ln'] == $oneLang['lang']) {
      $langTest = true;
    }
  }

  if ($langTest == false) {
    $_GET['ln'] = 'ru';
  }
  $pageLang = $_GET['ln'];
}

$termsTable = mysqli_query($link, "SELECT * FROM terms WHERE lang='$pageLang'");
$terms = array();

while ($oneTerm = mysqli_fetch_assoc($termsTable)) {
  $terms[$oneTerm['code']] = $oneTerm['title'];
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Play Arena</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <!-- Favicons -->
  <link href="assets/images/logo/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/styleFDB.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v1.0.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background: #1a2026;">

  <!-- Feedback Form -->
  <?php
  include "modules/general/feedback_form.php"
  ?>

  <!-- ======= Header ======= -->
  <?php
  include "modules/general/header.php"
  ?>

  <!-- ======= Hero Section ======= -->
  <?php
  include "modules/mainpage/hero.php"
  ?>

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php
    include "modules/mainpage/about.php"
    ?>

    <!-- ======= Services Section ======= -->
    <?php
    include "modules/mainpage/services.php"
    ?>

    <!-- ======= About Us 2 Section ======= -->
    <?php
    include "modules/mainpage/about2.php"
    ?>

    <!-- ======= Booking Section ======= -->
    <?php
    include "modules/general/court_booking.php"
    ?>

    <!-- ======= Sponsors Section ======= -->
    <?php
    include "modules/mainpage/sponsors.php"
    ?>

    <!-- ======= Footer ======= -->
    <?php
    include "modules/general/footer.php"
    ?>

    <!-- Optional JS Files -->
    <script src="assets/js/fdb/feedback.js"></script>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>