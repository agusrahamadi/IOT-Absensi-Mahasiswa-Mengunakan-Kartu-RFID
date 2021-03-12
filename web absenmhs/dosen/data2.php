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
                <h3 class="text-center">Data Absensi Dosen "<?php echo $nama; ?>" </h3>


            </div>
            <div class="card-body bg-white">
                <a href="dataExport.php" class="btn btn-success mb-3">Export Data</a>
                <div id="dataTabel"></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#dataIndex").load('dataIndex.php')
            }, 200);
        });
    </script>

</body>

</html>