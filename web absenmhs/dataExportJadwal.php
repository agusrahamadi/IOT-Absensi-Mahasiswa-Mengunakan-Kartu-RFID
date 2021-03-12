<?php
date_default_timezone_set('Asia/Jakarta');
$jam = date('H-i-s');
$filename = 'Data Jadwal ' . $tanggal . " " . $jam . '.xls';
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
?>
<html>

<body>
    <div id="table-container">
        <table id="tab">
            <thead>
                <tr>
                    
                    <th width="5%">No</th>
                    <th width="20%">Kode</th>
                    <th width="30%">Hari</th>
                    <th width="30%">Waktu</th>
                    <th width="25%">Matakuliah</th>
                    <th width="20%">Dosen</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('koneksi.php');
                $data = mysqli_query($koneksi, "SELECT * FROM jadwal");
                $no = 1;
                while ($row = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['kode']; ?></td>
                        <td><?php echo $row['hari']; ?></td>
                        <td><?php echo $row['jam'] . ":" . $row['menit'] . " - " . $row['jam2'] . ":" . $row['menit2']; ?></td>
                        <td><?php echo $row['materi']; ?></td>
                        <td><?php echo $row['dosen']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>