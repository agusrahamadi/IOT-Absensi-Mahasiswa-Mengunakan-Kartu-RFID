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
                <h3 class="text-center">Data Mahasiswa</h3>
            </div>
            <div class="card-body bg-white">
                <a href="anggotaTambah.php"  class="btn btn-success">Tambah Data Mahasiswa</a>
                <br><br>

                <!-- start tabel data anggota -->
                <table class="table table-responsive-sm table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Mahasiswa</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Tahun Angkatan</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <?php
                    include('koneksi.php');
                    $no = 0;
                    $anggota   = mysqli_query($koneksi, "SELECT * FROM anggota");
                    while ($row = mysqli_fetch_array($anggota)) {
                        $no++;
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $no; ?></th>
                                <td><?php echo $row['tag']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['nim']; ?></td>
                                <td><?php echo $row['jurusan']; ?></td>
                                <td><?php echo $row['kelas']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td>
                                    <a href="anggotaEdit.php?no=<?php echo $row['no']; ?>" class="btn btn-primary btn-sm"> Edit </a>
                                    <a href="anggotaHapus.php?no=<?php echo $row['no']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
                <!-- end tabel data anggota -->

            </div>
        </div>
    </div>

</body>

</html>