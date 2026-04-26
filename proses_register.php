<?php 
include 'koneksi.php';

// Ambil data dari form register
$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username sudah ada di database agar tidak ganda
$cek_user = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username='$username'");
if(mysqli_num_rows($cek_user) > 0) {
    // Jika username sudah ada, kembalikan ke register dengan pesan gagal
    header("location:register.php?pesan=gagal");
} else {
    // Jika belum ada, masukkan data baru ke tabel pengguna
    $query = mysqli_query($koneksi, "INSERT INTO pengguna (username, password) VALUES ('$username', '$password')");

    if($query) {
        // Jika berhasil, arahkan ke login dengan pesan sukses
        header("location:index.php?pesan=registrasi_berhasil");
    } else {
        header("location:register.php?pesan=gagal");
    }
}
?>