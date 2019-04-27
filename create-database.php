<?php
    include "connect.php";

    $sql = "CREATE DATABASE db_latihan_soal";

    if ($connect->query($sql) === TRUE){
        echo "Database berhasil dibuat";
    } else {
        echo "Database gagal dibuat";
    }
?>
