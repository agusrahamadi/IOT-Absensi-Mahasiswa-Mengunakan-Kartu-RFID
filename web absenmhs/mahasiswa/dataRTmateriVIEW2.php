<!-- cek apakah sudah login -->
<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location: login.php?pesan=belum_login");
}
$email = $_SESSION['email'];
//Cek Sudah Terdaftar Apa Belum
include('koneksi.php');
$anggota   = mysqli_query($koneksi, "SELECT * FROM anggota WHERE email ='$email'");
$row = mysqli_fetch_array($anggota);
$nama = $row['nama'];
?>

<!doctype html>
<html lang="id">

<head>
    <?php include('desain.php'); ?>
    <?php
    $materi= $_GET['materi'];
    $tanggal= $_GET['tanggal'];

    ?>
</head>

<body class="bg-light">
    <?php include('navbar.php'); ?>

    <div class="container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white">
                 
               <h3 class="text-center">Data Absensi Anda</h3>

                <center><div class="btn-group mt-2 mb-2" role="group" aria-label="Basic example">
                   <!-- <a href="dataTanggal.php" class="btn btn-primary">Lihat Data Berdasarkan Tanggal</a>
                    <a href="dataMateri.php" class="btn btn-primary">Lihat Data Berdasarkan Matakuliah</a>
                    <a href="dataNama.php" class="btn btn-primary">Lihat Data Berdasarkan Nama</a> -->
                 <a href="#" class="btn btn-primary">---- DATA REALTIME ABSENSI ANDA MATAKULIAH (<?php echo $materi; ?>) PADA TANGGAL (<?php echo $tanggal; ?>) ----</a>
               </div></center>

            </div>
            <div class="card-body bg-white">
                
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
                            <th scope="col">Matakuliah</th>
                        </tr>
                    </thead>
                    <?php
                    include('koneksi.php');
                    $no = 0;
                    $data   = mysqli_query($koneksi, "SELECT * FROM data WHERE tanggal ='$tanggal' AND materi ='$materi' AND nama ='$nama' ");
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