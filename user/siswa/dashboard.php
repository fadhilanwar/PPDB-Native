<div class="content">
    <h3>Hasil Seleksi PPDB 2023</h3>

    
    <table class="tbl-seleksi" cellspacing=0>
        <tr>
            <td>ID Pendaftaran</td>
            <?php $idpendaftar = $_SESSION['data2']['id'] ?>
            <?php
                
                include'../../koneksi.php';
                $data = mysqli_query($koneksi,"Select * from t_daftar where idpendaftaran='$idpendaftar'");
                
                if ($d = mysqli_fetch_array($data)) {
                    ?>
                <td><?php echo $d['idpendaftaran'];?></td>
                <a href="cetak-bukti.php" target="_blank" style=" text-decortion: none; width: fit-content;">

                <div class="btn-cetak-hasil" style="background-color: green; display: flex; padding: 2px; width: fit-content; margin-bottom: 20px; border-radius: 10px;">
                    <img src="../../icon/pdf.png" width="40px">
                    <p>Cetak Bukti</p>
                </div>
                    
            
            </a>
        </tr>



        <tr>
            <td>Nama</td>
            <td><?php echo $d['namapendaftar'];?></td>
        </tr>

        <tr>
            <td>Pilihan Jurusan</td>
            <td>
                <?php echo $d['jurusan'];?>

            </td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td><?php echo $d['asalsekolah'];?></td>
        </tr>

        <tr>
            <td>Nilai Rata-Rata</td>

            <?php
                
                include'../../koneksi.php';
                $data = mysqli_query($koneksi,"Select ratarata from t_nilai where idpendaftaran='$idpendaftar'");

                if ($d = mysqli_fetch_array($data)) {
                ?>




<td>

    <?php echo $d['ratarata'];?>

    <?php
                }
                ?>
            
            
        </td>
    </tr>
    </table>
    <td>Status</td>
    <div class="seleksi">


<?php
                
$data = mysqli_query($koneksi,"Select status from t_statuspenerimaan where idpendaftaran='$idpendaftar'");

if ($d = mysqli_fetch_array($data)) {
?>




        <h3>
            
        <?php echo $d['status'];?> Seleksi</h3> di SMK TI Pembangunan
    </div>
    <?php
    }
    ?>
</div>