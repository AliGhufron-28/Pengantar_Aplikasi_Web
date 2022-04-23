<?php
require "functions.php";

if (isset($_POST["submit"])){    //cek dari method post dengan key submit apakah sudah di tekan
    
    if ( tambah($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil di tambah');
                document.location.href = 'tampil.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('data gagal di tambah');
                document.location.href = 'tampil.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h1>Form Tambah Data</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama_003" >Nama_003</label>
                <input type="text" name="nama_003" id="nama_003">
            </li>
            <br>

            <li>
                <label for="email_003" >Email_003</label>
                <input type="text" name="email_003" id="email_003">
            </li>

            <br>
            <button type="submit" name="submit">simpan</button>
        </ul>
    </form>
</body>
</html>