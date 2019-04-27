<?php
    include "connect.php";

    $sql = "CREATE TABLE soal(
      id_soal int PRIMARY KEY,
      soal text(50),
      a varchar(50),
      b varchar(50),
      c varchar(50),
      d varchar(50),
      knc_jwbn varchar(50),
      gambar varchar(50),
      tanggal date,
      aktif enum('Y', 'N') default 'Y'
    )";

    if ($connect->query($sql) == TRUE){
      echo "Tabel berhasil dibuat";
    } else {
      echo "Tabel gagal dibuat";
    }
?>
