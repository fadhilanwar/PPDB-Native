<?php

$koneksi = mysqli_connect("localhost:3308","root","","dbpendaftaran");

//cek
if (mysqli_connect_error()) {
    echo"Koneksi Database Gagal :" . mysqli_connect_error();
}
?>