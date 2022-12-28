<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pmb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo '
        <script>
        alert("Tidak dapat terhubung ke db_pmb");
        </script>
    ';
}