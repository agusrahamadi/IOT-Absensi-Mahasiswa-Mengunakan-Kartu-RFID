<?php
date_default_timezone_set('Asia/Jakarta');
$materi = $_GET['materi'];
$filename = 'Data Matakuliah ' . $materi . '.xls';
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");

 include('koneksi.php');

    $no = $_GET['no'];
    $jadwal    = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE materi ='$materi'");
    $row        = mysqli_fetch_array($jadwal);
    $hari       = $row['hari'];
    $jam        = $row['jam'];
    $menit      = $row['menit'];
    $jam2        = $row['jam2'];
    $menit2      = $row['menit2'];
    $materi     = $row['materi'];
    $dosen      = $row['dosen'];
     $kode      = $row['kode'];
    $programstudi        = $row['programstudi'];     
   $ruang             = $row['ruang'];
  $kelas2              = $row['kelas2'];
 $semester             = $row['semester'];  
$tahunakedemik         = $row['tahunakedemik'];
$sks         = $row['sks'];

?>

<html>

<body>
    <div id="table-container">
        
        <table id="tab">
            <thead>
              
                 <tr align="center"> SEKOLAH TINGGI MANAJEMEN INFORMATIKA & KOMPUTER (STMIK) BANJARBARU</tr> 
                 <tr align="center"> STMIK BANJARBARU</tr> 
                 <tr align="center" > ABSENSI MAHASISWA</tr> 
                 
                  <tr>  
                            <th></th>
                            <th>KODE MATAKULIAH</th>
                            <th scope="col">: </th>
                            <th scope="col"><?php echo $kode; ?></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">DOSEN PENGAMPUN </th>
                            <th scope="col">:</th>
                            <th scope="col"><?php echo $dosen; ?></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                 </tr> 
                 <tr>  
                            <th></th>
                            <th>MATA KULIAH</th>
                            <th scope="col">: </th>
                            <th scope="col"><?php echo $materi; ?></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">KELAS </th>
                            <th scope="col">:</th>
                            <th scope="col"><?php echo $kelas2; ?></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                 </tr> 
                  <tr> <br> </tr>
                  <tr> <br> </tr> 
                   <tr>  
                            <th></th>
                            <th>PROGRAM STUDI</th>
                            <th scope="col">: </th>
                            <th scope="col"><?php echo $programstudi; ?></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">RUANG</th>
                            <th scope="col">:</th>
                            <th scope="col"><?php echo $ruang; ?></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                 </tr> 
                 
                 <tr>  
                            <th></th>
                            <th>SEMESTER </th>
                            <th scope="col">: </th>
                            <th scope="col"><?php echo $semester; ?></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">SKS</th>
                            <th scope="col">:</th>
                            <th scope="col"><?php echo $sks; ?></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                 </tr> 
                 
                 
                 <tr>  
                            <th></th>
                            <th>TAHUN AKEDEMIK </th>
                            <th scope="col">: </th>
                            <th scope="col"><?php echo $tahunakedemik; ?></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                 </tr>
                 
                 
                 <tr> <br> </tr> 
                 
                <tr> 
                            <th width="5%">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">1</th>
                            <th scope="col">2</th>
                            <th scope="col">3</th>
                            <th scope="col">4</th>
                            <th scope="col">5</th>
                            <th scope="col">6</th>
                            <th scope="col">7</th>
                            <th scope="col">8</th>
                            <th scope="col">9</th>
                            <th scope="col">10</th>
                            <th scope="col">11</th>
                            <th scope="col">12</th>
                            <th scope="col">13</th>
                            <th scope="col">14</th>
                            <th scope="col">15</th>
                </tr>
            </thead>
            <tbody> 
                <?php
                include('koneksi.php');
                 $qdatagrid ="  SELECT 
                           krs.tag, krs.dosen, krs.materi, krs.a, krs.b, krs.c, krs.d, krs.e, krs.f, krs.g, krs.h, krs.i, krs.j, krs.k, krs.l, krs.m, krs.n, krs.o ,
						    anggota.tag, anggota.nim, anggota.nama
						    
                            FROM 
                                krs
                                    
                                    JOIN anggota ON krs.tag = anggota.tag
                                WHERE krs.materi ='$materi'    
                                    ";
                $data = mysqli_query($koneksi,$qdatagrid);
                $no = 1;
                while ($row = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['a']; ?></td>
                        <td><?php echo $row['b']; ?></td>
                        <td><?php echo $row['c']; ?></td>
                        <td><?php echo $row['d']; ?></td>
                        <td><?php echo $row['e']; ?></td>
                        <td><?php echo $row['f']; ?></td>
                        <td><?php echo $row['g']; ?></td>
                        <td><?php echo $row['h']; ?></td>
                        <td><?php echo $row['i']; ?></td>
                        <td><?php echo $row['j']; ?></td>
                        <td><?php echo $row['k']; ?></td>
                        <td><?php echo $row['l']; ?></td>
                        <td><?php echo $row['m']; ?></td>
                        <td><?php echo $row['n']; ?></td>
                        <td><?php echo $row['o']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>