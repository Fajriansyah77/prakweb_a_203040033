<?php
require 'function.php';

$data = $_GET['id'];
$m = query("SELECT * FROM buku WHERE id_buku = $data");

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'function.php';
            </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'function.php';
            </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data buku</title>
</head>

<body>
  <h3>Form Ubah Data Buku</h3>

  <form method="POST" action="">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label>
          Judul_buku :
          <input type="text" name="judul_buku" autofocus required value="<?= $m['judul_buku']; ?>">
        </label>
      </li>

      <li>
        <label>
          Penulis :
          <input type="text" name="penulis" required value="<?= $m['penulis']; ?>">
        </label>
      </li>

      <li>
        <label>
          Gambar :
          <input type="text" name="img" required value="<?= $m['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>
