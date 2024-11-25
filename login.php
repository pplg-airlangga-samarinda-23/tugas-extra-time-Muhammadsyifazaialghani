<?php
include 'manggil.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = $koneksi->query("SELECT * from inventori WHERE username = '$username'")->fetch_assoc();

    if($data){
        if($password == $data['password']){
            header('location: dashboard.php');
        }else {
            echo 'gagal';
        }
    }
}
?>