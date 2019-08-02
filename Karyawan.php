<?php

$koneksi = mysqli_connect("127.0.0.1", "root", "", "belajar1");

$ambildata = mysqli_query($koneksi, "SELECT * FROM karyawan");

#var_dump($ambildata);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Divisi IT</title>
    </head>
    <body>
        <table border="2" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Bagian</th>
            </tr>

        <?php $id = 1; ?>
        <?php while ($data = mysqli_fetch_assoc($ambildata)) { ?>
            
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $data["NIK"]; ?></td>
                <td><?php echo $data["Nama"]; ?></td>
                <td><?php echo $data["Email"]; ?></td>
                <td><?php echo $data["Bagian"]; ?></td>
            </tr>
           <?php $id++; ?>
        <?php } ?>
        </table>
    </body>
</html>