<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Halaman Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.c
ss">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        body {
            padding-top: 16vh;
            background-color: #f1f4f6;
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            padding: 22px 0;
            /* position: fixed; */
            background-color: white;
            width: 100%;
            box-shadow: 0 0 10px rgb(217, 217, 217);
            font-family: 'Poppins', sans-serif;
        }

        .navbar .btn {
            background-color: #68b581;
            font-weight: 600;
            border-radius: 15px;
            padding: 16px 32px;
            transition: 0.2s;
        }

        .navbar-brand {
            font-weight: 800;
        }

        .navbar-link {
            padding: 40px 24px;
            text-decoration: none;
            color: inherit;

        }

        .navbar-link:hover {
            text-decoration: none;
            background-color: #68b581;
            color: white;
        }

        .login-form {
            max-width: 700px;
            margin: 0 auto;
            padding: 45px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-form p {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 600;
        }

        .form-control {
            padding: 13px 15px;
            border-radius: 15px;
        }

        .btn {
            background-color: #68b581;
            border: none;
            border-radius: 15px;
            font-size: 16px;
            font-weight: 600;
            transition: 0.3s ease;
            font-weight: 600;
            padding: 16px 32px;


        }

        .btn:hover {
            background-color: #375e46;
        }

        .copyright {
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand offset-1" href="./index.php">
            <img src="img/logo.png" alt="Logo" width="30" class="d-inline-block">
            Healthcare
        </a>
        <div class="collapse navbar-collapse offset-7" id="navbarNav">
            <div class="navbar-links">
                <a class="navbar-link active" href="./index.php">Home</a>
                <a href="login.php" id="login-link" onclick="signUp()"><button class="btn contact text-white">Login</button></a>
            </div>
        </div>
    </nav>
    <!-- halaman login -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="login-form">
                    <h2>Sign Up</h2>
                    <form action="proses_login.php" method="POST">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input required type="text" class="form-control" id="nama_lengkap"
                                placeholder="Masukan nama lengkap" name="nama_lengkap">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Hp</label>
                            <input required type="text" class="form-control" id="no_hp" placeholder="Masukan no hp"
                                name="no_hp">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input required type="email" class="form-control" id="email" placeholder="Masukan email"
                                name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input required type="password" class="form-control" id="password"
                                placeholder="masukan password" name="password">
                        </div>
                        <button type="submit" class="btn btn-block text-white">Sign Up</button>
                    </form>
                    <p class="register-info mt-3">have account? <a href="./login.php" class="register"
                            style="cursor: pointer;">Login</a></p>
                </div>
                <p class="copyright mt-5">&copy; 2023 Healthcare. All rights reserved.</p>
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