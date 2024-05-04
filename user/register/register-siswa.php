<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../model/model-admin.css"> -->
    <link rel="stylesheet" href="../../model/model-siswa.css">

    <title>Registrasi Siswa</title>
</head>

<body>
    <div class="wrapper">


        <div class="wrapper-siswa">

            <div class="header">


                <div class="top-header">

                    <div class="logo">
                        <img src="../../icon/smk-logo.png" alt="">
                    </div>

                    <div class="information">
                        <h2>Penerimaan Peserta Didik Baru</h2>
                        <h1>SMK TI Pembangunan Cimahi</h1>

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




                <div class="bottom-header">




                    <ul>

                        <li><a href="create-acc.php">Registrasi</a></li>


                    </ul>



                    <ul>
                        <li><a href="register-siswa.php?page=dash">Dashboard</a></li>

                    </ul>

                    <ul>
                        <li><a href="register-siswa.php?page=hubungi">Jurusan</a></li>

                    </ul>
                    <ul>
                        <li><a href="register-siswa.php?page=faq">FAQs</a></li>

                    </ul>


                    <!-- <ul>
                        <li><a href="register-siswa.php?page=snk">Syarat & Ketentuan</a></li>

                    </ul> -->

                    <ul>
                        <li><a href="register-siswa.php?page=after">Alur Pendaftaran</a></li>

                    </ul>

                    

                </div>




            </div>





        </div>
        <div class="wrapper-content">
            <div class="main-input">

                <?php
                
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];

                    switch ($page) {
                        
                        case 'dash':
                            include "dashboard.php";
                            break;
                    
                        case 'faq':
                            include "faq.php";
                            break;

                        case 'hubungi':
                            include "hubungi.php";
                            break;

                            case 'prodi':
                                include "info-jurusan.php";
                                break;
                                
                                case 'after':
                                    include "after-daftar.php";
                                    break;

                                    case 'snk':
                                        include "snk.php";
                                        break;
                                    
                                
            
                        

                            
                        
                        default:
                            echo"Maaf Halaman Tidak Ditemukan";
                            break;
                    }
                } else {
                    include "dashboard.php";
                }

                ?>

            </div>

            <div class="main-content">
                <h1>Profil Sekolah</h1>
                <h3>SMK TI Pembangunan : Kampus III</h3>
                <div class="image-ti"></div>

                

                <p style="color: black;">
                    <img src="../../icon/mark-map2.png" width="20px">: Cibeber, Kec. Cimahi Selatan, Kota Cimahi, Jawa
                    Barat 40531
                    <div class="content">
                    <h3>Fasilitas yang Tersedia</h3>
                </div>
                    
                    <img src="../../icon/school-class.png" width="30px">: 32 Kelas
                    <br>
                    <img src="../../icon/perpus.png" width="30px">: 1 Perpustakaan
                    <br>
                    <img src="../../icon/toilet.png" width="30px">: 4 Toilet
                    <br>
                    <img src="../../icon/sanitasi.png" width="30px">: Keadaan Sangat Baik




                <p>


                <h3>SMK TI Pembangunan : Kampus Hj. Bakar</h3>
                <div class="image-ti2"></div>

                

                <p style="color: black;">
                    <img src="../../icon/mark-map2.png" width="20px">: JL. Hj Bakar, Utama, Kec. Cimahi Selatan, Kota
                    Cimahi, Jawa Barat 40521
                    <div class="content">
                    <h3>Fasilitas yang Tersedia</h3>
                </div>
                    
                    <img src="../../icon/school-class.png" width="30px">: 29 Kelas
                    <br>
                    <img src="../../icon/perpus.png" width="30px">: 0 Perpustakaan
                    <br>
                    <img src="../../icon/toilet.png" width="30px">: 2 Toilet
                    <br>
                    <img src="../../icon/sanitasi.png" width="30px">: Keadaan Baik




                <p>
            </div>
        </div>


    </div>
</body>

</html>