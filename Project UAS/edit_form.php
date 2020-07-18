
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
     <link rel="stylesheet" href="assets/css/styles.css" />
     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<?php
include "connection.php";
include "header.php";
?>
<?php
$id_relawan = $_GET['id_relawan'];
$query="SELECT * FROM alokasi WHERE id =\"$id_relawan\"";
$result=mysqli_query($db,$query);
$row= $result -> fetch_array(MYSQLI_ASSOC);
?>
<div class="container">
<h1>Form Edit</h1>
<form action="edit_alokasi.php" method="post">
    <div class="form-group">
    <label for="exampleInputPassword1">Jenis Alokasi</label>
    <select name="jenis_alokasi" class="form-control" id="exampleFormControlSelect1">
    <option disabled selected> <?php echo " $row[jenis_alokasi]" ?> </option>
    <?php
     $jenis_alokasi = [
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
        foreach ($jenis_alokasi as $value) {
            echo "<option value=$value>$value</option>";
        }
      ?>  
    </select>
    <div class="form-group">
    <label for="exampleInputPassword1">Dana</label>
    <input name="dana" type="text" class="form-control" id="exampleInputPassword1" placeholder="dana" value="<?php echo " $row[dana]" ?>">
  </div>
<input type="hidden" name="id" value="<?php echo " $row[id]" ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="<?php echo " $row[nama_lengkap]" ?>">
  </div>
  
  </div>
  <input type="hidden" name="temp_alokasi" value="<?php echo " $row[jenis_alokasi]"; ?>">

  <div class="form-group">
    <label for="exampleInputPassword1">No Handphone</label>
    <input name="no_handphone" type="text" class="form-control" id="exampleInputPassword1" placeholder="No Handphone" value="<?php echo " $row[no_handphone]"; ?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input name="email" type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" value="<?php echo " $row[email]"; ?>">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>