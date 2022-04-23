<?php 
$conn = mysqli_connect("localhost","root","","db_ghufron");

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

    $nama_003 = $data["nama_003"];
    $email_003 = $data["email_003"];

    $query = "INSERT INTO tbl_003
                VALUES
                (' ','$nama_003','$email_003')
            ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn); //return apakah berhasil atau tidak
}

function ubah($data) {
    global $conn;

    $id = $data["id_003"];
    $nama_003 = $data["nama_003"];
    $email_003 = $data["email_003"];

    $query = "UPDATE tbl_003 SET
                nama_003 = '$nama_003',
                email_003 = '$email_003'
            WHERE id_003 = $id
            ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn); 
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM tbl_003 WHERE $id = id_003");

    return mysqli_affected_rows($conn);
}
?>