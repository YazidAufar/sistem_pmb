<div id="form-login">
    <h2 style="color: #fff;">Selesai daftar</h2>

    <form action="config/proses-form/proses-selesai.php" method="post">
        <div class="container" style="text-align: center; padding-top:50px; padding-bottom:50px;">
            <img src="images/final_step.png" style="width: 200px;"><br>
            <label for="uname">Dengan menekan tombol ini, saya menyatakan setuju data pendaftaran ini disimpak ke sistem.</label>
            <input type="hidden" value="<?php echo $_GET['email'];?>" name="email">
            <button type="submit" style="margin-top: 45px;">Selesai & Simpan</button>
        </div>
    </form>
</div>

<div id="content">
    <img src="images/registrasi_siswa.jpg" style="width: 633px;">
    <p style="margin-top: 20px;">11 Juni - 31 Juli 2021</p>
    <h2>Selesaikan pendaftaran kamu!</h2>
</div>