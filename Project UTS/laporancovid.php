<?php

$nama_wilayah = $_POST['nama_wilayah'];

$waktu = date("d-m-y | H:i:s");

$jumlah_positif=$_POST['jumlah_positif'];

$jumlah_dirawat=$_POST['jumlah_dirawat'];

$jumlah_sembuh=$_POST['jumlah_sembuh'];

$jumlah_meninggal=$_POST['jumlah_meninggal'];

$nama_operator = $_POST['nama_operator'];

$nim = $_POST['nim'];

$nf = "data.txt";

$fp = fopen($nf,"r+");

$data = fgets ($fp,50);

$comfile = file($nf);

rewind($fp);

fwrite($fp,



"<p style=text-align:center> Data Pemantauan Covid19 wilayah $nama_wilayah</p>
<p style=text-align:center> Per $waktu</p>
<p style=text-align:center> $nama_operator / $nim</p>

<table border=1 width=600px align=center>

       <thead>

        <tr>

           <th>Positif</th>

           <th>Dirawat</th>

           <th>Sembuh</th>

           <th>Meninggal</th>
       
        </tr>

       </thead>


       <tbody>

       <tr>

           <td>$jumlah_positif</td>

           <td>$jumlah_dirawat</td>

           <td>$jumlah_sembuh</td>

           <td>$jumlah_meninggal</td>

       </tr>

");
for ($i = 0; $i < 999; $i++)

{

fwrite ($fp, $comfile[$i]);

}

fclose ($fp);

if ($_POST['submit']) {

header ("location: input.php");

}

?>

<?php

$file = "jumlah.txt";

$open = fopen($file,"r+");

$counter=fread($open,filesize($file));

fclose($open);

$counter++;

$write=fopen($file,'w');

fputs($write,$counter);

fclose($write);

?>
