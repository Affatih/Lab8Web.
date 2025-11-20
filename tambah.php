<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "koneksi.php";

include "koneksi.php";

if(isset($_POST['submit'])){
  $nama  = $_POST['nama'];
  $harga = $_POST['harga'];
  $stok  = $_POST['stok'];

  mysqli_query($conn, "INSERT INTO barang VALUES('', '$nama', '$harga', '$stok')");
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="db-page">
  <h2>Tambah Barang</h2>

  <form method="POST" class="login-card" style="width:400px">
    <div class="input-group">
      <input type="text" name="nama" placeholder="Nama Barang" required>
    </div>

    <div class="input-group">
      <input type="number" name="harga" placeholder="Harga" required>
    </div>

    <div class="input-group">
      <input type="number" name="stok" placeholder="Stok" required>
    </div>

    <button type="submit" name="submit" class="btn-login">Simpan</button>
  </form>
</div>

</body>
</html>
