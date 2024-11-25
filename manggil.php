<?php

// database
$host = "localhost";
$user = "root";
$password = "";
$database = "inventori";
$koneksi = new mysqli($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>