<?php
include "funcation.php";

// Membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "aplikasiifoto");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel albumfoto
$datas = mysqli_query($koneksi, "SELECT * FROM albumfoto");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baumans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- your HTML content here -->
    <article>
        <div class="judul">
            <h1>Gallery Photo</h1>
        </div>
        <div class="card-wrapper">
            <div class="card-scroll">
                <?php 
                // Loop through data fetched from database
                while ($key = mysqli_fetch_assoc($datas)) { ?>
                    <div class="card">
                        <img src="img/<?= $key["foto"] ?>" alt="" width="100%" height="70%">
                        <span>kegiatan : <?= $key["judul"] ?></span>
                        <span>keterangan : <?= $key["deskripsi"] ?></span>
                        <span>tangga: 12-02-2023</span>
                    </div>
                <?php } ?>                
            </div>
        </div>
    </article>
    <footer>
        <h3>dibuat dengan sepenuh hati hamba allah</h3>
        <a href="login.php">silahkan login untuk menambahkan data</a>
    </footer>
    
</body>
</html>
