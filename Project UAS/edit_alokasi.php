<?php
include "connection.php";
$id = $_POST['id'];
$jenis_alokasi;
if(isset($_POST['jenis_alokasi'])) {
    $jenis_alokasi = $_POST['jenis_alokasi'];
} else {
    $jenis_alokasi = $_POST['temp_alokasi'];
}
$dana = $_POST['dana'];
$nama_lengkap = $_POST['nama_lengkap'];
$no_handphone = $_POST['no_handphone'];
$email = $_POST['email'];
$update="UPDATE alokasi SET jenis_alokasi='$jenis_alokasi', dana='$dana',
nama_lengkap='$nama_lengkap', no_handphone='$no_handphone', email='$email' WHERE id ='$id'";
if (mysqli_query($db, $update)) {
    header('Location: home.php');
} else {
 echo "alokasi gagal di update";
 echo "$id";
  echo "$jenis_alokasi";
  echo "$dana";
  echo "$nama_lengkap";
  echo "$no_handphone";
  echo "$email";
}
?>