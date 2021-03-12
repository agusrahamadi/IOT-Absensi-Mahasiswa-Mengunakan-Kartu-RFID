<?php
include('koneksi.php');

$materi     = $_POST['materi'];

$input      = mysqli_query($koneksi, "INSERT INTO materi (materi) VALUES ('$materi')");

if ($input == TRUE) {
    header("location: materi.php");

}

