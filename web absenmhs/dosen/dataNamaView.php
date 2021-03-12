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
    <?php
    $materi= $_GET['materi'];

    ?>
</head>

<body class="bg-light">
    <?php include('navbar.php'); ?>

    <div class="container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white">
                <h3 class="text-center">Data Absensi Materi <?php echo $materi; ?></h3>

                <center>
                    <a href="dataNama.php" class="btn btn-primary col-md-2 mt-3 mb-3">Kembali</a>
                </center>

            </div>
            <div class="card-body bg-white">
                <a href="dataNamaExport.php?nama=<?php echo $materi; ?>" class="btn btn-success mb-3">Export Data</a>
                <!-- start tabel data anggota -->
                <table class="table table-responsive-sm table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Mahasiswa</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Matakluliah</th>
                        </tr>
                    </thead>
                    <?php
                    include('koneksi.php');
                    $no = 0;
                    $data   = mysqli_query($koneksi, "SELECT * FROM data WHERE materi='$materi'");
                    while ($row = mysqli_fetch_array($data)) {
                        $no++;
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $no; ?></th>
                                <td><?php echo $row['tag']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['keterangan']; ?></td>
                                <td><?php echo $row['tanggal']; ?></td>
                                <td><?php echo $row['jam']; ?></td>
                                <td><?php echo $row['materi']; ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
                <!-- end tabel data anggota -->

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