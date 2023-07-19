<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Halaman Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.c
ss">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <h1>Logo</h1>
        </a>
        <div class="collapse navbar-collapse offset-9" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="history.php">History</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Login Form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                    <h1 style="text-align: center; font-weight: 700; font-size: 32px;">SIGN UP</h1>
                        <form action="prosesRegister.php" method="POST">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input required type="text" class="form-control" id="nama_lengkap" placeholder="Masukan nama lengkap" name="nama_lengkap">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No Hp</label>
                                <input required type="text" class="form-control" id="no_hp" placeholder="Masukan no hp" name="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input required type="email" class="form-control" id="email" placeholder="Masukan email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input required type="password" class="form-control" id="password" placeholder="masukan password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.mi
n.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>