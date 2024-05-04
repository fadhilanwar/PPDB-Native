

<?php


include'../koneksi.php';

session_start();
$idpendaftar = $_SESSION['data2']['id'];

$bindo = $_POST['bahasaindonesia'];
$binggris = $_POST['bahasainggris'];
$mtk = $_POST['matematika'];

$nama = $_POST['namapendaftar'];
$jk = $_POST['jeniskelamin'];

$n = $bindo + $binggris + $mtk;
$avg = $n / 3;




mysqli_query($koneksi,"insert into t_nilai values('$idpendaftar','$bindo','$binggris','$mtk','$avg')");

mysqli_query($koneksi,"insert into t_statuspenerimaan values('$idpendaftar','$nama','$jk','Tidak Lolos')");




header("location:siswa/siswa.php?page=dashboard");
?>