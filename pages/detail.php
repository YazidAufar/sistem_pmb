<style>
    select {
        width: 100%;
        padding: 16px 20px;
        border: none;
        border-radius: 4px;
        background-color: #f1f1f1;
    }

    textarea {
        width: 100%;
        height: 90px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
    }
</style>
<?php
    include "config/koneksi.php";
    $id_pmb = $_GET['id_pmb'];
    $sql_query = mysqli_query($conn, "SELECT * FROM tb_pmb WHERE id_pmb='$id_pmb'");
    $data = mysqli_fetch_assoc($sql_query);
?>
<div id="form-registrasi" style="margin-top: 10px;">
    <h2 style="color: #1a355b;"> Detail Siswa | <a href="index.php?link=dashboard&level=admin" style="color: #777;">&laquo; Kembali</a>
    </h2><br>
    <form action="config/proses-form/proses-registrasi.php" method="post" style="width: 575px; max-height:450px; float:left; overflow-y: scroll;">
        <div class="container" style="padding: 30px;">
            <label for="uname"><b>Nama Lengkap</b></label>
            <input type="text" placeholder="Masukkan nama lengkap" name="nama" value="<?php echo $data['nama'];?>" required>

            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Masukkan email" name="email" value="<?php echo $data['email'];?>" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Masukkan password" name="pass" value="<?php echo $data['password'];?>" required>

            <label for="uname"><b>Tempat lahir</b></label>
            <input type="text" placeholder="Masukkan tempat lahir" name="tempat_lahir" value="<?php echo $data['email'];?>" required>

            <label for="uname"><b>Tanggal lahir</b></label>
            <input type="text" placeholder="Masukkan tanggal lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>"required>

            <label for="psw"><b>Jenis Kelamin</b></label>
            <select id="kelamin" name="jenis_kelamin">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
            <label for="psw"><b>Alamat</b></label>
            <textarea name="alamat" placeholder="Masukka alamat lengkap"><?php echo $data['alamat'];?></textarea>

            <label for="uname"><b>Kota/Kabupaten</b></label>
            <input type="text" placeholder="Nama kota atau kabupaten" name="kota" value="<?php echo $data['kota'];?>" required>

            <label for="uname"><b>Kontak</b></label>
            <input type="text" placeholder="Masukkan tanggal lahir" name="kontak" value="<?php echo $data['kontak'];?>" required>

            <label for="uname"><b>Tanggal Registrasi</b></label>
            <input type="text" value="<?php echo date('l, d  F Y'); ?>" name="tanggal_daftar" value="<?php echo $data['tanggal_daftar'];?>" >
        </div>
    </form>
</div>

<div id="content" style="width: 400px; margin-top:0px;">
<br>
    <h2 style="padding-top: 10px;">Status Pendaftaran</h2>
    <hr style="margin-left: 20px; margin-right:20px;">
    <br>Pilihan Jurusan I: <br><?php echo $data['jurusan1'];?><br>
    <br>Pilihan Jurusan II :<br> <?php echo $data['jurusan1'];?><br><br><br>
    <h2>Keterangan</h2>
    <center>
    <div style="border: thin solid white; width: 250px; padding-top:70px; padding-bottom:70px; margin-top:10px; vertical-align:middle;">
    <?php 
        if($data['keterangan']==""){
            echo "Sedang diseleksi";
        }else{
            echo $data['keterangan'];
        }
    ?>
    </div>
    </center>
</div>