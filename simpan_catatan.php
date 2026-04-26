<?php
session_start();
include 'koneksi.php';

if($_SESSION['status'] != "login"){
    header("location:index.php");
}

$id_user = $_SESSION['id_pengguna'];
$tgl = $_POST['tanggal'];
$kegiatan = $_POST['kegiatan'];
$biaya = $_POST['biaya'];

$query = mysqli_query($koneksi, "INSERT INTO catatan_tani (id_pengguna, tanggal, kegiatan, biaya) VALUES ('$id_user', '$tgl', '$kegiatan', '$biaya')");

if($query){
    header("location:index.php#hal-catatan"); // Kembali ke halaman catatan
}
?>