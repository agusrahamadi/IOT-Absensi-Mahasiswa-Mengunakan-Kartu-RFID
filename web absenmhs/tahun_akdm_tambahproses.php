<?php
include('koneksi.php');

$tahun    = $_POST['tahun'];

$input      = mysqli_query($koneksi, "INSERT INTO tahun_akdm (tahun) VALUES ('$tahun')");

if ($input == TRUE) {
    header("location: tahun_akdm.php");

}

