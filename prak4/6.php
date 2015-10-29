<html>
<head>
<title> membaca file data mahasiswa</title>
</head>
<body>
<h1> membaca dat mahasiswa dengan readfile()</h1>
<?php
	$isi = readfile ("data_mhs.txt");
	echo $isi;
?>
</body>
</html>