<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_latihan_soal";
$conn = mysqli_connect($servername, $username, $password, $dbname);

echo "<div style='width:100%; border: 1px solid #EBEBEB; overflow: scroll; height: 700px;'>";
echo '<table width="100%" border="0">';

$sql = "select * from soal WHERE aktif='Y' ORDER BY RAND ()";
$hasil = mysqli_query($conn, $sql);
$jumlah = mysqli_num_rows($hasil);
$urut = 0;

while($row = mysqli_fetch_array($hasil)){
  $id = $row["id_soal"];
  $pertanyaan = $row["soal"];
  $pilihan_a = $row["a"];
  $pilihan_b = $row["b"];
  $pilihan_c = $row["c"];
  $pilihan_d = $row["d"];
?>

<form name="form1" action="jawab2.php" method="post">
  <input type="hidden" name="id[]" value="<?php echo $id; ?>">
  <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
  <tr>
    <td width="17"><font color="#000000"><?php echo $urut = $urut + 1; ?></font></td>
    <td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
  </tr>
  <?php
  if (!empty ($row['gambar'])){
    echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' height='200'></td></tr>";
  }
  ?>
  <tr>
    <td height="21"><font color="#000000">&nbsp;</font></td>
    <td><font color="#000000">
    A. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A">
    <?php echo "$pilihan_a"; ?></font></td>
  </tr>
  <tr>
    <td height="21"><font color="#000000">&nbsp;</font></td>
    <td><font color="#000000">
    B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B">
    <?php echo "$pilihan_b"; ?></font></td>
  </tr>
  <tr>
    <td height="21"><font color="#000000">&nbsp;</font></td>
    <td><font color="#000000">
    C. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C">
    <?php echo "$pilihan_c"; ?></font></td>
  </tr>
  <tr>
    <td height="21"><font color="#000000">&nbsp;</font></td>
    <td><font color="#000000">
    D. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D">
    <?php echo "$pilihan_d"; ?></font></td>
  </tr>

<?php
}
?>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="KIRIM" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
  </tr>
</table>
</form>
