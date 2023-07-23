<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<title>Daftar Reservasi</title>

<body>
    <nav class="navbar navbar-expand-lg px-3" style="background-color: #001C30;">
        <a class="navbar-brand img-fluid" href="./index.php">
            <img src="https://rstriharsi.com/wp-content/uploads/2020/01/Logo-Ths-Png.png" alt="Logo" width="50" class="d-inline-block align-text-top">
        </a>
        <h3 class="text-white">RS JAKARTA</h3>
        <div class="collapse navbar-collapse" style="color:white;">
            <ul class="navbar-nav offset-8">
                <?php

                if (isset($_SESSION['nama_lengkap'])) {
                    echo "<li class='nav-item '>";
                    echo "<p class='nav-link'>Selamat datang, " . $_SESSION['nama_lengkap'] . "</p>";
                    echo "</li>";
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php">logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <br>
        <h4>
            <center>DAFTAR RESERVASI</center>
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
                        <td><?php echo $data["alamat"]; ?></td>
                        <td><?php echo $data["keluhan"]; ?></td>
                        <td><?php echo $data["no_hp"]; ?></td>
                        <td><?php echo $data["jadwal"]; ?></td>
                        <td>
                            <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id_peserta=<?php echo $data['id_peserta']; ?>" class="btn btn-danger" role="button">Delete</a>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
            </table>
    </div>
</body>

</html>