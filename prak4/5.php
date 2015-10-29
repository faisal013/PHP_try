<html>
<head>
<title> Menulis data</title>
</head>
<body>
<h1>menulis data dengan fputs()</h1>
<?php
	$namafile = "try.txt";
	$data = "lab. kom. digital, PENS ITS, surabaya \n";
	
	$fp = fopen($namafile, "w");
	fputs ($fp, $data);
	echo "<br> berhasil menulis : $data";
	
	fputs ($fp, $data);
	echo "<br> berhasil menulis : $data";
	fclose ($fp);
?>
<hr>
sukses membuat file teks dengan nama: 
<?php
	echo $namafile;
?>
<br>
</body>
</html>