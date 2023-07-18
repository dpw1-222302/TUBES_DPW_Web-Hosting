<?php

$host="localhost";
$user="root";
$password="";
$db="crud";

$conn = mysqli_connect('localhost', 'root', '', 'pertemuan 10') or die("Database not found");
$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
        die("Koneksi Gagal:".mysqli_connect_error());
}
?>