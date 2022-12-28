<?php
session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Penerimaan Siswa Baru</title>
    <link rel="stylesheet" href="config/css/style.css">
</head>

<body>
    <header>
        <div id="content-header">
            <div id="logo-header">
                <h3>PMB Sekolah</h3>
            </div>
            <div id="nav-header">
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li>
                        <?php
                        if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
                        ?>
                            <a href="index.php?link=registrasi">Registrasi</a> /
                            <a href="index.php?link=masuk">Masuk</a>
                        <?php }else{
                        ?>
                            <a href="config/proses-form/keluar.php">Keluar</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <section>
        <?php
        $link = "";
        if (isset($_GET['link'])) {
            $link = $_GET['link'];
        }
        switch ($link) {
            case "registrasi":
                include "pages/form-registrasi.php";
                break;
            case "datadiri":
                include "pages/form-data-diri.php";
                break;
            case "datadiri2":
                include "pages/form-data-diri2.php";
                break;
            case "pilihjurusan":
                include "pages/form-pilih-jurusan.php";
                break;
            case "selesaireg":
                include "pages/selesai-reg.php";
                break;
            case "dashboard":
                if (isset($_SESSION['email']) && $_SESSION['password'] && isset($_GET['level']) == 'admin') {
                    include "pages/dashboard.php";
                }
                break;
            case "detail":
                if (isset($_SESSION['email']) && $_SESSION['password'] && isset($_GET['level']) == 'admin') {
                    include "pages/detail.php";
                }
                break;
            case "dashboard_user":
                if (isset($_SESSION['email']) && $_SESSION['password'] && isset($_GET['level']) == 'user') {
                    include "pages/dashboard2.php";
                }
                break;
            case "infouser":
                if (isset($_SESSION['email']) && $_SESSION['password'] && isset($_GET['level']) == 'admin') {
                    include "pages/infouser.php";
                }
                break;
            default:
                include "pages/form-login.php";
                break;
        }
        ?>
    </section>
    <footer><br>Copyright &copy; 2021 Sistem Informasi Penerimaan Mahasiswa Baru</footer>
</body>

</html>