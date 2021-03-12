<!-- cek apakah sudah login -->
<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location: login.php?pesan=belum_login");
}
 $materi= $_GET['materi'];
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
                <h3 class="text-center">Data Absensi Dosen</h3>

                <center><div class="btn-group mt-2 mb-2" role="group" aria-label="Basic example">
                   <!-- <a href="dataTanggal.php" class="btn btn-primary">Lihat Data Berdasarkan Tanggal</a>
                    <a href="dataMateri.php" class="btn btn-primary">Lihat Data Berdasarkan Matakuliah</a>
                    <a href="dataNama.php" class="btn btn-primary">Lihat Data Berdasarkan Nama</a> -->
                    <a href="#" class="btn btn-primary">---- DATA REALTIME ABSENSI DOSEN  MATAKULIAH (<?php echo $materi; ?>) BERDASARKAN TANGGAL ----</a>
                </div></center>

            </div>
            <div class="card-body bg-white">
                <!-- <a href="dataExport.php" class="btn btn-success mb-3">Export Data</a> -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Pertemuan</th>
                                <th>Tanggal</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <?php
                        include('koneksi.php');
                        $member = mysqli_query($koneksi, "SELECT DISTINCT tanggal FROM datadosen WHERE materi='$materi'");
                        $no = 1;
                        while ($row = mysqli_fetch_array($member)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td>Pertemuan Ke-<?php echo $no++; ?></td>
                                    <td><?php echo $row['tanggal']; ?></td>
                                    <td>
                                        <a href="dataRTmateriVIEW2.php?materi=<?php echo $materi; ?>&tanggal=<?php echo $row['tanggal']; ?>" class="btn btn-sm btn-primary">Lihat Data</a>
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