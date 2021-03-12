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

    <div class="container col-md-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white">
                <h3 class="text-center">Tambah Data Jadwal</h3>
            </div>
            <div class="card-body bg-white">

                <!-- start form tambah anggota -->
                <form class="" action="jadwalTambahProses.php" method="POST">
                        <label for="exampleFormControlSelect1">Hari</label>
                    <div class="form-group" >
                      <select class="form-control"  name="hari">
                        <label>Hari</label>
                            <option value=""> Pilih Hari </option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Waktu</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="jam" placeholder="Jam">
                            </div>:
                            <div class="col">
                                <input type="text" class="form-control" name="menit" placeholder="Menit">
                            </div> - 
                            <div class="col">
                                <input type="text" class="form-control" name="jam2" placeholder="Jam">
                            </div>:
                            <div class="col">
                                <input type="text" class="form-control" name="menit2" placeholder="Menit">
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Matakuliah</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="materi">
                            <option value=""> Pilih Matakuliah </option>
                            <?php
                            include('koneksi.php');
                            $jadwal = mysqli_query($koneksi, "SELECT * FROM materi");
                            while ($row = mysqli_fetch_array($jadwal)) {
                            ?>
                            
                                <option value="<?php echo $row['materi']; ?>"> <?php echo $row['materi']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Dosen</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="dosen">
                            <option value=""> Pilih Dosen </option>
                            <?php
                            include('koneksi.php');
                            $jadwal = mysqli_query($koneksi, "SELECT * FROM dosen");
                            while ($row = mysqli_fetch_array($jadwal)) {
                            ?>
                            
                                <option value="<?php echo $row['nama']; ?>"> <?php echo $row['nama']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group" >
                        <label for="exampleFormControlSelect1">Pogram Studi</label>
                      <select class="form-control"  name="programstudi">
                        <label>Pogram Studi</label>
                            <option value=""> Pilih Pogram Studi </option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                    </div>
                    
                     <div class="form-group">
                        <label>Ruang</label>
                        <input type="text" class="form-control" name="ruang"  readonly="" value="S201" >
                   </div>
                   
                      <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" class="form-control" name="kelas2"  maxlength="3" placeholder="Isi Kelas...">
                   </div>
                   
                     <div class="form-group">
                        <label>SKS</label>
                        <input type="text" class="form-control" name="sks"  maxlength="1" placeholder="Isi sks...">
                   </div>
                   
                   
                   
                   
                  <label for="exampleFormControlSelect1">Semester</label>
                   <div class="form-group" >
                      <select class="form-control"  name="semester">
                        <label>Semester</label>
                            <option value=""> Pilih Semester </option>
                            <option value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
                            
                        </select>
                    </div>
                   
                   
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tahun Akedemik</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="tahunakedemik">
                            <option value=""> Pilih Tahun Akedemik </option>
                            <?php
                            include('koneksi.php');
                            $jadwal = mysqli_query($koneksi, "SELECT * FROM tahun_akdm");
                            while ($row = mysqli_fetch_array($jadwal)) {
                            ?>
                            
                                <option value="<?php echo $row['tahun']; ?>"> <?php echo $row['tahun']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                  
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- end form tambah anggota -->

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#tag").load('anggotaTag.php')
            }, 200);
        });
    </script>

</body>

</html>