<?php 
require 'include/koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kotak Sakecur</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>

<!-- NavBar -->
<div class="position-relative">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <a class="navbar-brand logo" href="#beranda">
      <img src="image/logo.svg" width="30" height="30" alt="">
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
        <li class="nav-item">
          <a class="nav-link" href="#kilas">Kilas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Program
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#p1">Kotak Saran</a>
            <a class="dropdown-item" href="#p2">Kotak Keluhan</a>
            <a class="dropdown-item" href="#p3">Kotak Curhat</a>
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
        <li class="nav-item" id="udahlogin" style="display: none;">
          <a class="nav-link" href="#"><i data-feather="user"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<!-- Landing Page (ada text box) -->
<div class="">
  <div class="bekron col-lg-7">
    <img class="boxsvg" src="image/box.svg" width="45%">
  </div>
</div>
<div class="sesuatu" id="beranda">
<header class="text-center">
  <div class="container">
    <div class="row col-lg-6 mx-auto mx-lg-0">
      <div class="col-lg-12 position-absolute">
        <h3><span id="ngetik1"></span></h3>
      </div>
      <div class="col-lg-12 position-absolute textbox">
        <form autocomplete="off" onsubmit="return false">
          <div class="form-row">
            <div class="col-12 col-md-10 mb-2 mb-lg-0">
              <input type="text" class="form-control form-control-lg" placeholder="Masukkan NIS Anda" name="nis" maxlength="9" id="inputnis" />
            </div>
            <div class="col-12 col-md-2">
              <button class="btn btn-block btn-light btn-inverse" name="kirim" onclick="kirimnis(inputnis.value)"
              <?php /*
                if (isset($_SESSION['aktif'])) {
                  if ($_SESSION['aktif']) {
                    echo "onclick='udahlogin()'";
                  } else {
                    echo "onclick='kirimnis(inputnis.value)'";
                  }
                }
              */ ?>
              ><i data-feather="log-in" class="mt-1"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>
</div>

<!-- Bagian penjelasan -->
<div class="container paddingcustom" id="kilas">
  <blockquote class="blockquote text-center">
    <h2>Kotak Sakecur</h2>
    <p>Kotak Sakecur adalah kotak yang dimana dapat mengisi berupa saran, keluhan dan curhat. Kotak Sakecur ini dapat diisi oleh seluruh warga STM yang memiliki keluhan, aspirasi kedepannya untuk sekolah bahkan yang membutuhkan saran untuk masalahnya. Kotak Sakecur ini akan dilihat dan dibalas oleh Kepala Sekolah, Guru BK serta Guru yang bersangkutan. </p>
  </blockquote>
</div>

<!-- Bagian Program -->
<section class="text-center paddingcustom" id="p1">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="d-flex mb-3">
            <img src="image/saran.svg" alt="Coba" class="img-fluid mx-auto">
          </div>
          <h3>Kotak Saran</h3>
          <p class="lead mb-0" id="p2">Yang berupa saran infrastruktur, masukan bagi para Guru bahkan Kepala Sekolah</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="d-flex mb-3">
            <img src="image/keluhan.svg" alt="Coba" class="img-fluid mx-auto">
          </div>
          <h3>Kotak Keluhan</h3>
          <p class="lead mb-0" id="p3">Yang berupa keluhan warga STM selama belajar di SMKN 1 Cimahi dan keluhan-keluhan lainnya seperti peraturan sekolah, peraturan keputrian, hukuman keterlambatan</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="mx-auto mb-0 mb-lg-3">
          <div class="d-flex mb-3">
            <img src="image/curhat.svg" alt="Coba" class="img-fluid mx-auto">
          </div>
          <h3>Kotak Curhat</h3>
          <p class="lead mb-0">Yang berupa curhatan para warga STM tentang apapun itu, karena Kotak Curhat disini mencakup luas bahasannya</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bagian Statistik -->
<section class="paddingcustom text-center">
  <div class="container">
    <div class="col-lg-6 mx-auto">
      <canvas id="chart" width="600" height="400"></canvas>
      <h5 class="pt-3">Statistik penggunaan web Kotak Sakecur</h5>
    </div>
  </div>
</section>

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
              <!-- <small id="emailHelp" class="form-text text-danger">Email yang Anda masukkan sudah terpakai</small> -->
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
<div class="modal fade bd-example-modal-sm" id="modal2" tabindex="-1" role="dialog" aria-labelledby="judulmodal2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulmodal2"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btutup">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <p id="isimodal2"></p>
        </div>
    </div>
  </div>
</div>
</body>

<script src="js/jquery-3.2.1.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/feather.js"></script>
<script>
  feather.replace()
</script>
<script src="js/typed.js"></script>
<script src="js/chart.js"></script>
<script src="js/index.js"></script>

</html>