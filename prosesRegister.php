<?php
// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lakukan operasi penyimpanan data ke database
    require_once('koneksiuser.php');
    // Query untuk menyimpan data pengguna baru ke tabel pengguna
    // Buat query untuk memasukkan data pengguna yang tadi diinputkan
    $query = "INSERT INTO user (user_id, nama_lengkap, no_hp, email, password) VALUES ('" . $_POST['user_id'] . "', '" . $_POST['nama_lengkap'] . "', '" . $_POST['no_hp'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "')";
    if ($conn->query($query) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    // Tutup koneksi database
    $conn->close();
}
?>