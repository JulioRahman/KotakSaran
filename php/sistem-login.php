<?php
require '../include/koneksi.php';
if(isset($_GET['nis']) AND !empty($_GET['nis'])){
  $nis = $mysqli->escape_string($_GET['nis']);

  $resultsiswa = $mysqli->query("SELECT * FROM t_siswa WHERE nis='$nis'");
  if ($resultsiswa->num_rows == 0){
    $pop = "tidak";
    echo $pop;
  } else {
    $siswa = $resultsiswa->fetch_assoc();
    $resultpengguna = $mysqli->query("SELECT * FROM t_pengguna WHERE nis='$nis'");
    if ($resultpengguna->num_rows == 0) {
      $pop = "d";
      $jk = $siswa['jk'];
      $nama = $siswa['nama'];
      echo $pop.$jk.$nama;
    } else {
      $pop = "masuk";
      echo $pop;
    }
  }
}
?>