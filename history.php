<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Riwayat Sakit</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        body {
            padding-top: 150px;
        }

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

        .active {
            background-color: #68b581;
            color: white;
        }

        .btn-add {
            background-color: #68b581;
            border-radius: 15px;
            padding: 12px 28px;
            font-weight: 600;
            transition: 0.2s;
            text-align: center;
            
        }
        
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand offset-1" href="./index.php">
            <img src="img/logo.png" alt="Logo" width="30" class="d-inline-block align-text-top">
            Healthcare
        </a>

        <div class="navbar-links offset-7">
            <a class="navbar-link" href="#home">Home</a>
            <a class="navbar-link" href="#reservasi">Reservasi</a>
            <a class="navbar-link active" href="./history.php">History</a>
        </div>
    </nav>
    <div class="container">
        <br>
        <h4>
            <center>RIWAYAT RESERVASI</center>
        </h4>
        <?php

        include "koneksi.php";

        //Cek apakah ada kiriman form dari method post
        if (isset($_GET['id_peserta'])) {
            $id_peserta = htmlspecialchars($_GET["id_peserta"]);

            $sql = "delete from peserta where id_peserta='$id_peserta' ";
            $hasil = mysqli_query($kon, $sql);

            //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:history.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
            }
        }
        ?>

        <a href="create.php"><button class="btn btn-add text-white">Tambah Data</button></a>
        <tr class="table-danger">
            <br>
            <thead>
                <tr>
                    <table class="my-3 table table-bordered">
                        <tr class="table-primary text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Keluhan</th>
                            <th>No Hp</th>
                            <th>Jadwal</th>
                            <th colspan='1'>Aksi</th>
                        </tr>
            </thead>

            <?php
            include "koneksi.php";
            $sql = "select * from peserta order by id_peserta desc";

            $hasil = mysqli_query($kon, $sql);
            $no = 0;
            while ($data = mysqli_fetch_array($hasil)) {
                $no++;

                ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php echo $data["nama"]; ?>
                        </td>
                        <td>
                            <?php echo $data["alamat"]; ?>
                        </td>
                        <td>
                            <?php echo $data["keluhan"]; ?>
                        </td>
                        <td>
                            <?php echo $data["no_hp"]; ?>
                        </td>
                        <td>
                            <?php echo $data["jadwal"]; ?>
                        </td>
                        <td>
                            <a href="update.php?id_peserta=<?php echo htmlspecialchars($data['id_peserta']); ?>"
                                class="btn btn-warning my-2" role="button">Update</a>
                        </td>
                    </tr>
                </tbody>
                <?php
            }
            ?>
            </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>