<?php
date_default_timezone_set('Asia/Jakarta');
$jam = date('H-i-s');
$filename = 'Data Absensi Dosen ' . $tanggal . " " . $jam . '.xls';
$nama= $_GET['nama'];
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
?>
<html>

<body>
    <div id="table-container">
        <table id="tab">
            <thead>
                <tr>
                  <th scope="col">No</th>
            <th scope="col">ID Dosen</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jam</th>
            <th scope="col">Materi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('koneksi.php');
                $data = mysqli_query($koneksi, "SELECT * FROM datadosen WHERE nama = '$nama'");
                $no = 1;
                while ($row = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                         <th scope="row"><?php echo $no; ?></th>
                <td><?php echo $row['tag']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['keterangan']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['jam']; ?></td>
                <td><?php echo $row['materi']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>