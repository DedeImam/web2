<?php 
    include 'connection.php';
	session_start(); 
    if($_SESSION['login'] = "") header('Location: login.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
     <link rel="stylesheet" href="styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
</head>
<?php
        include 'header.php'
    ?>
<body>
    <div class="container">
        <div>
        <div class=" text-center">
        <h3 style= "font-size:23"></style>Rekapitulasi Penerimaan Bantuan Sosial COVID-19</h3> 
        <h3 style= "font-size:22"></style>Sampai dengan 18 Juli 2020, Pukul 20.00 WIB</h3><br>
         </div>
         <div class="text-right mt-3 mb-3">
         <a href="tambah_alokasi.php" class="btn btn-primary">Tambah</a>
         </div>
    <table class="table">
        <thead>
           <tr>            <th scope="col">Jenis Alokasi</th>
            <th scope="col">Dana</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">No. Hp</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "select * from alokasi ORDER by id DESC";
            if ($data = $db->query($query)) {
                while ($row = $data->fetch_assoc()) {
                $id = $row['id'];
                $jenis_alokasi = $row['jenis_alokasi'];
                $dana = $row['dana'];
                $nama_lengkap = $row['nama_lengkap'];
                $no_handphone = $row['no_handphone'];
                $email = $row['email'];
                echo "<tr>
                <td>$jenis_alokasi</td>
                <td>$dana</td>
                <td>$nama_lengkap</td>
                <td>$no_handphone</td>
                <td>$email</td>
                <td><a
                href=\"edit_form.php?id_relawan=$id\">Edit</a>
                &nbsp;<a
                href=\"delete.php?id_relawan=$id\">Hapus</a></td></tr>";
                
             }
              }
           ?>
        </tbody>
            </table>
            <div class="text-left mt-3 mb-3">
         <a href="generate_pdf.php" class="btn btn-primary">Download PDF</a>
         </div>
        </div>
    </div>
</body>
</html>
<!-- <LI>$row[1] &nbsp;$row[2] &nbsp; $row[3] &nbsp;<a
            href=\"edit_article.php?articleID=$row[0]\">Edit</a>
            &nbsp;<a
            href=\"delete.php?articleID=$row[0]\">Hapus</a></LI><br>"); -->