<?php
    session_start();
    include "../koneksi.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = mysqli_query($conn,"SELECT * FROM tb_pmb WHERE email='$email' && password='$password'");
    $data = mysqli_fetch_assoc($sql_query);
    $dbemail = $data['email'];
    $dbpassword = $data['password'];

    if ($email == 'admin' AND $password == $dbpassword) {
        $_SESSION['email'] = 'admin';
        $_SESSION['password'] =  $password;
        echo"
            <script>
            alert('Login berhasil. Selamat datang, $email!');
                window.location='../../index.php?link=dashboard&level=admin';
            </script>
        ";
    } else if($email == $dbemail AND $password == $dbpassword){
        $_SESSION['email'] = $email;
        $_SESSION['password'] =  $password;
        echo"
            <script>
                alert('Login berhasil. Selamat datang, $email!');
                window.location='../../index.php?link=dashboard_user&level=user';
            </script>
        ";
    } else{
        echo"
            <script>
                alert('Akun tidak dikenal. Silakan login kembali!');
                window.location='../../index.php?link=login';
            </script>
        ";
    }
?>