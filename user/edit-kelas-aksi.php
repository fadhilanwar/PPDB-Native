<?php

include'../koneksi.php';

$id = $_POST['id'];
$idkelas = $_POST['idkelas'];
$nama = $_POST['nama'];
$jk = $_POST['jeniskelamin'];



mysqli_query($koneksi,"UPDATE t_penerimaan set idpendaftaran='$id', idkelas='$idkelas', nama='$nama', jeniskelamin='$jk' where idpendaftaran='$id'");

// mysqli_query($koneksi,"DELETE From t_statuspenerimaan where idpendaftaran='$id'");




header("location:admin/admin.php?page=kelas");
?>