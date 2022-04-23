<?php
require "functions.php";

$id= $_GET["id_003"]; // mengambil data id dari url

$dta = query("SELECT * FROM tbl_003 WHERE id_003 = $id")[0]; //query data berdasarkan id

if (isset($_POST["submit"])){
    
    if ( ubah($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'tampil.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'tampil.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<head>
    <title>Ubah Data</title>
</head>
<body>
    <h1>Form Ubah Data</h1>
    <form action="" method="POST">
        <input type="hidden" name="id_003" value="<?= $dta["id_003"];?>">
        <ul>
            <li>
                <label for="nama_003" >Nama_003</label>
                <input type="text" name="nama_003" id="nama_003"
                value="<?= $dta["nama_003"];?>">
            </li>
            <br>

            <li>
                <label for="email_003">Email_003</label>
                <input type="text" name="email_003" id="email_003"
                value="<?= $dta["email_003"];?>">
            </li>
            <br>

            <br>
            <button type="submit" name="submit">Ubah Data</button>
        </ul>
    </form>
</body>
</html>