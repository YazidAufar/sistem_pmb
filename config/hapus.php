<?php
    include "koneksi.php";
    $id_pmb = $_GET['id_pmb'];
    $sql = "DELETE FROM tb_pmb WHERE id_pmb=$id_pmb";

    if (mysqli_query($conn, $sql)) {
        echo"
            <script>
                alert('Data berhasil dihapus.');
                window.location='../index.php?link=dashboard&level=admin';
            </script>
        ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>