<?php

include '../koneksi.php';

$id = $_POST['idpendaftaran'];
$nama = $_POST['nama'];
$asalsekolah = $_POST['asalsekolah'];
$jeniskelamin = $_POST['jeniskelamin'];
$jurusan = $_POST['jurusan'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$namaayah = $_POST['namaayah'];
$namaibu = $_POST['namaibu'];
$notlp = $_POST['notlp'];

mysqli_query($koneksi,"UPDATE t_daftar set idpendaftaran='$id', namapendaftar='$nama', asalsekolah='$asalsekolah',
 jeniskelamin='$jeniskelamin', jurusan='$jurusan', agama='$agama', alamat='$alamat', namaayah='$namaayah', namaibu='$namaibu', notlp='$notlp' WHERE idpendaftaran='$id'");

header("location:admin/admin.php?page=datapendaftar");









?>