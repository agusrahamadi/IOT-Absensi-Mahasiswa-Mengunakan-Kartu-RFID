<?php
include('koneksi.php');

$tag        = $_POST['tag'];
$nama       = $_POST['nama'];
$nip        = $_POST['nip'];
$email      = $_POST['email'];
$password   = $_POST['password'];

$input      = mysqli_query($koneksi, "INSERT INTO dosen (tag, nama, nip, email, password) VALUES ('$tag', '$nama', '$nip', '$email', '$password')");

if ($input == TRUE) {
    header("location: dosen.php");
} else {
}
