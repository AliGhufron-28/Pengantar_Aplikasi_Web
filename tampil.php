<?php
require 'functions.php';
$data = query("SELECT * FROM tbl_003");

?>
<!DOCTYPE html>
<head>
    <title>menampilkan database</title>
</head>
<body>
    <h1>Daftar Isi Table</h1>
    <a href="input.php">Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No</th>
            <th>Nama_003</th>
            <th>Email_003</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach($data as $hasil) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $hasil["nama_003"]; ?></td>
            <td><?= $hasil["email_003"]; ?></td>
            <td>
                <a href="ubah.php?id_003=<?= $hasil["id_003"];?>">ubah</a> |
                <a href="hapus.php?id_003=<?= $hasil["id_003"];?>"
                onclick="return confirm('Apakah Anda Yakin?');">hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        
    </table>
</body>
</html>