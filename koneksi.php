<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'db_aldi';
$koneksi = mysqli_connect($host, $username, $password, $db);

if ($koneksi) {
    echo "koneksi berhasil";
}
mysqli_select_db($koneksi, $db);


?>
