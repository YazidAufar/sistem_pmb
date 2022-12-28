<style>
    .aksi {
        color: #777;
    }

    #tbpeserta {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        max-height:400px; 
        overflow-y:scroll;
    }

    #tbpeserta td,
    #tbpeserta th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #tbpeserta tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customtbpesertaers tr:hover {
        background-color: #ddd;
    }

    #tbpeserta th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
</style>
<div id="form-registrasi">
    <h2 style="color: #1a355b; margin-top:30px; text-align:center; "> Informasi Pendaftaran |
    <a href="index.php?link=infouser&level=admin" style="color: #777; font-size:24px;"> Informasi User</a>
    </h2>
    <br>
    <form action="config/proses-form/proses-registrasi.php" method="post" style="width: 980px; float:left;">
        <div class="container" style="padding: 30px;">
            <h3>Data Pendaftar | 
                <a href="" onclick="window.print()" style="color: #777;"> Cetak</a>
            </h3>
            <table id="tbpeserta">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
                <?php
                include "config/koneksi.php";
                $sql_query = mysqli_query($conn, "SELECT * FROM tb_pmb WHERE nama!='admin'");
                $no = 1;
                while ($row = mysqli_fetch_assoc($sql_query)) {
                    $keterangan = "Sedang diseleksi";
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row["nama"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["keterangan"]; ?></td>
                        <td>
                            <a class="aksi" href="config/terima.php?id_pmb=<?php echo $row["id_pmb"]; ?>">Terima</a>
                            |
                            <a class="aksi" href="config/tolak.php?id_pmb=<?php echo $row["id_pmb"]; ?>">Tolak</a>
                            |
                            <a class="aksi" href="index.php?link=detail&level=admin&id_pmb=<?php echo $row["id_pmb"]; ?>">Detail</a>
                            |
                            <a class="aksi" href="config/hapus.php?id_pmb=<?php echo $row["id_pmb"]; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </form>
</div>