<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../model/model-admin.css">
    
    
    <link rel="shortcut icon" href="../../icon/SmktipHQ.png" type="image/x-icon">

    <title>PPDB - Siswa Dashboard</title>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="head-sidebar">
                <h3>Daftar Ulang SMKTIP</h3>

                
                <div class="dropdown-siswa">
                <div class="ruang-siswa">
                    <img src="../../icon/acc.png" width="40px" alt=""><?php echo $_SESSION['data2']['nama']?>
                </div>
            </div>
            </div>

            <hr>

            <div class="menu" style="background-color: #31689c;
        height: fit-content;
        color: white;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                <div class="info-menu">
                
                <div class="misal">

                        <div class="hov1">
                            <a href="siswa.php?page=dashboard"
                                style="color: white; text-decoration: none;">Hasil Seleksi</a></li>
                            <br>
                        </div>


                    </div>

                    <div class="misal">

                        <div class="hov1">

                            <a href="siswa.php?page=daftar" style="color: white; text-decoration: none;">Nilai</a></li>
                            <br>
                        </div>

                    </div>

                    <div class="misal">


                        <div class="hov1">

                            <a href="siswa.php?page=berkas" style="color: white; text-decoration: none;">Berkas</a>
                            </li>
                            <br>
                        </div>

                    </div>

                    <div class="misal5">

                        <div class="hov1-keluar">
                            <a class="logout" href="../logout.php"
                                onclick="return confirm ('Kembali ke Halaman Login ?')">Keluar</a>


                        </div>


                    </div>

                    


                    </div>

                </div>
            </div>

        </div>


        <div class="navbar">

            <div class="untuk-jarak-nav">
                <ul>
                    <li><a href="siswa.php?page=infojurusan">Info Jurusan</a></li>
                    <li><a href="siswa.php?page=infosekolah">Info Sekolah</a></li>
                    <li><a href="siswa.php?page=infopendaftaran">Info Pendaftaran</a></li>

                </ul>
            </div>

            
        </div>

        <div class="main-content-siswa">
            <?php
                
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];

                    switch ($page) {
                        case 'infojurusan':
                            include "infojurusan.php";
                            break;

                        case 'infosekolah':
                            include "infosekolah.php";
                            break;

                        case 'infopendaftaran':
                            include "infopendaftaran.php";
                            break;

                            case 'dashboard':
                                include "dashboard.php";
                                break;

                            case 'daftar':
                                include "daftar.php";
                                break;

                            case 'berkas':
                            include "berkas.php";
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
    </div>

</body>

</html>