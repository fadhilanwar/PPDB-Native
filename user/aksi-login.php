<?php

session_start();

include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM t_userlogin WHERE username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if ($cek > 0) {
    
    $data = mysqli_fetch_assoc($login);

    if ($data['level']=="admin") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        $_SESSION['data1'] = $data;
        
        header("location:admin/admin.php?page=dashboard");

    } else if ($data['level']=="panitia") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "panitia";

        header("location:panitia/panitia.php");

    } else if ($data['level']=="siswa") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "siswa";
        $_SESSION['data2'] = $data;

        header("location:siswa/siswa.php");
    } else {
        header("location:pesan-gagal.php");
    }
    
}else {
    header("location:pesan-gagal.php");
}
?>