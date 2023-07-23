<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Riwayat</title>
    <link rel="icon" type="image/x-icon" href="https://rstriharsi.com/wp-content/uploads/2020/01/Logo-Ths-Png.png">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .text-title {
            font-family: 'Montserrat', sans-serif;
        }

        a .btn {
            background-color: #7895CB;
            font-size: 18px;
            padding: 10px 32px;
            transition: 0.2s;
            margin: 13px 0;
        }

        a .btn:hover {
            background-color: #001C30;
            color: #001C30;
            transition: 0.3s;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg px-3" style="background-color: #001C30;">
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

    <!-- tabel riwayat reservasi -->
    <div class="container">
        <br>
        <h1 class="text-title mt-5 pt-3">
            <center>RIWAYAT RESERVASI</center>
        </h1>
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

        <a href="create.php" class="btn-add"><button class="btn btn-add text-white">Tambah Data</button></a>
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
    <div class="modal fade" id="editDataModal" tabindex="-1" role="dialog" aria-labelledby="editDataModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDataModalLabel">Tambah Data Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input required type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input required type="number" class="form-control" id="harga">
                        </div>
                        <div class="form-group">
                            <label for="number">Stok</label>
                            <input required type="number" class="form-control" id="number">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>