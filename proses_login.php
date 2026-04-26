<?php
session_start();
include 'koneksi.php';

// Menangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query harus lengkap. Sesuaikan 'username' & 'password' dengan nama kolom di tabel 'pengguna'
$query = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_assoc($query);
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:index.php");
} else {
    header("location:login.php?pesan=gagal");
}
?>