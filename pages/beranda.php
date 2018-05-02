<?php 
require '../include/koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kotak Sakecur</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
<!-- NavBar -->
<div class="position-relative">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <a class="navbar-brand logo" href="#">
      <img src="../image/logo.svg" width="30" height="30" alt="">
      Kotak Sakecur
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav napigasi navigasi">
        <li class="nav-item active">
          <a class="nav-link" href="#beranda">Beranda <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <i data-feather="user"></i>
        </li>
      </ul>
    </div>
  </nav>
</div>
</body>

<script src="../js/jquery-3.2.1.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/feather.js"></script>
<script>
  feather.replace()
</script>

</html>