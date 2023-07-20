<!DOCTYPE html>
<html>

<head>
    <title>Form Pendaftaran Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        form .form-control {
            padding: 25px 20px;
            font-family: 'Poppins', sans-serif;
            border-radius: 15px;
        }

        form .btn {
            background-color: #68b581;
            font-size: 20px;
            font-family: 'Poppins', sans-serif;
            border-radius: 15px;
            transition: 0.2s;
        }

        .btn:hover {
            background-color: #3c684a;
        }
    </style>
</head>

<body>
    <!-- form reservasi -->
    <div class="container py-5" id="reservasi">
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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nama = input($_POST["nama"]);
            $alamat = input($_POST["alamat"]);
            $keluhan = input($_POST["keluhan"]);
            $no_hp = input($_POST["no_hp"]);
            $jadwal = input($_POST["jadwal"]);

            //Query input menginput data kedalam tabel anggota
            $sql = "insert into peserta (nama,alamat,keluhan,no_hp,jadwal) values
		('$nama','$alamat','$keluhan','$no_hp','$jadwal')";

            //Mengeksekusi/menjalankan query diatas
            $hasil = mysqli_query($kon, $sql);

            //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
            if ($hasil) {
                header("Location:history.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
            }
        }
        ?>
        <h2 class="mb-4 mt-5" style="font-family:'Poppins', sans-serif;">
            <center>Reservasi</center>
        </h2>


        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="form-group mb-3">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />

            </div>
            <div class="form-group mb-3">
                <label>Alamat:</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Nama Alamat" required />
            </div>
            <div class="form-group mb-3">
                <label>Keluhan :</label>
                <input type="text" name="keluhan" class="form-control" placeholder="Masukan Keluhan" required />
            </div>
            <div class="form-group mb-3">
                <label>No HP:</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" required />
            </div>
            <div class="form-group mb-3">
                <label>Jadwal:</label>
                <input class="form-control" type="date" id="birthday" name="jadwal">
            </div>

            <button type="submit" name="submit" class="btn btn-block text-white mb-5 py-3 px-5">Submit</button>
        </form>
    </div>
</body>

</html>