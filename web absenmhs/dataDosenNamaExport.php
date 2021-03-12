<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal = $_GET['tanggal'];
$filename = 'Data Absensi Dosen ' . $nama . '.xls';
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
?>

<html>

<body>
    <div id="table-container">
        <table id="tab">
            <thead>
                <tr>
                <tr>
                    <th width="5%">No</th>
                    <th width="20%">ID Dosen</th>
                    <th width="30%">Nama</th>
                    <th width="30%">Keterangan</th>
                    <th width="25%">Tanggal</th>
                    <th width="20%">Jam</th>
                    <th scope="col">Materi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('koneksi.php');
                $data = mysqli_query($koneksi, "SELECT * FROM datadosen WHERE nama='$nama'");
                $no = 1;
                while ($row = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
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