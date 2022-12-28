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
        <span style="color: #c4c4c4;">&raquo; Data Diri</span>
        <span style="color: #1a355b;">&raquo; Pilih Jurusan</span>
        <span style="color: #c4c4c4;">&raquo; Selesai</span>
    </h2>
    <br>
    <form action="config/proses-form/proses-jurusan.php" method="post" style="width: 575px; max-height:450px; float:left;">
        <div class="container" style="padding: 30px;">
            <label for="uname"><b>Pilihan Jurusan I</b></label>
            <select id="kelamin" name="jurusan1">
                <option>--Jurusan 1--</option>
                <option value="Teknik Komputer & Jaringan">Teknik Komputer & Jaringan</option>
                <option value="Teknik Otomotif">Teknik Otomotif</option>
                <option value="Teknik Survey Pemetaan">Teknik Survey Pemetaan</option>
                <option value="Akuntansi">Akuntansi</option>
            </select>

            <label for="uname"><b>Pilihan Jurusan II</b></label>
            <select id="kelamin" name="jurusan2">
                <option>--Jurusan 2--</option>
                <option value="Teknik Komputer & Jaringan">Teknik Komputer & Jaringan</option>
                <option value="Teknik Otomotif">Teknik Otomotif</option>
                <option value="Teknik Survey Pemetaan">Teknik Survey Pemetaan</option>
                <option value="Akuntansi">Akuntansi</option>
            </select>

            <label for="uname"><b>Keterangan</b></label>
            <textarea placeholder="Keterangan pelengkap sebagai penjelas "></textarea>
            <input type="hidden" value="<?php echo $_GET['email'];?>" name="email">
            <button type="submit">Simpan</button>
            <button type="reset" class="cancelbtn" style="width:100%;">Hapus</button>
        </div>
    </form>
    <br><br><br><br><br><br><br>
    <img src="images/registernowgif.gif" style="width: 360px; margin-left:20px; margin-right:20px;">
</div>