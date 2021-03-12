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
        
 <h2><a class="navbar-brand" href="index.php">APLIKASI ABSENSI MAHASISWA STMIK BANJARBARU</a></h2>
        <div id="dataIndex"></div>
    </div>

    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#dataIndex").load('dataIndex.php')
            }, 200);
        });
    </script>

</body>

</html>