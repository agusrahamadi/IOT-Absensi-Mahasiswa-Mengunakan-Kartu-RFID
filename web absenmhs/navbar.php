<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <h2><a class="navbar-brand" href="index.php">PRODI STMIK BJB</a></h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                 <li class="nav-item">
                    <a class="nav-link" href="index.php">Dashboard</a>
                </li>
                ' <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Master
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="anggota.php">Data Mahaswiwa</a>
                        <a class="dropdown-item" href="materi.php">Data Matakuliah</a>
                        <a class="dropdown-item" href="dosen.php">Data Dosen</a>
                         <a class="dropdown-item" href="tahun_akdm.php">Data Tahun Akedemik</a>
                    </div>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Transaksi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="jadwal.php">Data Jadwal MataKuliah</a>
                        <a class="dropdown-item" href="krs.php">Data KRS</a>
                        <a class="dropdown-item" href="dataMateri.php">Data & Laporan Absensi Matakuliah</a>
                    </div>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data RealTime
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="data.php">Data Absensi Mahasiswa</a>
                        <a class="dropdown-item" href="dataDosen.php">Data Absensi Dosen</a>
                    </div>
                </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Laporan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="dataExportMahasiswa.php">Laporan Master Mahasiswa</a>
                        <a class="dropdown-item" href="dataExportMatakuliah.php">Laporan Master Matakuliah</a>
                        <a class="dropdown-item" href="dataExportDosen.php">Laporan Master Dosen</a>
                        <a class="dropdown-item" href="dataExportJadwal.php">Laporan Transaksi Jadwal</a>
                       <a class="dropdown-item" href="dataExportKrs.php">Laporan Transaksi KRS</a>
                       <a class="dropdown-item" href="dataExport.php">Laporan Absensi RealTime Mahasiswa</a>
                       <a class="dropdown-item" href="dataDosenExport.php">Laporan Absensi RealTime Dosen</a>
                    </div>
                </li>
            </ul>
            <form action="logout.php" class="form-inline my-2 my-lg-0">
                <button class="btn btn-danger my-2 my-sm-0" type="submit">logout</button>
            </form>

        </div>
    </div>
</nav>
<br><br>