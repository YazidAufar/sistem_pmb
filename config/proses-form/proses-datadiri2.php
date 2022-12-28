<?php
    include "../koneksi.php";
    $kota = $_POST['kota'];
    $kontak = $_POST['kontak'];
    $tanggal_daftar = $_POST['tanggal_daftar'];
    $email = $_POST['email'];

    $sql = "UPDATE tb_pmb SET 
            kota='$kota',
            kontak='$kontak',
            tanggal_daftar='$tanggal_daftar'          
            WHERE email='$email'";
    if (mysqli_query($conn, $sql)) {
        echo"
            <script>
                alert('Data diri disimpan. Silakan pilih jurusan.');
                window.location='../../index.php?link=pilihjurusan&email=$email';
            </script>
        ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
