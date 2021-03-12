<?php
include('koneksi.php');
$anggota        = mysqli_query($koneksi, "SELECT * FROM anggota");
$num_anggota    = mysqli_num_rows($anggota);

$data_masuk             = mysqli_query($koneksi, "SELECT * FROM data WHERE keterangan='Masuk'");
$num_data_masuk         = mysqli_num_rows($data_masuk);

$data_keluar             = mysqli_query($koneksi, "SELECT * FROM data WHERE keterangan='Keluar'");
$num_data_keluar         = mysqli_num_rows($data_keluar);
?>
<div class="row">
    <div class="col">
        <div class="card shadow-sm border-0 bg-primary text-white text-center">
            <div class="card-body">
                <h6 class="card-title">Jumlah Anggota</h6>
                <h1 class=""><?php echo $num_anggota; ?></h1>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm border-0 bg-success text-white text-center">
            <div class="card-body">
                <h6 class="card-title">Jumlah Data Masuk</h6>
                <h1 class=""><?php echo $num_data_masuk; ?></h1>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm border-0 bg-warning text-white text-center">
            <div class="card-body">
                <h6 class="card-title">Jumlah Data Keluar</h6>
                <h1 class=""><?php echo $num_data_keluar; ?></h1>
            </div>
        </div>
    </div>
</div>