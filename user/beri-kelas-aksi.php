<?php

include'../koneksi.php';

$id = $_POST['id'];
$idkelas = $_POST['idkelas'];
$nama = $_POST['nama'];
$jk = $_POST['jeniskelamin'];



mysqli_query($koneksi,"insert into t_penerimaan values('$id','$idkelas','$nama','$jk')");

// mysqli_query($koneksi,"DELETE From t_statuspenerimaan where idpendaftaran='$id'");




header("location:admin/admin.php?page=kelas");
?>