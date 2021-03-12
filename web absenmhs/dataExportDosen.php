<?php
date_default_timezone_set('Asia/Jakarta');
$jam = date('H-i-s');
$filename = 'Data Dosen ' . $tanggal . " " . $jam . '.xls';
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
                    <th width="20%">ID Dosen</th>
                    <th width="30%">Nama</th>
                    <th width="30%">Nip</th>
                    <th width="25%">Email</th>
                    <th width="20%">Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('koneksi.php');
                $data = mysqli_query($koneksi, "SELECT * FROM dosen");
                $no = 1;
                while ($row = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['tag']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['nip']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>