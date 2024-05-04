<style>
.content {
    /* background-color: blue; */
}
</style>

<div class="content">

    <h2>
        Data Pendaftar
    </h2>

    <div class="wrap-search">



        <form class="search" action="" method="post">
            <input type="text" name="cari" value="" placeholder="Cari ID / Nama" required>
            <input class="btn-search" type="submit" value="Search">
        </form>

        <div>





        </div>

    </div>


    <div class="main-contenti">
        <div class="info-konten">

        </div>
        <table class="tbl-siswa">
            <tr>
                <th style="font-weight: 700;">ID Pendaftaran</th>
                <th>Nama Pendaftar</th>
                <!-- <th>Asal Sekolah</th> -->
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <!-- <th>Agama</th>
                <th>Alamat</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>No Tlp</th> -->
                <th colspan="3">Aksi</th>
            </tr>

            <?php
    
    include'../../koneksi.php';
    $data = mysqli_query($koneksi,"Select * from t_daftar");

    if (isset($_POST['cari'])) {
        $cari = $_POST['cari'];
        $data = mysqli_query($koneksi,"select * from t_daftar where idpendaftaran like '%$cari%' or namapendaftar like '%$cari%'");
    }

    while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $d['idpendaftaran'];?></td>
                <td class="nama-specified"><?php echo $d['namapendaftar'];?></td>
                <td><?php echo $d['jeniskelamin'];?></td>
                <td class="jurusan-specified"><?php echo $d['jurusan'];?></td>
                
                <td>
                    <a href="admin.php?page=edit-siswa&&idpendaftaran=<?php echo $d['idpendaftaran']; ?>"><img
                            src="../../icon/info.png"
                            style="background-color: green; border-radius: 10px; display: flex; justify-content: center; padding: 5px; position: relative; left: 8px; "
                            width="32px"></a>
                </td>
                <td>
                    <a href="../hapus.php?idpendaftaran=<?php echo $d['idpendaftaran']; ?>"
                        style="display: flex; justify-content: center;"
                        onclick="return confirm ('Anda Yakin ingin Menghapus data ini ?')"><img
                            src="../../icon/sampah.png"
                            style="background-color: red; border-radius: 10px; padding: 10px;" width="22px"></a>
                </td>
            </tr>
            <?php
    }
?>

        </table>
    </div>
</div>