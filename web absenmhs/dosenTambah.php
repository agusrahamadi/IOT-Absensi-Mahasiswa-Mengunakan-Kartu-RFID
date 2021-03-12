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
    include('koneksi.php');
    mysqli_query($koneksi, "DELETE FROM anggotatag");
    ?>
</head>

<body class="bg-light">
    <?php include('navbar.php'); ?>

    <div class="container col-md-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white">
                <h3 class="text-center">Tambah Data Dosen</h3>
            </div>
            <div class="card-body bg-white">

                <!-- start form tambah anggota -->
                <form class="" action="dosenTambahProses.php" method="POST">
                    <div class="form-group">
                        <div id="tag"></div>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" maxlength="50"  placeholder="Isi Nama Lengkap...">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control" name="nip" maxlength="16"  placeholder="Isi NIP...">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" maxlength="50"  placeholder="Isi Email...">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" maxlength="50"  placeholder="Isi Password...">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- end form tambah anggota -->

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#tag").load('dosenTag.php')
            }, 200);
        });
    </script>

</body>

</html>