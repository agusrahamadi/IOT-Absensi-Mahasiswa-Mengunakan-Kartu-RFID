<?php
include('koneksi.php');
$no = $_GET['no'];
mysqli_query($koneksi, "DELETE FROM jadwal WHERE no='$no' ");
header('location: jadwal.php');
