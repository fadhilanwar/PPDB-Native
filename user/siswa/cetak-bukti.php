<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../model/model-siswa.css">
    <title>Bukti Pendaftaran</title>
</head>

<body>

    <div class="wrapper-siswa-cetak">




        <div class="top-header">

            <div class="logo">
                <img src="../../icon/smk-logo.png" alt="">
            </div>

            <div class="information">
                <!-- <h2>Penerimaan Peserta Didik Baru</h2>
                        <h1>SMK TI Pembangunan Cimahi</h1> -->
                PEMERINTAH DAERAH PROVINSI JAWA BARAT<br>
                DINAS PENDIDIKAN<br>


                <b>SMK TEKNOLOGI INDUSTRI PEMBANGUNAN CIMAHI</b><br>




            </div>

            <div class="jarak">
                <table border="0">
                    <div>
                        <tr>
                            <td> <img src="../../icon/mark-map.png" alt=""></td>
                            <td>: Cimahi, JL. H. Bakar, Kec. Cimahi Selatan</td>
                        </tr>
                    </div>

                    <div>
                        <tr>
                            <td> <img src="../../icon/email.png" alt="">
                            </td>
                            <td>: smktip_cimahi@yahoo.co.id</td>
                        </tr>

                    </div>

                    <div>
                        <tr>
                            <td><img src="../../icon/call.png" alt=""></td>
                            <td>: (022) 6629586 / WA : +6285293939191</td>
                        </tr>


                    </div>
                </table>
            </div>


        </div>

        <hr style="border: 1px solid black;">
        <div class="wrapper-struk">
            <div class="head-struk">
                <b>HASIL SELEKSI</b>
                <br>
                <div style="text-decoration: underline;">PPDB SMK TI PEMBANGUNAN Jawa Barat 2022-2023</div>

            </div>
            <br>
            <div class="wrapper-tabel">
                
                <table class="tbl-struk" border="1">
                    <tr>
                        <th style="text-align: left;" colspan="4">A. Data Diri Siswa</th>
                    </tr>
                    <?php
    
    include'../../koneksi.php';
    
    $idpendaftar = $_SESSION['data2']['id'];

    $data = mysqli_query($koneksi,"Select * from t_daftar where idpendaftaran='$idpendaftar'");

    
    if ($d = mysqli_fetch_array($data)) {
        ?>
                    <td>
                        No. Pendaftaran 
                    </td>
                    <td>
                        <?= $d['idpendaftaran']; ?>
                    </td>
                    <tr>
                        <td>
                            Nama Pendaftar 
                        </td>
                        <td>

                            <?= $d['namapendaftar']; ?>

                        </td>

                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><?= $d['jeniskelamin']; ?></td>
                    </tr>

                    <tr>
                        <td>Asal Sekolah</td>
                        <td><?= $d['asalsekolah']; ?></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td><?= $d['alamat']; ?></td>
                    </tr>
                    <?php
    }
?>
                </table>

                

            </div>

            <br>

            <div class="wrapper-tabel-2">

            <table class="tbl-struk" border="1">
                <tr style="text-align: left;">
                        <th colspan="0">B. Data Nilai</th>
                        <th style="text-align: center;">Nilai</th>
                            
                        </td>
                    </tr>

                    
                    <tr>

                    <?php
                    
                
                include'../../koneksi.php';
                $data = mysqli_query($koneksi,"Select * from t_nilai where idpendaftaran='$idpendaftar'");

                if ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td>Matematika</td>
                    <td><?= $d['matematika'];  ?></td>
                </tr>

                <tr>
                    <td>Bhs. Inggris</td>
                    <td><?= $d['binggris'];  ?></td>
                </tr>

                <tr>
                    <td>Bhs. Indonesia</td>
                    <td><?= $d['bindonesia'];  ?></td>
                </tr>

                <tr>
                    <td style="text-align: right; padding-right: 20px;">Rata rata</td>
                    <td><?= $d['ratarata'];  ?></td>
                </tr>



                <?php
                }
                ?>

                    </tr>
                </table>
                
            </div>
            <div class="struk-status">
                <center>
                <br>
                Dengan demikian siswa yang bersangkutan Di-Nyatakan 
                <?php
                
$data = mysqli_query($koneksi,"Select status from t_statuspenerimaan where idpendaftaran='$idpendaftar'");

if ($d = mysqli_fetch_array($data)) {
?>


<?=
    $d['status'] == "Tidak Lolos" ? 
    '<div>
    <h1 style="color: red;">' . $d['status'] . ' Seleksi</h1> di SMK TI Pembangunan
    </div>' : 
    
    '<div>
    <h1 style="color: green;">' . $d['status'] . ' Seleksi</h1> di SMK TI Pembangunan
    </div>' 
?>


      
            
    </div>
    </center>
    <?php
    }
    ?>
                
            </div>

        </div>

    </div>

</body>

</html>

<script>
    window.print();
</script>