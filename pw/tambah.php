<?php
session_start();

require 'function.php';

$id = $_GET['id'];
$m = query("SELECT * FROM buku WHERE id_buku = $id");

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Buku</title>
</head>

<body>
<h3>Form Ubah Data Buku</h3>

<form method="POST" action="">
  <input type="hidden" name="id" value="<?= $m['id']; ?>">
  <ul>
    <li>
      <label>
        Judul_buku :
        <input type="text" name="judul_buku" required value="<?= $m['judul_buku']; ?>">
      </label>
    </li>

    <li>
      <label>
        Penulis :
        <input type="text" name="penulis" required value="<?= $m['penulis']; ?>">
      </label>
      <li>
      <label>
        Gambar :
        <input type="text" name="img" autofocus required value="<?= $m['gambar']; ?>">
      </label>
    </li>
      <button type="submit" name="tambah">Tambah Buku!</button>
    </li>
  </ul>
</form>
</body>

</html>