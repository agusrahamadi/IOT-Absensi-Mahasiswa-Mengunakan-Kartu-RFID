<?php
include('koneksi.php');
$anggota        = mysqli_query($koneksi, "SELECT * FROM anggota");
$num_anggota    = mysqli_num_rows($anggota);

$materi        = mysqli_query($koneksi, "SELECT * FROM materi");
$num_materi    = mysqli_num_rows($materi);

$dosen        = mysqli_query($koneksi, "SELECT * FROM dosen");
$num_dosen    = mysqli_num_rows($dosen);

$jadwal       = mysqli_query($koneksi, "SELECT * FROM jadwal");
$num_jadwal   = mysqli_num_rows($jadwal);

$krs       = mysqli_query($koneksi, "SELECT * FROM krs");
$num_krs   = mysqli_num_rows($krs);

$data    = mysqli_query($koneksi, "SELECT * FROM data");
$num_data   = mysqli_num_rows($data);

$datadosen      = mysqli_query($koneksi, "SELECT * FROM datadosen");
$num_datadosen   = mysqli_num_rows($datadosen);

$data_masuk             = mysqli_query($koneksi, "SELECT * FROM data WHERE keterangan='Masuk'");
$num_data_masuk         = mysqli_num_rows($data_masuk);

$data_keluar             = mysqli_query($koneksi, "SELECT * FROM data WHERE keterangan='Keluar'");
$num_data_keluar         = mysqli_num_rows($data_keluar);
?>

<div class="row">
    <div class="col">
        <div class="card shadow-sm border-0 bg-success text-white text-center">
            <div class="card-body">
                <h6 class="card-title">Data Mahasiswa</h6>
                <h1 class=""><?php echo $num_anggota; ?></h1>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm border-0 bg-primary text-white text-center">
            <div class="card-body">
                <h6 class="card-title">Data Matakuliah</h6>
                <h1 class=""><?php echo $num_materi; ?></h1>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm border-0 bg-success text-white text-center">
            <div class="card-body">
                <h6 class="card-title">Data Dosen</h6>
                <h1 class=""><?php echo $num_dosen; ?></h1>
            </div>
        </div>
    </div>
    
    
    
</div>
<br>
<div class="row">
    
    <div class="col">
        <div class="card shadow-sm border-0 bg-warning text-white text-center">
            <div class="card-body">
                <h6 class="card-title">Data Jadwal</h6>
                <h1 class=""><?php echo $num_jadwal; ?></h1>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm border-0 bg-primary text-white text-center">
            <div class="card-body">
                <h6 class="card-title">Data KRS</h6>
                <h1 class=""><?php echo $num_krs; ?></h1>
            </div>
        </div>
    </div>
     <div class="col">
        <div class="card shadow-sm border-0 bg-warning text-white text-center">
            <div class="card-body">
                <h6 class="card-title">Data Absensi Mahasiswa</h6>
                <h1 class=""><?php echo $num_data; ?></h1>
            </div>
        </div>
    </div>
    
     <div class="col">
        <div class="card shadow-sm border-0 bg-primary text-white text-center">
            <div class="card-body">
                <h6 class="card-title">Data Absensi Dosen</h6>
                <h1 class=""><?php echo $num_datadosen; ?></h1>
            </div>
        </div>
    </div>
    
    
</div>