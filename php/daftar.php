<?php
// Escape all $_POST variables to protect against SQL injections
$nis = $mysqli->escape_string($_GET['nis']);
$email = $mysqli->escape_string($_GET['email']);
$katasandi = $mysqli->escape_string(password_hash($_GET['katasandi'], PASSWORD_BCRYPT));

// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM t_pengguna WHERE email='$email'") or die($mysqli->error());
if ( $result->num_rows > 0 ) {
    echo "ada";
} else {
	$sql = "INSERT INTO t_pengguna (nis, email, katasandi) " 
	     . "VALUES ('$nis','$email','$katasandi')";
	if ($mysqli->query($sql)) {
		echo "berhasil";
	} else {
		echo "gagal";
	}
}
?>