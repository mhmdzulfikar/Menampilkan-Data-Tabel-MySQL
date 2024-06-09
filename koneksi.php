<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts_312310011"; // Ganti dengan nama database Anda

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>