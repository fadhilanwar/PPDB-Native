<?php

include '../koneksi.php';


$idpendaftaran = $_GET['idpendaftaran'];

mysqli_query($koneksi,"DELETE from t_daftar WHERE idpendaftaran='$idpendaftaran'");

header("location:admin/admin.php?page=datapendaftar");


?>