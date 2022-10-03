<?php
session_start();

require 'php/function.php';
$buku = query("SELECT * FROM buku");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>Daftar Buku Indonesia</h1>

  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Judul_buku</th>
      <th>Penulis</th>
      <th>Gambar</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $row) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $row["judul_buku"]; ?> </td>
        <td><?= $row["penulis"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="180"></td>
        <td>
        <center>
                  <a href="ubah.php?id=<?= $row["id_buku"]; ?>">Ubah</a>
                  <a href="hapus.php?id=<?= $row["id_buku"]; ?>">Hapus</a>
                  <a href="tambah.php?id=<?= $row["id_buku"]; ?>">Tambah</a>
                </center>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>