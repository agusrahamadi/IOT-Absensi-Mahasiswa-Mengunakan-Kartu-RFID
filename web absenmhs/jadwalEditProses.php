<?php
include('koneksi.php');

$no        = $_POST['no'];
$hari      = $_POST['hari'];
$jam       = $_POST['jam'];
$menit     = $_POST['menit'];
$jam2       = $_POST['jam2'];
$menit2    = $_POST['menit2'];
$materi    = $_POST['materi'];
$dosen     = $_POST['dosen'];

$programstudi        = $_POST['programstudi'];     
   $ruang             = $_POST['ruang'];
  $kelas2              = $_POST['kelas2'];
 $semester             = $_POST['semester'];  
$tahunakedemik         = $_POST['tahunakedemik'];

$sks         = $_POST['sks'];

$input      = mysqli_query($koneksi, "UPDATE jadwal SET hari='$hari', jam='$jam', menit='$menit', jam2='$jam2', menit2='$menit2', materi='$materi', dosen='$dosen', programstudi='$programstudi', ruang='$ruang', kelas2='$kelas2', semester='$semester', tahunakedemik='$tahunakedemik' , sks='$sks' WHERE no='$no' ");

if ($input == TRUE) {
    header("location: jadwal.php");
} else {
}
