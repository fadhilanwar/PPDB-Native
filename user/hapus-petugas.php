<?php

include '../koneksi.php';


$id = $_GET['id'];

mysqli_query($koneksi,"DELETE from t_userlogin WHERE id='$id'");

header("location:admin/admin.php?page=petugas");


?>