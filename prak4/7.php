<html>
<head>
<title> Demo periksa file</title>
</head>
<body>
<h1> Demo periksa file</h1>
<?php
	$namafile = "try.txt";
	
	if (file_exists($namafile))
	echo "$namafile SUDAH ADA";
	
	else
	
	echo "$namafile BELUM ADA";
?>
</body>
</html>