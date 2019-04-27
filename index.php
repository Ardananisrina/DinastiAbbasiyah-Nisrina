<html>
<head>
	<title>Dinasti Abbasiyah</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="menu">
    <ul>
      <li><a href="index.php?page=Beranda">BERANDA</a></li>
      <li><a href="index.php?page=Materi">MATERI</a></li>
      <li><a href="index.php?page=Latihan Soal">SOAL</a></li>
    </ul>
  </div>

	<div class="header">
		<h1>ILMUWAN ISLAM</h1>
		<h1>Pada Masa Dinasti Bani Abbasiyah</h1>
	</div>

	<?php
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'Beranda':
				include "Beranda.php";
				break;
			case 'Materi':
				include "Materi.php";
				break;
			case 'Latihan Soal':
				include "Latihan Soal.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "Beranda.php";
	}

	 ?>
</div>
</body>
</html>
