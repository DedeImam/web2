<?php
include "connection.php";
$jenis_alokasi = $_POST['jenis_alokasi'];
$dana = $_POST['dana'];
$nama_lengkap = $_POST['nama_lengkap'];
$no_handphone = $_POST['no_handphone'];
$email = $_POST['email'];


$query = "INSERT INTO alokasi(jenis_alokasi,dana,nama_lengkap,no_handphone, email)
 VALUES ('$jenis_alokasi','$dana','$nama_lengkap','$no_handphone', '$email')";

if (mysqli_query($db, $query)) {
    header('Location: home.php');
} else {
    echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
    echo $fullname;
    echo  mysqli_error($db);
}