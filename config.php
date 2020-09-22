<?php
//BUAT KONEKSI KE DB
$koneksi = mysqli_connect("localhost","crud","crud1234","crud");

//CEK KONEKSI DB, PESAN ERROR
if (mysqli_connect_errno()){
    echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_errno();
}
?>