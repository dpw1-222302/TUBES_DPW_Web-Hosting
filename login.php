<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <title>Login Healthcare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add custom CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        body {
            padding-top: 18vh;
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
            padding: 25px 15px;
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
                <a href="./register.php" id="login-link" onclick="signUp()"><button class="btn contact text-white">Sign
                        Up</button></a>
            </div>
        </div>
    </nav>
    <!-- halaman login -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="proses_login.php" method="POST">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                name="password">
                        </div>
                        <button type="submit" class="btn btn-block text-white">Login</button>
                    </form>
                    <p class="register-info mt-3">Don't have an account? <a href="./register.php" class="register"
                            style="cursor: pointer;">Sign Up</a></p>
                </div>
                <p class="copyright mt-5">&copy; 2023 Healthcare. All rights reserved.</p>
            </div>
        </div>
    </div>
    <script>
        var isLoggedIn = false;

        function login() {
            isLoggedIn = true;
            updateLoginStatus();
        }

        function updateLoginStatus() {
            var loginLink = document.getElementById('login-link');
            if (isLoggedIn) {
                loginLink.style.display = 'none';
            } else {
                loginLink.style.display = 'inline';
            }
        }
    </script>
    <!-- Add Bootstrap JS script link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>