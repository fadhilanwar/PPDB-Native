<?php

include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$asalsekolah = $_POST['username'];
$jeniskelamin = $_POST['password'];
$jurusan = $_POST['level'];


mysqli_query($koneksi,"UPDATE t_userlogin set id='$id', nama='$nama', username='$asalsekolah', password='$jeniskelamin', level='$jurusan' WHERE id='$id'");

header("location:admin/admin.php?page=petugas");









?>