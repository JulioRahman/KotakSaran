<?php 
require 'include/koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kotak Saran</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
  <script defer src="js/fontawesome-all.js"></script>
</head>

<body>

<!-- NavBar -->
<div class="position-relative">
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="image/bootstrap-solid.svg" width="30" height="30" alt="">
      Bootstrap
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kilas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Program
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Kotak Saran</a>
            <a class="dropdown-item" href="#">Kotak Keluhan</a>
            <a class="dropdown-item" href="#">Kotak Curhat</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Statistik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Solusi</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mr-3">
          <span class="fa-layers fa-fw fa-2x">
            <i class="fas fa-envelope"></i>
            <span class="fa-layers-counter fa-lg">1</span>
          </span>
        </li>
        <li class="nav-item">
          <i class="fas fa-user fa-2x"></i>
        </li>
      </ul>
    </div>
  </nav>
</div>

<!-- Landing Page (ada text box) -->
<div class="container pt-2">
  <form autocomplete="off" class="form-inline" onsubmit="return false">
    <input type="text" class="form-control mr-2 mb-2" placeholder="NIS" name="nis" maxlength="9" id="inputnis" />
    <button class="btn btn-light mb-2" name="kirim" onclick="kirimnis(inputnis.value)">Kirim</button>
  </form>
</div>

<!-- Modal -->
<div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" autocomplete="off" onsubmit="return false">
        <div class="modal-body">
          <p id="isimodal"></p>
          <div id="fgtidak">
            <div class="form-group" id="fgnis">
              <label for="nis">NIS</label>
              <input type="text" class="form-control" readonly name="nis" id="nis" />
            </div>
            <div class="form-group" id="fgnama">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" readonly name="nama" id="nama" />
            </div>
            <div class="form-group" id="fgjk">
              <label class="mr-2">Jenis Kelamin:</label>
              <label class="radio-inline mr-2"><input type="radio" disabled name="jk" value="L" id="rbl">Laki-laki</label>
              <label class="radio-inline"><input type="radio" disabled name="jk" value="P" id="rbp">Perempuan</label>
            </div>
            <div class="form-group" id="fgemail">
              <label for="email">Email</label>
              <input type="email" class="form-control" required autocomplete="off" name="email" id="email" />
            </div>
            <div class="form-group" id="fgnislogin">
              <label for="nislogin">NIS</label>
              <input type="text" class="form-control" readonly autocomplete="off" name="nislogin" id="nislogin" />
            </div>
            <div class="form-group">
              <label for="katasandi">Kata Sandi</label>
              <input type="password" class="form-control" required autocomplete="off" name="katasandi" id="katasandi" />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" id="tombolsubmit"></button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal2 -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <p id="isimodal"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
    </div>
  </div>
</div>
</body>
<script src="js/index.js"></script>
</html>