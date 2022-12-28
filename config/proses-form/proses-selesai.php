<?php
    include "../koneksi.php";
    $email = $_POST['email'];

    $sql = "UPDATE tb_pmb SET 
            validasi='valid'     
            WHERE email='$email'";
    if (mysqli_query($conn, $sql)) {
        echo"
            <script>
                alert('Pendaftaran selesai. Silakan masuk/login ulang!');
                window.location='../../index.php?link=login';
            </script>
        ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
