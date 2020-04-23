<html>
<head>
<title>Input Data</title>
</head>

<body>

<form action="laporancovid.php" method="post" enctype="multipart/form-data" name="form1">
<table width="1000" border="0" align="center" cellpadding="2" cellspacing="2">
<tr>
<td width="15%">Nama Wilayah</td><td>
    <select name="nama_wilayah">
        <option value="DKI Jakarta">DKI Jakarta</option>
        <option value="Jawa Barat">Jawa Barat</option>
        <option value="Banten">Banten</option>
        <option value="Jawa Tengah">Jawa Tengah</option>
    </select>
</td></tr>

<tr><td width="15%">Jumlah Positive</td>
    <td width="100%"><input name="jumlah_positif" type="text" id="jumlah_positif" size="20">
</td></tr>

<tr><td width="15%">Jumlah Dirawat</td>
    <td width="91%"><input name="jumlah_dirawat" type="text" id="jumlah_dirawat" size="20">
</td></tr>

<tr><td width="15%">Jumlah Sembuh</td>
    <td width="91%"><input name="jumlah_sembuh" type="text" id="jumlah_sembuh" size="20">
</td></tr>

<tr><td width="15%">Jumlah Meninggal</td>
    <td width="91%"><input name="jumlah_meninggal" type="text" id="jumlah_meninggal" size="20">
</td></tr>

<tr><td width="15%">Nama Operator</td>
    <td width="91%"><input name="nama_operator" type="text" id="nama_operator" size="20">
</td></tr>

<tr><td width="15%">NIM</td>
    <td width="91%"><input name="nim" type="text" id="nim" size="20">
</td></tr>

<tr>

<td>&nbsp;</td>

<td><input type="submit" value="Submit" name="submit">

<input type="reset" value="Reset" name="reset"></td>

</tr>

</table>

</form>

<p align="center"><br>

<br>

<?php

$file = "jumlah.txt";

$fp = fopen($file,"r");

if ($fp)

{

$baca = fgets($fp,50);

print ("$baca");

}

fclose($fp);

?>

data<?php

$file = "data.txt";

$fp = fopen($file,"r");

while (!feof($fp))

{

$baca = fgets($fp,50);

print("$baca");

}

fclose($fp);

?>

</p>

<p>&nbsp;</p>

</body>

</html>