<?php
$conn = mysqli_connect("localhost","root","","ghufron");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nim = $data["nim"];
    $nama = $data["nama"];
    $fakultas = $data["fakultas"];
    $jurusan = $data["jurusan"];
    $provinsi = $data["provinsi"];

    $query = "INSERT INTO tbl_003
                VALUES
                ('','$nim','$nama','$fakultas','$jurusan','$provinsi')
            ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function hapus($no){
    global $conn;
    mysqli_query($conn,"DELETE FROM tbl_003 WHERE $no = no");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $no = $data["no"];
    $nim = $data["nim"];
    $nama = $data["nama"];
    $fakultas = $data["fakultas"];
    $jurusan = $data["jurusan"];
    $provinsi = $data["provinsi"];

    $query = "UPDATE tbl_003 SET
                nim = '$nim',
                nama = '$nama',
                fakultas = '$fakultas',
                jurusan = '$jurusan',
                provinsi = '$provinsi'
            WHERE no = $no
            ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn); 
}

function cari($keyword){
    $query = "SELECT * FROM tbl_003
                WHERE
                nama LIKE '%$keyword%' OR
                nim LIKE '%$keyword%' OR
                fakultas LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' OR
                provinsi LIKE '%$keyword%'
            ";
    return query($query);
}

?>

