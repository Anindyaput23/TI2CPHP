<?php
$server ="127.0.0.1";
$user = "root";
$password = "";
$database = "db_siswa";

$db = mysqli_connect($server, $user, $password, $database);
if(!$db){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}else {
    echo "Berhasil terkoneksi....";
}
?>