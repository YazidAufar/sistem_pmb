<?php
    include "../koneksi.php";
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

    $sql = "UPDATE tb_pmb SET 
            tempat_lahir='$tempat_lahir',
            tanggal_lahir='$tanggal_lahir',
            jenis_kelamin='$jenis_kelamin',
            alamat='$alamat'            
            WHERE email='$email'";
    if (mysqli_query($conn, $sql)) {
        echo"
            <script>
                alert('Data disimpan. Lanjutkan!');
                window.location='../../index.php?link=datadiri2&email=$email';
            </script>
        ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
