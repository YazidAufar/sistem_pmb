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
<div id="form-registrasi">
    <h2 style="color: #c4c4c4; margin-top:20px;"> Registrasi Akun
        <span style="color: #1a355b;">&raquo; Data Diri</span>
        <span style="color: #c4c4c4;">&raquo; Pilih Jurusan</span>
        <span style="color: #c4c4c4;">&raquo; Selesai</span>
    </h2>
    <br>
    <form action="config/proses-form/proses-datadiri.php" method="post" style="width: 575px; max-height:500px; float:left;">
        <div class="container" style="padding: 30px;">
            <label for="uname"><b>Tempat lahir</b></label>
            <input type="text" placeholder="Masukkan tempat lahir" name="tempat_lahir" required>

            <label for="uname"><b>Tanggal lahir</b></label>
            <input type="text" placeholder="Masukkan tanggal lahir" name="tanggal_lahir" required>

            <label for="psw"><b>Jenis Kelamin</b></label>
            <select id="kelamin" name="jenis_kelamin">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
            <label for="psw"><b>Alamat</b></label>
            <textarea name="alamat" placeholder="Masukka alamat lengkap"></textarea>
            <input type="hidden" value="<?php echo $_GET['email'];?>" name="email">
            <button type="submit">Lanjutkan</button>
            <button type="reset" class="cancelbtn" style="width:100%;">Hapus</button>
        </div>
    </form>
    <br><br><br><br><br><br><br>
    <img src="images/registernowgif.gif" style="width: 360px; margin-left:20px; margin-right:20px;">
</div>