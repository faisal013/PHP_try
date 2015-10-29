<html>
<head>
<title> Membaca file data mahasiswa</title>
</head>
<body>
<h1>membaca data mahasiswa dengan fscanf()</h1>
<?php
	$fp = fopen ("data_mhs.txt","r");
	
	while (list($nama, $nrp)= fscanf($fp, "%s\t%s\n")){
	echo $nama." . ".$nrp."<br>";
	}
?>
</body>
</html>