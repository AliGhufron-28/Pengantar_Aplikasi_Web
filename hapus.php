<?php 
require "functions.php";
$id = $_GET["id_003"];

if ( hapus($id) > 0 ){
    echo "
            <script>
                alert('data berhasil di hapus');
                document.location.href = 'tampil.php';
            </script>
        ";
}else {
    echo "
        <script>
            alert('data gagal di hapus');
            document.location.href = 'tampil.php';
        </script>
    ";
}
?>