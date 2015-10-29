<html>
<head>
<title>Membaca file data mahasiswa</title>
</head>
<body>
<h1> Membaca Data mahasiswa dengan fgets()</h1>
<?php
	$fp = fopen("data_mhs.txt","r");
	
	while ($isi = fgets($fp, 30)){
		echo $isi."<BR>";
		}
	?>
</body>
</html>