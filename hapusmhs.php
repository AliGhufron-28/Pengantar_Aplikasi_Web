<?php
require "functionmhs.php";
$no = $_GET["no"];

if ( hapus($no) > 0 ){
    echo "
            <script>
                alert('data berhasil di hapus');
                document.location.href = 'koneksimhs.php';
            </script>
        ";
}else {
    echo "
        <script>
            alert('data gagal di hapus');
            document.location.href = 'koneksimhs.php';
        </script>
    ";
}



?>