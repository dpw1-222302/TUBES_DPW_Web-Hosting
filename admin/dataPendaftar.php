<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<title>Daftar Reservasi</title>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <h1>Logo</h1>
        </a>
        <div class="collapse navbar-collapse offset-9" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="history.php">Reservasi</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <br>
        <h4>
            <center>DAFTAR RESERVASI PERAWATAN</center>
        </h4>
        <?php

        include "../koneksi.php";

        //Cek apakah ada kiriman form dari method post
        if (isset($_GET['id_peserta'])) {
            $id_peserta = htmlspecialchars($_GET["id_peserta"]);

            $sql = "delete from peserta where id_peserta='$id_peserta' ";
            $hasil = mysqli_query($kon, $sql);

            //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
            }
        }
        ?>


        <tr class="table-danger">
            <br>
            <thead>
                <tr>
                    <table class="my-3 table table-bordered">
                        <tr class="table-primary">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Sekolah</th>
                            <th>Jurusan</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th colspan='2'>Aksi</th>

                        </tr>
            </thead>

            <?php
            include "../koneksi.php";
            $sql = "select * from peserta order by id_peserta desc";

            $hasil = mysqli_query($kon, $sql);
            $no = 0;
            while ($data = mysqli_fetch_array($hasil)) {
                $no++;

            ?>
                <tbody>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data["nama"]; ?></td>
                        <td><?php echo $data["sekolah"];   ?></td>
                        <td><?php echo $data["jurusan"];   ?></td>
                        <td><?php echo $data["no_hp"];   ?></td>
                        <td><?php echo $data["alamat"];   ?></td>
                        <td>
                            <a href="update.php?id_peserta=<?php echo htmlspecialchars($data['id_peserta']); ?>" class="btn btn-warning" role="button">Update</a>
                            <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id_peserta=<?php echo $data['id_peserta']; ?>" class="btn btn-danger" role="button">Delete</a>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
            </table>
            <a href="../create.php" class="btn btn-primary" role="button">Tambah Data</a>
    </div>
</body>

</html>