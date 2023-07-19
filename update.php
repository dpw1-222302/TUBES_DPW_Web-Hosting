<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <?php

    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_peserta
    if (isset($_GET['id_peserta'])) {
        $id_peserta=input($_GET["id_peserta"]);

        $sql="select * from peserta where id_peserta=$id_peserta";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);

    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_peserta=htmlspecialchars($_POST["id_peserta"]);
        $nama=input($_POST["nama"]);
        $alamat=input($_POST["alamat"]);
        $keluhan=input($_POST["keluhan"]);
        $no_hp=input($_POST["no_hp"]);
        $jadwal=input($_POST["jadwal"]);

        //Query update data pada tabel anggota
        $sql="update peserta set
			nama='$nama',
			alamat='$alamat',
			keluhan='$keluhan',
			no_hp='$no_hp',
			jadwal='$jadwal'
			where id_peserta=$id_peserta";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location: admin/dataPendaftar.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2 class="mb-5 mt-4"><center>Update Data</center></h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required value="<?php echo $data['nama'];?>"/>

        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required
            value="<?php echo $data['alamat'];?>"/>
        </div>
        <div class="form-group">
            <label>Keluhan :</label>
            <input type="text" name="keluhan" class="form-control" placeholder="Masukan Keluhan" required
            value="<?php echo $data['keluhan'];?>"/>
        </div>
        <div class="form-group">
            <label>No HP:</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" required
            value="<?php echo $data['no_hp'];?>"/>
        </div>
        <div class="form-group">
            <label>Jadwal:</label>
            <input class="form-control" type="date" id="birthday" name="jadwal" required
            value="<?php echo $data['jadwal'];?>"/>
        <input type="hidden" name="id_peserta" value="<?php echo $data['id_peserta']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>