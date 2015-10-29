<html>
<head>
<title> Membaca file mahasiswa</title>
</head>
<body>
<h1> Membaca data mahasiswa dengan fread()</h1>
<?php
	$fp = fopen ("data_mhs.txt","r");
	
	while ($isi = fread($fp, 25)){
		echo $isi."<br>";
		}
	?>
	</body>
	</html>