<!-- cek apakah sudah login -->
<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location: login.php?pesan=belum_login");
}
$email = $_SESSION['email'];
 include('koneksi.php');
$anggota   = mysqli_query($koneksi, "SELECT * FROM dosen WHERE email ='$email'");
$row = mysqli_fetch_array($anggota);
$nama = $row['nama'];
$materi = $row['materi'];
?>

<!doctype html>
<html lang="id">

<head>
    <?php include('desain.php'); ?>
</head>

<body class="bg-light">
    <?php include('navbar.php'); ?>

    <div class="container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white">
                <h3 class="text-center">Data Absensi Mahasiswa Anda "<?php echo $nama; ?>" </h3>
 <center><div class="btn-group mt-2 mb-2" role="group" aria-label="Basic example">
                   <!-- <a href="dataTanggal.php" class="btn btn-primary">Lihat Data Berdasarkan Tanggal</a>
                    <a href="dataMateri.php" class="btn btn-primary">Lihat Data Berdasarkan Matakuliah</a>
                    <a href="dataNama.php" class="btn btn-primary">Lihat Data Berdasarkan Nama</a> -->
                    <a href="#" class="btn btn-primary">---- DATA ABSENSI MAHASISWA ANDA (<?php echo $nama; ?>) HARI INI----</a>
                </div></center>

            </div>
            <div class="card-body bg-white">
                <a href="dataRTmateri2.php" class="btn btn-success mb-3">Lihat Berdasarkan MataKuliah Yang Anda Ajarkan</a>
                <div id="dataTabel"></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#dataTabel").load('dataTabel.php')
            }, 200);
        });
    </script>

</body>

</html>