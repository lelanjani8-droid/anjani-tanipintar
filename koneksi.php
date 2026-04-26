<?php
$host = "localhost";
$user = "if0_41757137";
$pass = "L4el4c4nt1k";
$db   = "if0_41757137_XXX";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
