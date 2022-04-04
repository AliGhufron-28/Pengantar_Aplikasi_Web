<?php
require 'functionmhs.php';
$data = query("SELECT * FROM tbl_003");

if (isset($_POST["cari"])){
    $data = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<head>
    <title>Menampilkan Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">Data Mahasiswa</h1>
    <div class="container">
    <a class="btn btn-success" href="inputmhs.php">Tambah Data Mahasiswa</a>
    <form action="" method="post">

        <input type="text" name="keyword" size="30" autofocus
        placeholder="masukan keyword pencarian" autocomplete="off"> 
        <button type="submit" name="cari" class="btn btn-primary">Cari Data</button>

    </form>
        <div class="card">
            <div class="card-header bg-success text-white">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Fakuktas</th>
                    <th>Jurusan</th>
                    <th>Provinsi</th>
                    <th>Aksi</th>
                </tr>
        
                <?php foreach($data as $hasil) : ?>
                <tr>
                    <td><?= $hasil["no"]; ?></td>
                    <td><?= $hasil["nim"]; ?></td>
                    <td><?= $hasil["nama"]; ?></td>
                    <td><?= $hasil["fakultas"]; ?></td>
                    <td><?= $hasil["jurusan"]; ?></td>
                    <td><?= $hasil["provinsi"]; ?></td>
                    <td>
                        <a class="btn btn-warning" href="ubahmhs.php?no=<?=$hasil["no"];?>">ubah</a> |
                        <a class="btn btn-danger" href="hapusmhs.php?no=<?=$hasil["no"];?>" onclick="return confirm('Apakah Anda Yakin?');">hapus</a>
                    </td>
                </tr>
                
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
</body>
</html>
