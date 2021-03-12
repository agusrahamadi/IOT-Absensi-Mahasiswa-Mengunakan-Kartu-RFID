
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
       <div class="card border-0 shadow-sm mt-3">
    <div class="card-header bg-white">
        <h3 class="text-center">Data KRS</h3>
    </div>
    <div class="card-body bg-white">
        
            <a href="tambahKrs.php" class="btn btn-success">Tambah KRS</a>
        <br> <br>
        
        <?php
  if (isset($_POST['submit'])) {
   $search = $_POST['txtsearch'];
   $kategoriobat = $_POST['kategori_obat'];
   
   $sql = "SELECT * FROM obat WHERE $kategoriobat LIKE '%$search%'";
   $result = mysql_query($sql) or die('Error, list obat failed. ' . mysql_error());
    
   if (mysql_num_rows($result) == 0) {
    echo '<p></p><p>Pencarian tidak ditemukan</p>';
   } else {
    echo '<p></p>';
    while ($row = mysql_fetch_array($result)) {
     extract($row);
      
     echo '<p>Nama Obat: '.$nama_obat.'</p>';
     echo '<p>Produk: '.$produk.'</p>';
     echo '<p>Indikasi: '.$indikasi.'</p>';
     echo '<p>Golongan Obat: '.$golongan_obat.'</p>';
     echo '<p></p>';
    }
   }
  }
?>

        <form action="krs_cari.php" method="get">
	<label>Tampilkan Berdasarkan  :</label>
	<select name="kategori_cari">
	    <option value=""> Pilih Kategori</option>
 <option value="nim">NIM</option>
 <option value="nama">Nama</option>
 <option value="materi">MataKuliah</option>
 <option value="dosen">Dosen</option>
 <option value="sks">SKS</option>
 <option value="semester">Semester</option>
 <option value="tahunakedemik">Tahun Akedemik</option>
</select>
	
	<input type="text" name="cari">
	<input type="submit"class="btn btn-primary"  value="Tampilkan">
</form>

       <br> 
        <!-- start tabel data anggota -->
        <table class="table table-responsive-sm table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                     <th scope="col">Nama Lengkap</th>
                    <th scope="col">Matakuliah</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Waktu</th>
                     <th scope="col">SKS</th>
                     <th scope="col">Semester</th>
                     <th scope="col">Tahun Akedemik</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <?php
            include('koneksi.php');
            $no = 0;
            
             $qdatagrid ="  SELECT 
                           krs.no, krs.kode, krs.tag,  krs.dosen, krs.materi,
						   anggota.tag, anggota.nama, anggota.nim,
						   jadwal.kode, jadwal.sks, jadwal.semester, jadwal.tahunakedemik
                            FROM 
                                krs
                                    JOIN anggota ON krs.tag = anggota.tag
                                    JOIN jadwal ON krs.kode = jadwal.kode";
                                    
            $anggota   = mysqli_query($koneksi, $qdatagrid);
            while ($row = mysqli_fetch_array($anggota)) {
                $kode   = $row['kode'];
                $jadwal = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE kode='$kode'");
                $row2 = mysqli_fetch_array($jadwal);
                $no++;
            ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                         <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['materi']; ?></td>
                        <td><?php echo $row['dosen']; ?></td>
                        <td><?php echo $row2['jam'] . ":" . $row2['menit'] . " - " . $row2['jam2'] . ":" . $row2['menit2']; ?></td>
                        
                        <td><?php echo $row['sks']; ?></td>
                        <td><?php echo $row['semester']; ?></td>
                        <td><?php echo $row['tahunakedemik']; ?></td>
                         <td>
                                   
                                    <a href="krshapus.php?no=<?php echo $row['no']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
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

