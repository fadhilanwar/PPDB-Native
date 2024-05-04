<?php

include '../koneksi.php';


$idpendaftaran = $_GET['idpdft'];

mysqli_query($koneksi,"DELETE from t_nilai WHERE idpendaftaran='$idpendaftaran'");

header("location:admin/admin.php?page=laporan");


?>