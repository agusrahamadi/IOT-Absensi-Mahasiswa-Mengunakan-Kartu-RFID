<?php
include('koneksi.php');

$no         = $_POST['no'];
$tag        = $_POST['tag'];
$nama       = $_POST['nama'];
$nip        = $_POST['nip'];
$email      = $_POST['email'];
$password   = $_POST['password'];

$input      = mysqli_query($koneksi, "UPDATE dosen SET tag='$tag', nama='$nama', nip='$nip', email='$email', password='$password' WHERE no='$no' ");

if ($input == TRUE) {
    header("location: dosen.php");
} else {
}
