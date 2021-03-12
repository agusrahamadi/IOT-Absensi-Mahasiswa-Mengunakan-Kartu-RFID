<!-- start tabel data anggota -->
<table class="table table-responsive-sm table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">ID Mahasddsfdsiswa</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jam</th>
            <th scope="col">Materi</th>
        </tr>
    </thead>
    <?php
    include('koneksi.php');
    $no = 0;
    $data   = mysqli_query($koneksi, "SELECT * FROM data");
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