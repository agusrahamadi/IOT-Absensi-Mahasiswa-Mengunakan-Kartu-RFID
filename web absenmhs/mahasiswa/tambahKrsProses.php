<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location: login.php?pesan=belum_login");
}
include('koneksi.php');
$email = $_SESSION['email'];
$anggota = mysqli_query($koneksi, "SELECT * FROM anggota WHERE email='$email'");
$rowAnggota = mysqli_fetch_array($anggota);
$tag = $rowAnggota['tag'];

$kode = $_POST['kode'];

$jadwal = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE kode='$kode'");
$rowJadwal = mysqli_fetch_array($jadwal);
$dosen = $rowJadwal['dosen'];
$materi = $rowJadwal['materi'];

$input = mysqli_query($koneksi, "INSERT INTO krs (kode, tag, dosen, materi) VALUES ('$kode', '$tag', '$dosen', '$materi')");
if($input == TRUE){
    header('location: index.php');
}else{
    echo "Gagal";
}
