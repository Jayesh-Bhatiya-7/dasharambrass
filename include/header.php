<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dasaram Brass Components</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/touch-icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<?php 

$url = $_SERVER['REQUEST_URI'];
$file = basename($url);
// print_r($file); exit;
if($file=="index.php"){
  $home = "active";
}else if($file=="about.php"){
  $about = "active";
}else if($file=="products.php"){
  $products = "active";
}else if($file=="quality.php"){
  $quality = "active";
}else if($file=="contact.php"){
  $contact = "active";
}else{
  $home = "active";
}
?>
<body>
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- <img src="assets/img/touch-icon.jpg" height="50px" width="80px" rel="apple-touch-icon"> -->
      <a class="navbar-brand text-brand"  href="index.php">Dasaram <span class="color-b">Brass</span> Components</a>

      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link <?=$home?>" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?=$about?>" href="about.php">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?=$products?>" href="products.php">Products</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?=$quality?>" href="quality.php">Quality</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?=$contact?>" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>