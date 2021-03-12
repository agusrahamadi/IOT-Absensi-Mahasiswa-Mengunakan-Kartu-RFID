<!DOCTYPE html>
<?php 
ob_start();
$materi = $_GET['materi'];

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
<page>
		<style type="text/css">
		table#barang{
			border: 2px solid darkgrey;
		}
		th{
			border-bottom: 2px solid darkgrey;
		}
		td.table-td{
			border-bottom: 2px solid darkgrey;
			border-right: 0.5px solid darkgrey;
		}
		</style>
		
		<table border="0" align="center" style="font-size: 16px; border-collapse: collapse; width: 100%;">
			<tr>
		     	<td width="0" rowspan="4"><img src="../2.png" width="70" height="70"/></td>
				<td style="font-size: 12px; width: 90%;" align="center;"><b>SEKOLAH TINGGI MANAJEMEN INFORMATIKA & KOMPUTER (STMIK) BANJARBARU</b></td>
			
				</tr>
		<tr><td style="font-size: 12px; width: 90%;" align="center;"><b> STMIK BANJARBARU</b></td></tr>
			
			<tr><td style="font-size: 12px; width: 90%;" align="center;"><b> ABSENSI MAHASISWA</b></td></tr>
			</table>
		<hr>
		<br><br>
			<table border="0"   style="font-size:10px; cellspacing="3" cellpadding="3">
		
				<tr>
				<td width="100">KODE MATAKULIAH</td>
				<td width="400">: <?php echo $kode; ?></td>
				<td width="100">DOSEN PENGAMPU</td>
				<td width="200">  : <?php echo $dosen; ?></td>
			</tr>
				<tr>
				<td width="100">MATAKULIAH</td>
				<td width="400">: <?php echo $materi; ?></td>
				<td width="100">KELAS </td>
				<td width="200"> : <?php echo $kelas2; ?></td>
			</tr>
				<tr>
				<td width="100">POGRAM STUDI</td>
				<td width="400">: <?php echo $programstudi; ?></td>
				<td width="100">RUANG</td>
				<td width="200">  : <?php echo $ruang; ?></td>
			</tr>
				<tr>
				<td width="100">SEMESTER</td>
				<td width="400">: <?php echo $semester; ?></td>
				<td width="100"> SKS </td>
				<td width="200">  : <?php echo $sks; ?> </td>
			</tr>
				<tr>
				<td width="100">TAHUN AKEDEMIK</td>
				<td width="400">: <?php echo $tahunakedemik; ?></td>
				<td width="100">JAM</td>
				<td width="200">: <?php echo $row['jam'] . ":" . $row['menit'] . " - " . $row['jam2'] . ":" . $row['menit2']; ?>  </td>
			</tr>
			
			
		</table>
			<br>


		
		<table border="0"   style="font-size:10px; cellspacing="3" cellpadding="3">
		
			<tr>
				<td width="330"></td>
				<td width="270">Tanggal</td>
				<td width="300"></td>
			</tr>
			
		</table>
		<table  border="1" align="center" style="font-size: 10px; border-collapse: collapse; width: 100%;">
			<thead>
			<tr>
			<td align="center">&nbsp;No&nbsp;</td>
			<td align="center"> &nbsp; NIM &nbsp;</td>
			<td align="center"> &nbsp; NAMA &nbsp;</td>
			<td align="center"> &nbsp; 1 &nbsp;</td>
			<td align="center"> &nbsp; 2 &nbsp;</td>
			<td align="center"> &nbsp; 3 &nbsp;</td>
			<td align="center"> &nbsp; 4 &nbsp;</td>
			<td align="center"> &nbsp; 5 &nbsp;</td>
			<td align="center"> &nbsp; 6 &nbsp;</td>
			<td align="center"> &nbsp; 7 &nbsp;</td>
			<td align="center"> &nbsp; 8 &nbsp;</td>
			<td align="center"> &nbsp; 9 &nbsp;</td> 
			<td align="center"> &nbsp; 10 &nbsp;</td>
			<td align="center"> &nbsp; 11 &nbsp;</td>
			<td align="center"> &nbsp; 12 &nbsp;</td>
			<td align="center"> &nbsp; 13 &nbsp;</td>
			<td align="center"> &nbsp; 14 &nbsp;</td>
			<td align="center"> &nbsp; 15 &nbsp;</td>
			</tr>
				<tr>
			<td align="center">&nbsp;&nbsp;</td>
			<td align="center"> &nbsp;  &nbsp;</td>
			<td align="center"> &nbsp;  &nbsp;</td>
			<?php
                include('koneksi.php');
                 $qdatagrid =" SELECT DISTINCT tanggal FROM data  WHERE dosen ='$dosen' AND materi ='$materi' ";
                $data = mysqli_query($koneksi,$qdatagrid);
                while ($row1 = mysqli_fetch_array($data)) {
                    $tanggal = ($row1['tanggal']);  
                ?>

			<td style="font-size: 5px;" align="center"> &nbsp; <?php echo $tanggal; ?> &nbsp;</td>
				<?php
                }
                ?>

			</tr>
			</thead>
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
			<tbody>
<tr>
<td align="center">&nbsp;<?php echo $no++; ?>&nbsp;</td>
<td style="width:70px;" align="center">&nbsp;<?php echo $row['nim']; ?>&nbsp;</td>
<td style="width:130px;" >&nbsp;<?php echo $row['nama']; ?>&nbsp;</td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['a']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['b']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['c']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['d']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['e']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['f']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['g']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['h']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['i']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['j']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['k']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['l']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['m']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['n']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row['o']; ?></td>

                       
</tr>
</tbody>
<?php
                }
                ?>
		<?php
                include('koneksi.php');
                 $qdatagrid ="  SELECT * FROM jadwal
                                WHERE dosen ='$dosen' AND materi ='$materi'   
                                    ";
                $data = mysqli_query($koneksi,$qdatagrid);
                while ($row1 = mysqli_fetch_array($data)) {
                ?>
			<tr>
			<td align="center">&nbsp;&nbsp;</td>
			<td align="center"> &nbsp;  &nbsp;</td>
			<td align="right"> &nbsp; Paraf Dosen &nbsp;</td>
			
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['a']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['b']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['c']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['d']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['e']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['f']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['g']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['h']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['i']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['j']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['k']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['l']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['m']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['n']; ?></td>
<td style="width:20px;"align="center" >&nbsp;<?php echo $row1['o']; ?></td>
			</tr>
<?php
                }
                ?>

		</table>
       
		
<p></p>
	
			<table border="0"   style="font-size:10px; cellspacing="3" cellpadding="3">
			
				<tr>
				<td width="100">Keterangan :</td>
				<td width="400"></td>
				<td width="100"></td>
				<td width="200"></td>
			</tr>
				<tr>
				<td width="100">H = Hadir</td>
				<td width="400"></td>
				<td width="100"></td>
				<td width="200"></td>
			</tr>
				<tr>
				<td width="100">A = Tidak Hadir</td>
				<td width="400"></td>
				<td width="100"></td>
				<td width="200"></td>
			</tr>
		
			
		</table>
			<br>

		

</page>
<?php
    $content = ob_get_clean();

// conversion HTML => PDF
require_once(dirname(__FILE__).'../../html2pdf/html2pdf.class.php');
 try
 {
 $html2pdf = new HTML2PDF('L','A5', 'fr', false, 'ISO-8859-15');
 $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 ob_end_clean();
 $html2pdf->Output();
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>
</html>