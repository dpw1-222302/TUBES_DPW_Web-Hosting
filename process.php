<!-- login -->
<?php
// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start(); // Memulai session
    // Lakukan operasi pengecekan login di database
    require_once('koneksi.php');
    // Query untuk memeriksa kecocokan email dan password di tabel pengguna
    // Buat query untuk mengecek apakah terdapat user dengan email X dan password Y, jika ya maka login berhasil
    $query = "SELECT * FROM user WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        // Login berhasil, simpan data pengguna ke dalam session
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        // Login berhasil, redirect ke halaman utama
        header("Location: index.php");
        exit();
    } else {
        echo "Login gagal. Silakan cek kembali email dan password Anda.";
    }
    // Tutup koneksi database
    $conn->close();
}
?>
<!-- registrasi -->
<?php
// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lakukan operasi penyimpanan data ke database
    require_once('connect.php');
    // Query untuk menyimpan data pengguna baru ke tabel pengguna
    // Buat query untuk memasukkan data pengguna yang tadi diinputkan
    $query = "INSERT INTO user (user_id, nama_lengkap, no_hp, email, password) VALUES ('".$_POST['user_id']."', '".$_POST['nama_lengkap']."', '".$_POST['no_hp']."', '".$_POST['email']."', '".$_POST['password']."')";
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
