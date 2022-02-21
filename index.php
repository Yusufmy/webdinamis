<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web Dinamis</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="content">
		<header>
       <h1 class="judul">SMK Wikrama Bogor</h1>
	   <h3 class="deskripsi">Membuat Biodata</h3>
       </header>   
	</div>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=profil">Profil Diri</a></li>
			<li><a href="index.php?page=tentang">Tentang</a></li>
			<li><a href="index.php?page=kontak">Kontak</a></li>
		</ul>
	</div>

	<div class="konten">
		<?php
		if(isset($_GET['page']))
		   {
              $halaman = $_GET['page'];
			  switch ($halaman)
			  {
				case 'profil':
					include "halaman/profil.php";
					break;
				case 'tentang':
					include "halaman/tentang.php";
					break;
				case 'kontak':
				    include "halaman/kontak.php";
					break;
			  }
		   }
		   else
		   {

		   }
		?>
	</div>
</body>
</html>