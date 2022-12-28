<?php
    include "../koneksi.php";
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "INSERT INTO tb_pmb (
        nama, 
        email,
        password
    )
    VALUES (
        '$nama', 
        '$email',
        '$password'
    )";
    if (mysqli_query($conn, $sql)) {
        echo"
            <script>
                alert('Registrasi berhasil. Lanjut untuk melengkapi data diri!');
                window.location='../../index.php?link=datadiri&email=$email';
            </script>
        ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
