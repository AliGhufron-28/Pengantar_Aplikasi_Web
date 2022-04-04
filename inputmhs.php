<?php
require "functionmhs.php";

if (isset($_POST["submit"])){
    
    if ( tambah($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil di tambah');
                document.location.href = 'koneksimhs.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('data gagal di tambah');
                document.location.href = 'koneksimhs.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Tambah Data Mahasiswa</h1>
    <div class="container">
        <div class="card">
        <div class="card-header bg-primary text-white">
            Form Input Data Mahasiswa
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="nim" >NIM </label>
                    <input type="text" name="nim" id="nim" class="form-control"required>
                </div>

                <div class="form-group">
                    <label for="nama" >Nama </label>
                    <input type="text" name="nama" id="nama" class="form-control"required>
                </div>

                <div class="form-group">
                    <label for="fakultas" >Fakultas </label>
                    <input type="text" name="fakultas" id="fakultas" class="form-control"required>
                </div>

                <div class="form-group">
                    <label for="jurusan" >Jurusan </label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control"required>
                </div>

                <div class="form-group">
                    <label for="provinsi" >Provinsi </label>
                    <input type="text" name="provinsi" id="provinsi" class="form-control"required>
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-success">Tambah Data</button>
            </form>
        </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
</body>
</html>