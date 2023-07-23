<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Peserta</title>
    <link rel="icon" type="image/x-icon" href="https://rstriharsi.com/wp-content/uploads/2020/01/Logo-Ths-Png.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        h2 {
            font-family: 'Montserrat', sans-serif;
        }

        .d-grid {
            background-color: #7897d9;
        }

        .d-grid:hover {
            background-color: #1c2434;
            transition: 0.3s;
        }

        .btn {
            color: #1c2434;
        }

        .btn:hover {
            color: #7897d9;
            transition: 0.3s;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top px-3" style="background-color: #001C30;">
        <a class="navbar-brand img-fluid" href="./index.php">
            <img src="https://rstriharsi.com/wp-content/uploads/2020/01/Logo-Ths-Png.png" alt="Logo" width="50"
                class="d-inline-block align-text-top">
        </a>
        <h3 class="text-white">RS JAKARTA</h3>

        <div class="navbar-links ms-auto" style="color:white;">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link text-white" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./index.php#fasilitas">Fasilitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="create.php">Reservasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="history.php">History</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="py-5">
        <!-- form reservasi -->
        <div class="container py-5 px-4 bg-white rounded-3 my-5" id="reservasi">
            <?php
            //Include file koneksi, untuk koneksikan ke database
            include "koneksi.php";

            //Fungsi untuk mencegah inputan karakter yang tidak sesuai
            function input($data)
            {
                global $kon; // Tambahkan ini jika variabel koneksi diperlukan di dalam fungsi.
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                $data = mysqli_real_escape_string($kon, $data); // Gunakan ini untuk menghindari masalah kutip pada query SQL.
                return $data;
            }

            //Cek apakah ada kiriman form dari method post
            if ($_SERVER["REQUEST_METHOD"] === "POST") {

                $nama = input($_POST["nama"]);
                $alamat = input($_POST["alamat"]);
                $keluhan = input($_POST["keluhan"]);
                $no_hp = input($_POST["no_hp"]);
                $jadwal = input($_POST["jadwal"]);

                //Query input menginput data kedalam tabel anggota
                $sql = "insert into peserta (nama,alamat,keluhan,no_hp,jadwal) values
            ('$nama','$alamat','$keluhan','$no_hp','$jadwal')";

                //Mengeksekusi/menjalankan query diatas
                // $hasil = mysqli_query($kon, $sql);
            
                //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
                if ($kon->query($sql) === TRUE) {
                    header("Location: history.php");
                    exit;
                } else {
                    echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
                }
            }
            ?>
            <h2 class="pt-2 text-dark">
                <center>Reservasi</center>
            </h2>


            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <div class="form-group mb-3">
                    <label class="text-dark">Nama:</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />

                </div>
                <div class="form-group mb-3">
                    <label class="text-dark">Alamat:</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukan Nama Alamat" required />
                </div>
                <div class="form-group mb-3">
                    <label class="text-dark">Keluhan :</label>
                    <input type="text" name="keluhan" class="form-control" placeholder="Masukan Keluhan" required />
                </div>
                <div class="form-group mb-3">
                    <label class="text-dark">No HP:</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" required />
                </div>
                <div class="form-group mb-3">
                    <label class="text-dark">Jadwal:</label>
                    <input class="form-control" type="date" id="birthday" name="jadwal">
                </div>
                <div class="d-grid gap-2 rounded-3">
                    <button type="submit" name="submit" class="btn btn-block fs-4" style="">Submit</button>
                </div>
            </form>
        </div>
    </main>

    <!-- footer -->
    <footer style="background-color: #1c2434;">
        <div class="container text-center pt-5">
            <div class="row ">
                <div class="col-4">
                    <h4>Hubungi Kami</h4>
                    <ul class="footer-contact-info" style="text-align: left;">
                        <li>FAX: (123) 456-7890</li>
                        <li>Alamat: Jl. literally No. 123, Jakarta Selatan</li>
                        <li>Email: rsjakarta@gmail.com</li>
                    </ul>
                </div>
                <div class="col-4">
                    <h4>Tentang Kami</h4>
                    <p>Rumah Sakit Jakarta adalah rumah sakit modern yang berfokus pada pelayanan kesehatan berkualitas
                        untuk masyarakat. Tim medis kami terdiri dari profesional terbaik di bidangnya.</p>
                </div>
                <div class="col-4">
                    <h4>Kontak dan Kebijakan Privasi</h4>
                    <ul class="footer-links">
                        <li><a href="#" class="text-white">Kontak</a></li>
                        <li><a href="#" class="text-white">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row text-center">
                <p class="mt-5">&copy; 2023 Rumah sakit Jakarta. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>