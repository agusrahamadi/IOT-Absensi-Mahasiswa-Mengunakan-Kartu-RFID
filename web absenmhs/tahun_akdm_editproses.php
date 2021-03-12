<?php
include('koneksi.php');

$no        = $_POST['no'];
$tahun    = $_POST['tahun'];

$input      = mysqli_query($koneksi, "UPDATE tahun_akdm SET tahun='$tahun' WHERE no='$no' ");

if ($input == TRUE) {
    header("location: tahun_akdm.php");
} else {
}
