<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$pembayaran = $_POST['pembayaran'];

mysqli_query($koneksi, "
INSERT INTO pembelian
VALUES(
    '',
    '$nama',
    '$email',
    '$no_hp',
    '$pembayaran',
    CURRENT_TIMESTAMP
)
");

header("Location: success.html");

?>