\<style>

.area-input {
    margin-left: 70px;
    /* background-color: red; */
    padding-top: 20px;
    border: 2px solid green;
    /* background-color: #1565b1; */
    /* padding-left: 90px; */
    /* padding: 25px; */
    padding-left: 60px;
    margin-top: 40px;
    width: 33%;
    /* padding-top: 40px; */
    border-radius: 10px;
    color: black;
    /* text-shadow: 0 0 9px #51554C, 0 0 5px #51554C; */
    display: flex;
    /* justify-content: center; */

}

.area-input input{
    width: 280px;
}

</style>
<div class="content">
<div class="area-input">


<form method="post" action="../tambah-petugas-aksi.php">
    <div class="header-area-input" style=" ">
    <img src="../../icon/addsiswa.png" width="30px">Tambahkan Akun
    </div>
    <div class="satu">

        <!-- <b>ID</b>
        <br>
        <input type="text" name="id">
        <br> -->



        Nama
        <br>
        <input type="text" name="nama" autocomplete="off">
        <br>

        Username
        <br>
        <input type="text" required name="username" autocomplete="off">
        <br>


        Password
        <br>
        <input type="text" required name="password" autocomplete="off">
        <br>
        Hak Akses (Sebagai)
        <br>
        <select class="select-jurusan" name="level">
        <option disabled selected>- Pilih Hak -</option>
            <option>siswa</option>
            <option>admin</option>
            <option>panitia</option>
    
        </select>
    </div>
    <div class="dua">
        <input class="btn-submit-petugas" type="submit" value="Simpan" style="margin-top: 20px;">
        <br>
        <a href="admin.php?page=petugas">
            <div class="btn-cancel">
                Back
            </div>
        </a>


    </div>

</form>
</div>
</div>