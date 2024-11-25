<?php
session_start();
include 'manggil.php';

if (!$_SESSION['login']) {
    header("Location: index.php");
    exit();
}

$query = "SELECT * FROM barang";
$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="eng" id="dashborone">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=display-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="dashboard-container">
      <nav class="sidebar">
        <div class="logo-rectangle"></div>
        <ul class="nav-links">
          <li><a href="#" class="active">Dashboard</a></li>
          <li><a href="#">Master Barang</a></li>
          <li><a href="#">Receiving</a></li>
          <li><a href="#">Issuing</a></li>
        </ul>
      </nav>
      <main class="main-content">
        <header class="top-bar">
          <div class="user-info">
            <span class="username">username</span>
            <div class="user-avatar"></div>
          </div>
        </header>
        <div class="content">
          <div class="search-bar">
            <input type="text" placeholder="pencarian" class="search-input" />
          </div>
          <table class="inventory-table">
            <thead>
              <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Nama Barang</th>
                <th rowspan="2">Pengadaan</th>
                <th rowspan="2">Stok</th>
                <th colspan="2">Status</th>
              </tr>
              <tr>
                <th>Baik</th>
                <th>Rusak</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
          <?php
           ?>
        </div>
        <footer>
          <span class="copyright">Copyright</span>
          <span class="version">versi 10</span>
        </footer>
      </main>
    </div>
    <script src="script.js"></script>
  </body>
</html>