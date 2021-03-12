<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('desain.php'); ?>

</head>

<body class="bg-light">
    <div class="jumbotron text-white  bg-dark "> 
        <div class="container">
            <center><img src="2.png" width="200 px"></center>	
            <h1 class="display-5">Selamat Datang! </h1> 
            <h2 class="display-5">di APLIKASI ABSENSI MAHASISWA STMIK BANJARBARU </h2>
            <p class="lead">Silakan <b>Login</b> sesuai dengan status Anda di Kampus STMIK BANJARBARU.</p>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-sm">
                <div class="card border-0 shadow-sm p-md-2 mt-3 mb-5">
                    <div class="card-header bg-white mb-5">
                        <h1 class="h4 text-gray-900 mb-4 text-center">Login Admin</h1>
                        <form method="POST" action="login_proses.php" class="user">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <button class="btn btn-primary btn-block">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card border-0 shadow-sm p-md-2 mt-3 ">
                    <div class="card-header bg-white mb-5">
                        <h1 class="h4 text-gray-900 mb-4 text-center">Login Dosen</h1>
                        <form method="POST" action="login_dosen_proses.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <button class="btn btn-primary btn-block">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card border-0 shadow-sm p-md-2 mt-3 ">
                    <div class="card-header bg-white mb-5">
                        <h1 class="h4 text-gray-900 mb-4 text-center">Login Mahasiswa</h1>
                        <form method="POST" action="login_mahasiswa_proses.php">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <button class="btn btn-primary btn-block">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>