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
                <h3 class="text-center">Tambah KRS</h3>
            </div>
            <div class="card-body bg-white">

                <!-- start form tambah anggota -->
                <form class="" action="tambahKrsProses.php" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Materi</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="kode">
                            <?php
                            include('koneksi.php');
                            $jadwal = mysqli_query($koneksi, "SELECT * FROM jadwal");
                            while ($row = mysqli_fetch_array($jadwal)) {
                            ?>
                                <option value="<?php echo $row['kode']; ?>"><?php echo $row['materi']; ?> - Dosen: <?php echo $row['dosen']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- end form tambah anggota -->

            </div>
        </div>
    </div>

</body>

</html>