
<!-- start tabel data anggota -->
<table class="table table-responsive-sm table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Id Mahasiswa</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jam</th>
            <th scope="col">Materi</th>
        </tr>
    </thead>
    <?php
    include('koneksi.php');
    session_start();
if ($_SESSION['status'] != "login") {
    header("location: login.php?pesan=belum_login");
}
    $email = $_SESSION['email'];
    $anggota   = mysqli_query($koneksi, "SELECT* FROM dosen WHERE email ='$email'");
    $row = mysqli_fetch_array($anggota);
    $nama = $row['nama'];
    
    $jadwal  = mysqli_query($koneksi, "SELECT*  FROM jadwal WHERE dosen = '$nama'");
    $rowj = mysqli_fetch_array($jadwal);
    $dosen = $rowj['dosen'];
   

    $tanggal = date('d-m-Y');
    $no = 0;
    $data   = mysqli_query($koneksi, "SELECT * FROM data WHERE tanggal ='$tanggal' AND dosen= '$dosen'");
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