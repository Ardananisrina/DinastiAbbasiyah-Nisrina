<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    include 'connect.php';

    $pilihan = $_REQUEST['pilihan'];
    if(!count($pilihan) >= 1){
      echo '<b>ANDA BELUM MEMILIH JAWABAN</b>';
      include 'soal.php';
      exit;
    }

    if(isset($_POST['submit'])){
      $pilihan = $_POST["pilihan"];
      $id_soal = $_POST["id"];
      $jumlah = $_POST['jumlah'];

      $score = 0;
      $benar = 0;
      $salah = 0;
      $kosong = 0;

      for ($i=0;$i<$jumlah;$i++){
        $nomor = $id_soal[$i];

        if(empty($pilihan[$nomor])){
          $kosong++;
        } else {
          $jawaban = $pilihan[$nomor];

          $query = "select * from soal where id_soal = '$nomor' and knc_jwbn = '$jawaban'";

          $cek = mysqli_num_rows($query);

          if($cek){
            $benar++;
          } else {
            $salah++;
          }
        }
        $result = mysqli_query("select * from soal where aktif = 'Y'");
        $jumlah_soal = mysqli_num_rows($result);
        $score = 100 / $jumlah_soal * $benar;
        $hasil = number_format($score,1);
      }
    }

    echo "
        <tr><td> Jumlah Jawaban Benar</td></tr> : $benar </td></tr>
        <tr><td> Jumlah Jawaban Salah</td></tr> : $salah </td></tr>
        <tr><td> Jumlah Jawaban Kosong</td></tr> : $kosong </td></tr>
    </table></div>";
     ?>

  </body>
</html>
