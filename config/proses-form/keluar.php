<?php

session_start();
session_destroy();
echo "
    <script>
        alert('Anda telah logout dari sistem penerimaan!'); 
        window.location = '../../index.php?link=masuk'</script>
    ";
?>
