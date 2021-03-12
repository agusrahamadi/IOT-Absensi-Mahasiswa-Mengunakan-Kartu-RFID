<?php
include('koneksi.php');
$TAG = $_GET['tag'];
$KET = $_GET['ket'];

date_default_timezone_set('Asia/Singapore');
$tanggal = date('d-m-Y');
$waktu = date('H:i:s');

$anggota   = mysqli_query($koneksi, "SELECT * FROM anggota WHERE tag_anggota ='$TAG'");
$row = mysqli_fetch_array($anggota);
$nama = $row['nama_anggota'];
$no_plat= $row['no_plat'];
$cekanggota    = mysqli_num_rows($anggota);
 
$datam   = mysqli_query($koneksi, "SELECT * FROM data WHERE tag_anggota ='$TAG'");
$rowm = mysqli_fetch_array($datam);
$waktumasuk= $rowm['waktumasuk'];
$waktukeluar = $rowm['waktukeluar'];


 $cekstatus = mysqli_query($koneksi, "SELECT * FROM data WHERE tag_anggota ='$TAG' AND  tanggal ='$tanggal' AND waktumasuk ='$waktumasuk' AND waktukeluar ='$waktukeluar' ");
                $cekst = mysqli_num_rows($cekstatus);
                
                
if ($cekanggota > 0) {
    if ($cekst > 0) {
         echo "Sudah Masuk";
   } else {
       
    if ($KET == "Masuk") {
        $inputData = mysqli_query($koneksi, "INSERT INTO data (tag_anggota, nama_anggota, tanggal, waktumasuk, waktukeluar) VaLUES ('$TAG', '$nama', '$tanggal', '$waktu', '') ");
        echo $no_plat;
    }
    if($KET == "Keluar"){
        $data       = mysqli_query($koneksi, "SELECT * FROM data WHERE tag_anggota='$TAG' ORDER BY no DESC LIMIT 1");
        $rowData    = mysqli_fetch_array($data);
        $noData     = $rowData['no']; 
        $updateData = mysqli_query($koneksi, "UPDATE data SET waktukeluar='$waktu' WHERE no='$noData' ");
        echo $no_plat;
    }
    }
} else {
    $inputTag = mysqli_query($koneksi, "INSERT INTO anggotatag (tag) VALUES ('$TAG') ");
    echo "Belum Terdaftar";
}
