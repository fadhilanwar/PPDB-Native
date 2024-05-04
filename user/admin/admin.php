<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta ht tp-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../model/model-admin.css">
    <title>PPDB - Admin Dashboard</title>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="head-sidebar">
                <h3>Admin - PPDB SMKTIP</h3>
            </div>
            <hr>
            <div class="menu" style="background-color: #31689c;
        height: fit-content;
        color: white;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                <div class="info-menu">

                

                    <div class="misal">

                        <div class="hov1">
                            <a href="admin.php?page=dashboard"
                                style="color: white; text-decoration: none;"><img src="../../icon/dashboard.png" width="20px">Dashboard</a></li>
                            <br>
                        </div>


                    </div>
                    <hr>

                    <div class="misal">

                        <div class="hov1">

                            <a href="admin.php?page=datapendaftar" style="color: white; text-decoration: none;"><img src="../../icon/datapendaftar.png" width="30px">Data
                                Pendaftar</a>
                            <br>
                        </div>

                    </div>

                    <div class="misal">


                        <div class="hov1">

                            <a href="admin.php?page=tambahsiswa" style="color: white; text-decoration: none;"><img src="../../icon/add.png" width="30px">Daftar</a>
                            
                            <br>
                        </div>

                    </div>

                    <div class="misal">


                        <div class="hov1">

                            <a href="admin.php?page=petugas" style="color: white; text-decoration: none;"><img src="../../icon/account.png" width="30px">Akun</a>
                            

                        </div>

                    </div>

                    <div class="misal">


                        <div class="hov1">

                            <a href="admin.php?page=laporan" style="color: white; text-decoration: none;"><img src="../../icon/document.png" width="30px">Nilai Siswa</a>
                            

                        </div>

                    </div>

                    <div class="misal">


                        <div class="hov1">

                            <a href="admin.php?page=kelas" style="color: white; text-decoration: none;"><img src="../../icon/class.png" width="30px">Kelas</a>
                            

                        </div>

                    </div>


                    <div class="misal">

                        <div class="hov1">
                            <a class="logout" href="../logout.php"
                                onclick="return confirm ('Kembali ke Halaman LOGIN ?')">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar" style="">

           <div class="bg-wire">
            
               <div class="dropdown">
                   <div class="ruang">
                       <img src="../../icon/useradmin.png" width="35px" style="margin-left: 10px;" alt=""><?php echo $_SESSION['data1']['nama']?>
                   </div>
    
               </div>
           </div>


        </div>

        <div class="main-content">
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

                            case 'datapendaftar':
                                include "datapendaftar.php";
                                break;

                            case 'laporan':
                            include "laporan.php";
                            break;

                            case 'petugas':
                                include "petugas.php";
                                break;

                            case 'tambahsiswa':
                                include "tambahsiswa.php";
                                break;

                                case 'edit-siswa':
                                    include "edit-siswa.php";
                                    break;

                                    case 'edit-petugas':
                                        include "edit-petugas.php";
                                        break;

                                        case 'editstatus':
                                            include "editstatus.php";
                                            break;

                                            case 'kelas':
                                                include "kelas.php";
                                                break;

                                                case 'berikelas2':
                                                    include "berikelas.php";
                                                    break;

                                                    case 'tambahakun':
                                                        include "tambahakun.php";
                                                        break;

                                                        case 'edit-kelas':
                                                            include "edit-kelas.php";
                                                            break;

                            
                        
                        default:
                            echo"Maaf Halaman Tidak Ditemukan";
                            break;
                    }
                } else {
                    include "datapendaftar.php";
                }

                ?>
        </div>
    </div>

</body>

</html>