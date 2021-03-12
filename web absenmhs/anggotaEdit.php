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

    $no = $_GET['no'];
    $anggota    = mysqli_query($koneksi, "SELECT * FROM anggota WHERE no ='$no'");
    $row        = mysqli_fetch_array($anggota);
    $nama       = $row['nama'];
    $nim        = $row['nim'];
    $jurusan    = $row['jurusan'];
    $kelas      = $row['kelas'];
    $email      = $row['email'];
    $password      = $row['password'];
    ?>
</head>

<body class="bg-light">
    <?php include('navbar.php'); ?>

    <div class="container col-md-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white">
                <h3 class="text-center">Edit Data Mahasiswa</h3>
            </div>
            <div class="card-body bg-white">

                <!-- start form tambah anggota -->
                <form class="" action="anggotaEditProses.php" method="POST">
                    <div class="form-group">
                        <div id="tag"></div>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="number" name="no" value="<?php echo $row['no']; ?>" hidden>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" placeholder="Isi Nama Lengkap...">
                    </div>
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" class="form-control" name="nim" value="<?php echo $nim; ?>" placeholder="Isi NIM...">
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" value="<?php echo $jurusan; ?>" placeholder="Isi Jurusan...">
                    </div>
                    <div class="form-group">
                        <label>Tahun Angkatan</label>
                        <input type="text" class="form-control" name="kelas" value="<?php echo $kelas; ?>" placeholder="Isi Tahun Angkatan...">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Isi Email...">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Isi Password...">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <!-- end form tambah anggota -->

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#tag").load('anggotaTagEdit.php?no=<?php echo $no; ?>')
            }, 200);
        });
    </script>

</body>

</html>