<?php
    include "../koneksi.php";
    $jurusan1 = $_POST['jurusan1'];
    $jurusan2 = $_POST['jurusan2'];
    $email = $_POST['email'];

    $sql = "UPDATE tb_pmb SET 
            jurusan1='$jurusan1',
            jurusan2='$jurusan2'     
            WHERE email='$email'";
    if (mysqli_query($conn, $sql)) {
        echo"
            <script>
                alert('Data disimpan. Silakan pilih jurusan.');
                window.location='../../index.php?link=selesaireg&email=$email';
            </script>
        ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
