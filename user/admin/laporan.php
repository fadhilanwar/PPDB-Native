<div class="content">
    <h2>Data Nilai Siswa</h2>
    <h3 style="font-family = Cursive;">
    <div style="float: right;">

        <a style="text-decoration: none;" href="cetak-rekap-status.php" target="_blank">
        <div class="btn-rekap">
            <img src="../../icon/pdf.png" width="40px"><p>Cetak Rekap</p>
        </div>
        </a>
    </div>

        <table class="tbl-siswa-nilai" border="0">
            <tr>
                <th>ID Pendaftaran</th>

                <th>Bahasa Indonesia</th>
                <th>Bahasa Inggris</th>
                <th>Matematika</th>
                <th>Avg</th>
                <th>Status</th>

                <th style="text-align: right;" colspan="1">Ubah Status</th>
                <th colspan="1">Tambah Kelas</th>
                <th colspan="1">Hapus</th>
            </tr>

    </h3>

    <?php
    
    include'../../koneksi.php';
    $data = mysqli_query($koneksi,"SELECT t_nilai.*, t_statuspenerimaan.status FROM t_nilai INNER JOIN t_statuspenerimaan ON t_nilai.idpendaftaran = t_statuspenerimaan.idpendaftaran;");

    while ($d = mysqli_fetch_array($data)) {
        ?>
    <tr>
        <td><?php echo $d['idpendaftaran'];?></td>
        <td><?php echo $d['bindonesia'];?></td>
        <td><?php echo $d['binggris'];?></td>
        <td><?php echo $d['matematika'];?></td>
        <td><?php echo $d['ratarata'];?></td>
        <td><?php echo $d['status'];?></td>
        <td>

            <?php
                            
                            if ($d['status'] == 'Lolos') {?>

            <a href="../ubah-status-aksi.php?idpdft=<?php echo $d['idpendaftaran']; ?>&&status=<?= $d['status'];?>"><img
                    src="../../icon/denied.png"
                    style="background-color: red; border-radius: 10px; display: flex; justify-content: center; padding: 5px; position: relative; left: 60px;"
                    width="32px"></a>

            <?php
                            } else{
                                

                                
                                ?>

            <a href="../ubah-status-aksi.php?idpdft=<?php echo $d['idpendaftaran']; ?>&&status=<?= $d['status'];?>"><img
                    src="../../icon/accept.png"
                    style="background-color: green; border-radius: 10px; display: flex; justify-content: center; padding: 5px; position: relative; left: 60px;"
                    width="32px"></a>

            <?php
                            }
                       ?>



        </td>
        <td>
            <?php
                            
                            if ($d['status'] == 'Lolos') {?>

            <a href="admin.php?page=berikelas2&&idpdft=<?php echo $d['idpendaftaran']; ?>"
                style="text-decoration: none; padding: 10px 20px; border-radius:5px; font-size: 15px; color: white; background-color: green;">Pilih
                Kelas</a>
            <?php
                            } else{

                                echo '-';
                                
                            }
                            ?>





        </td>
        <td>
            <a href="../hapus-laporan.php?idpdft=<?php echo $d['idpendaftaran']; ?>"
                style="display: flex; justify-content: center;"
                onclick="return confirm ('Anda Yakin ingin Menghapus data ini ?')"><img src="../../icon/sampah.png"
                    style="background-color: red; border-radius: 10px; padding: 10px;" width="22px"></a>
        </td>
    </tr>
    <?php
    }
?>
</div>