<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Health Care</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        .navbar {
            padding: 30px 0;
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

        .btn {
            background-color: #68b581;
            font-size: 24px;
            padding: 16px 32px;
            transition: 0.2s;
            margin: 13px 0;
        }
    </style>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <a class="navbar-brand offset-1" href="./index.php">
                <img src="img/logo.png" alt="Logo" width="30" class="d-inline-block align-text-top">
                Healthcare
            </a>

            <div class="navbar-links offset-7">
                <a class="navbar-link active" href="#home">Home</a>
                <a class="navbar-link" href="#reservasi">Reservasi</a>
                <a class="navbar-link" href="./history.php">History</a>
                <a href="./login.php" id="login-link"><button class="btn text-white">Login</button></a>
            </div>
        </nav>
        <!-- Card Produk -->
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/landing-page3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/landing-page3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/landing-page3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <br><br>
    <?php include('./create.php'); ?>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script>
        // JavaScript to handle smooth scrolling to the home section when "Home" link is clicked
        document.querySelector('a[href="#home"]').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('carouselExampleCaptions').scrollIntoView({ behavior: 'smooth' });
        });
        document.querySelector('a[href="#reservasi"]').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('reservasi').scrollIntoView({ behavior: 'smooth' });
        });
    </script>

</body>

</html>