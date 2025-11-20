<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM barang WHERE id=$id"));

if(isset($_POST['submit'])){
  mysqli_query($conn, "UPDATE barang SET 
    nama='$_POST[nama]',
    harga='$_POST[harga]',
    stok='$_POST[stok]'
    WHERE id=$id
  ");
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Barang</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="db-page">
  <h2>Edit Barang</h2>

  <form method="POST" class="login-card" style="width:400px">

    <div class="input-group">
      <input type="text" name="nama" value="<?= $data['nama']; ?>" required>
    </div>

    <div class="input-group">
      <input type="number" name="harga" value="<?= $data['harga']; ?>" required>
    </div>

    <div class="input-group">
      <input type="number" name="stok" value="<?= $data['stok']; ?>" required>
    </div>

    <button name="submit" class="btn-login">Update</button>

  </form>
</div>

</body>
</html>
