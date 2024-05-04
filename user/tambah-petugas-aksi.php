<?php

include'../koneksi.php';

$id;

$kodeauto = mysqli_query($koneksi, "select * from kodeauto");

if ($d = mysqli_fetch_array($kodeauto)) {
    $noberikutnya = $d ['nourut'];
    echo $noberikutnya;

    if ($noberikutnya < 10) {
        $id = "DFT00". $noberikutnya;
    } else if($noberikutnya < 100) {
        $id = "DFT0". $noberikutnya;
    }else{
        $id = "DFT". $noberikutnya;
    }
        
    }else {
        $id = "DFT001";
    }


$nama = $_POST['nama'];
$asalsekolah = $_POST['username'];
$jk = $_POST['password'];
$jurusan = $_POST['level'];


mysqli_query($koneksi,"insert into t_userlogin values('$id','$nama','$asalsekolah','$jk','$jurusan')");


header("location:admin/admin.php?page=petugas");
?>