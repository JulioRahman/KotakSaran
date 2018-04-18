<?php
require '../include/koneksi.php';

// Escape email to protect against SQL injections
$nis = $mysqli->escape_string($_GET['nis']);
$result = $mysqli->query("SELECT * FROM t_pengguna WHERE nis='$nis'");
$user = $result->fetch_assoc();


if ( password_verify($_GET['katasandi'], $user['katasandi']) ) {
    
    $_SESSION['nis'] = $user['nis'];
    
    // This is how we'll know the user is logged in
    echo "berhasil";
} else {
    echo "gagal";
}
?>