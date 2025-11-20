<?php
include "koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM barang");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Barang</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header class="dashboard-header">
  <button class="menu-btn" onclick="toggleSidebar()">☰</button>
  <h1>Manajemen <span>Barang</span></h1>
</header>

<!-- SIDEBAR -->
<div class="sidebar" id="sidebar">
  <div class="sidebar-header">
    <h2>Menu</h2>
    <p>Pilih navigasi</p>
    <button class="close-btn" onclick="toggleSidebar()">×</button>
  </div>

  <div class="sidebar-nav">
    <a href="index.php">📦 Data Barang</a>
    <a href="tambah.php">➕ Tambah Data</a>
  </div>
</div>

<!-- CONTENT -->
<div class="db-page">

  <h2>Data Barang</h2>

  <a href="tambah.php">
    <button class="add-btn">Tambah Barang</button>
  </a>

  <table class="db-table">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <tbody>
      <?php while($row = mysqli_fetch_assoc($data)) : ?>
      <tr>
        <td><?= $row['nama']; ?></td>
        <td>Rp <?= number_format($row['harga'],0,',','.'); ?></td>
        <td><?= $row['stok']; ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id']; ?>"><button class="edit-btn">Edit</button></a>
          <a href="delete.php?id=<?= $row['id']; ?>"
             onclick="return confirm('Yakin ingin hapus?');">
             <button class="delete-btn">Hapus</button>
          </a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

</div>

<footer class="footer-bar">
  CRUD Stylish by Kamu 😎
</footer>

<script>
function toggleSidebar(){
  document.getElementById("sidebar").classList.toggle("active");
}
</script>

</body>
</html>
