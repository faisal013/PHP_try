<?php
$sisi=$_POST['sisi']; //variabel inputan
$hasil=$_POST; //variabel hasil
$hasil=$sisi*$sisi;
?>

<html>
<body>
<h1> luas persegi </h1>

<form name="form1" method="post" action="">
<br>
sisi: <input type="text" name="sisi" id="textfield">
</br>
<br>
hasil:<?php echo $hasil; ?>
</br>
<br>
<input type="submit" name="button" id="button" value="count">
</br>

</form>
</body>
<html>