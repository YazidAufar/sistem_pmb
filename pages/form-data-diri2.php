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
    <form action="config/proses-form/proses-datadiri2.php" method="post" style="width: 575px; max-height:450px; float:left;">
        <div class="container" style="padding: 30px;">
            <label for="uname"><b>Kota/Kabupaten</b></label>
            <input type="text" placeholder="Nama kota atau kabupaten" name="kota" required>

            <label for="uname"><b>Kontak</b></label>
            <input type="text" placeholder="Masukkan tanggal lahir" name="kontak" required>

            <label for="uname"><b>Tanggal Registrasi</b></label>
            <input type="text" value="<?php echo date('l, d  F Y'); ?>" name="tanggal_daftar">
            <input type="hidden" value="<?php echo $_GET['email'];?>" name="email">
            <button type="submit">Simpan</button>
            <button type="reset" class="cancelbtn" style="width:100%;">Hapus</button>
        </div>
    </form>
    <br><br><br><br><br><br><br>
    <img src="images/registernowgif.gif" style="width: 360px; margin-left:20px; margin-right:20px;">
</div>