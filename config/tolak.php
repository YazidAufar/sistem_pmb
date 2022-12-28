<?php
$id_pmb = $_GET['id_pmb'];
include "koneksi.php";
$sql = "UPDATE tb_pmb SET 
    keterangan='Tidak Lulus'   
    WHERE id_pmb='$id_pmb'";
if (mysqli_query($conn, $sql)) {
    echo "
    <script>
        alert('Data berhasil diperbarui.');
        window.location='../index.php?link=dashboard&level=admin';
    </script>
";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
