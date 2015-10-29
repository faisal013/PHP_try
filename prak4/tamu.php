<html>
<body bgcolor="#2E43F7">
<h1>BUKU TAMU</h1>
<table>
<form name="tamu" method="post" action="tamu.php">

<br>
nama: <input type="text" name="nama" id="textfield">
</br>

<br>
email: <input type="text" name="email" id="textfield">
</br>

<td> comentar</td>
<td>:</td>
<tr>
<td> <textarea size="23" rows="10" name="coment" ></textarea> </td>
</tr>
<td colspan ="2"></td>
<td><input type="submit" name="button" id="button" value="submit"/></td>
</br>
</form>
</table>
<?php

if (isset($_POST['nama'])){	
$nama	= $_POST['nama'];
$email	= $_POST['email'];
$coment = $_POST['coment'];

 $namafile = "tamu.txt";
 $data = "$nama $email $coment \n";
 
 $fp = fopen ($namafile, "a");
 fputs ($fp, $data);
 
 $fp = fopen($namafile, "r");
 while($isi = fgets($fp, 50)){
	 echo "$isi <br>";
 }
}
?>
</body>
</html>