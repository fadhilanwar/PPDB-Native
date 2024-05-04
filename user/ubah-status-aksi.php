<?php

include '../koneksi.php';


$idpendaftaran = $_GET['idpdft'];
$status = $_GET['status'];

if ($status=='Tidak Lolos') {
    mysqli_query($koneksi,"update t_statuspenerimaan set status='Lolos' where idpendaftaran='$idpendaftaran'");

}else if ($status=='Lolos') {
    mysqli_query($koneksi,"update t_statuspenerimaan set status='Tidak Lolos' where idpendaftaran='$idpendaftaran'");

}


header("location:admin/admin.php?page=laporan");


?>