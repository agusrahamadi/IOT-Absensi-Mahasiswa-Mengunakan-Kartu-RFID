<?php
include('koneksi.php');
$no = $_GET['no'];
mysqli_query($koneksi, "DELETE FROM dosen WHERE no='$no' ");
header('location: dosen.php');
