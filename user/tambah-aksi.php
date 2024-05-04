<?php

include'../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$asalsekolah = $_POST['asalsekolah'];
$jk = $_POST['jk'];
$jurusan = $_POST['jurusan'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$namaayah = $_POST['namaayah'];
$namaibu = $_POST['namaibu'];
$notlp = $_POST['notlp'];


mysqli_query($koneksi,"insert into t_daftar values('$id','$nama','$asalsekolah','$jk','$jurusan','$agama','$alamat','$namaayah','$namaibu','$notlp')");


header("location:admin/admin.php");
?>