<style>
.content {
    /* background-color: red; */
}

.info-konten {
    /* background-color: yellow; */
    display: flex;
}



.area-input input {
    /* width: 340px; */
}

.tbl-petugas th {
    /* height: 40px; */

}
</style>


<div class="content">
    <h3>Data Akun yang Terdaftar</h3>
    <div class="main-contenti">
        <div class="info-konten">
            <div class="area-konten">
                <a href="admin.php?page=tambahakun">
                <div class="btn-akun">
                <img src="../../icon/adduser.png" width="40px"> Add account
</div></a>





                <table class="tbl-petugas">
                    <tr>
                        <th style="font-weight: 700;">ID Petugas</th>

                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>

                        <th colspan="2">Aksi</th>
                    </tr>

                    <?php
    
    include'../../koneksi.php';
    $data = mysqli_query($koneksi,"Select * from t_userlogin");

    while ($d = mysqli_fetch_array($data)) {
        ?>
                    <tr>
                        <td><?php echo $d['id'];?></td>
                        <td><?php echo $d['nama'];?></td>
                        <td><?php echo $d['username'];?></td>
                        <td><?php echo $d['password'];?></td>
                        <td><?php echo $d['level'];?></td>
                        <td>
                            <a href="admin.php?page=edit-petugas&&id=<?php echo $d['id']; ?>"><img
                                    src="../../icon/info.png"
                                    style="position: relative; left: 50px;background-color: green; border-radius: 10px; display: flex; justify-content: center; padding: 5px;"
                                    width="32px"></a>
                        </td>
                        <td>
                            <a href="../hapus-petugas.php?id=<?php echo $d['id']; ?>"
                                style="position: relative; right: 20px; display: flex; justify-content: center;"
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


    </div>
</div>