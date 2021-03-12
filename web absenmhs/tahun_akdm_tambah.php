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

    <div class="container col-md-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white">
                <h3 class="text-center">Tambah Data Tahun Akademik</h3>
            </div>
            <div class="card-body bg-white">

                <!-- start form tambah anggota -->
                <form class="" action="tahun_akdm_tambahproses.php" method="POST">
                    <div class="form-group">
                        <label>Tahun Akademik</label>
                        <input type="text" class="form-control" name="tahun" placeholder="Isi Tahun Akademik...">
                   </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- end form tambah anggota -->

            </div>
        </div>
    </div>

   

</body>

</html>