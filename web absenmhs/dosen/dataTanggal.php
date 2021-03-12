<!-- cek apakah sudah login -->
<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location: login.php?pesan=belum_login");
}
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
                <h3 class="text-center">Data Absensi</h3>

                <center>
                    <a href="data.php" class="btn btn-primary col-md-2">Kembali</a>
                </center>

            </div>
            <div class="card-body bg-white">
                <!-- <a href="dataExport.php" class="btn btn-success mb-3">Export Data</a> -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <?php
                        include('koneksi.php');
                        $member = mysqli_query($koneksi, "SELECT DISTINCT tanggal FROM data");
                        $no = 1;
                        while ($row = mysqli_fetch_array($member)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['tanggal']; ?></td>
                                    <td>
                                        <a href="dataTanggalView.php?tanggal=<?php echo $row['tanggal']; ?>" class="btn btn-sm btn-primary">Tampilkan</a>
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