<div id="form-registrasi">
    <h2 style="color: #1a355b; margin-top:20px;"> Registrasi Akun
        <span style="color: #c4c4c4;">&raquo; Data Diri</span>
        <span style="color: #c4c4c4;">&raquo; Pilih Jurusan</span>
        <span style="color: #c4c4c4;">&raquo; Selesai</span>
    </h2>
    <br>
    <form action="config/proses-form/proses-registrasi.php" method="post" style="width: 575px; max-height:450px; float:left;">
        <div class="container" style="padding: 30px;">
            <label for="uname"><b>Nama Lengkap</b></label>
            <input type="text" placeholder="Masukkan nama lengkap" name="nama" required>

            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Masukkan email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Masukkan password" name="pass" required>

            <button type="submit">Lanjutkan</button>
            <button type="reset" class="cancelbtn" style="width:100%;">Hapus</button>
        </div>
    </form>
    <br><br><br><br><br><br><br>
    <img src="images/registernowgif.gif" style="width: 360px; margin-left:20px; margin-right:20px;">
</div>