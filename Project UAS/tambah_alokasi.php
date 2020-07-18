<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
     <link rel="stylesheet" href="assets/css/styles.css" />
     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<?
include "connection.php";
include "header.php";

?>
<div class="container">
<h1>Form Bantuan</h1>
<p></p>

<form action="submit.php" method="post">
     <div class="form-group">
    <label for="exampleInputPassword1">Jenis Alokasi</label>
    <select name="jenis_alokasi" class="form-control" id="exampleFormControlSelect1">
    <?php
    $jenisalokasi = [
        'Alat Pelindung Diri'
        ,
        'Logistik Mahasiswa'
        ,
        'Bantuan Kouta Mahasiswa'
        ,
        'Handsantizer'
        ,
        'Sembako Masyarakat'
        ,
];
        foreach ($jenisalokasi as $value) {
            echo "<option value=$value>$value</option>";
        }
      ?>
    </select>
     </div>
     <div class="form-group">
    <label for="exampleInputPassword1">Jumlah Dana</label>
    <input name="dana" type="number" class="form-control" id="exampleInputPassword1" placeholder="Rp.">
  </div>
<input type="hidden" name="id" value="<? echo " $row[id]" ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Handphone</label>
    <input name="no_handphone" type="number" class="form-control" id="exampleInputPassword1" placeholder="No Handphone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input name="email" type="text" class="form-control" id="exampleInputPsword1" placeholder="Email">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>