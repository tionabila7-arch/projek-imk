<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "rumah_impian"
);

if(!$koneksi){
    die("Koneksi gagal");
}

?>