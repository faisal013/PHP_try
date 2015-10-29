<html>
<head>
<title> Membaca file data mahasiswa</title>
</head>
<body>
<h1>membaca data mahasiswa dengan fgetc()</h1>
Statistik file : data_mhs.txt
<br>
<?php
	$fp = fopen ("data_mhs.txt","r");
	$huruf = 0;
	$baris = 1;
	
	while (!feof($fp)){
	$ch = fgetc($fp);
	if ((#ch != " ") && ($ch != "\n")&&($ch != "\t"))
	$huruf++;
		
	if ($ch == "\n")
	$baris++;
	}
	
	echo "<br>";
	echo "jumlah huruf : $huruf";
	echo "<br>";
	echo "jumlah baris : $baris";
	?>
</body>
</html>