<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "db_latihan_soal";

    $connect = new mysqli($host, $username, $password, $db);

    if ($connect->connect_error){
      die("Koneksi ke database gagal");
    }
?>
