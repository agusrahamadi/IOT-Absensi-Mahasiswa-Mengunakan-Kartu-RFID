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



$jadwal  = mysqli_query($koneksi, "SELECT* FROM jadwal WHERE dosen ='$nama'");
$rowj = mysqli_fetch_array($jadwal);
$dosen = $rowj['dosen'];
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
                <h3 class="text-center"> Data Absensi Mahasiswa Anda  <?php echo $nama; ?></h3>

                <center><div class="btn-group mt-2 mb-2" role="group" aria-label="Basic example">
                   <!-- <a href="dataTanggal.php" class="btn btn-primary">Lihat Data Berdasarkan Tanggal</a>
                    <a href="dataMateri.php" class="btn btn-primary">Lihat Data Berdasarkan Matakuliah</a>
                    <a href="dataNama.php" class="btn btn-primary">Lihat Data Berdasarkan Nama</a> -->
                    <a href="#" class="btn btn-primary">---- DATA REALTIME ABSENSI MAHASISWA ANDA BERDASARKAN MATAKULIAH YANG ANDA AJARKAN----</a>
                </div></center>

            </div>
            <div class="card-body bg-white">
                <!-- <a href="dataExport.php" class="btn btn-success mb-3">Export Data</a> -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Matakuliah</th>
                                <th>Opsi</th>
                                <th>Laporan</th>
                            </tr>
                        </thead>
                        <?php
                        include('koneksi.php');
                        $member = mysqli_query($koneksi, "SELECT DISTINCT materi FROM data WHERE dosen = '$dosen'");
                        $no = 1;
                        while ($row = mysqli_fetch_array($member)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['materi']; ?></td>
                                    <td>
                                        <a href="dataRTmateriTGL2.php?materi=<?php echo $row['materi']; ?>" class="btn btn-sm btn-primary">Lihat Berdasarkan Tanggal</a>
                                    </td>
                                     <td>
                                        <a href="l_materi.php?materi=<?php echo $row['materi']; ?>" class="btn btn-sm btn-secondary">Cetak</a></a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
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