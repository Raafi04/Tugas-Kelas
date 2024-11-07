<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMPN 1 Sedati</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="logo">
        <a href="index.php"><img src="images/logo.png" alt=""></a>
      </div>
      <div class="sekolah">
        <h2>SMPN 1 Sedati</h2>
      </div>
      <div class="nav">
        <ul>
          <li><a href="?menu=Home">Home</a></li>
          <li><a href="?menu=Sejarah">Sejarah</a></li>
          <li><a href="?menu=Kegiatan">Kegiatan</a></li>
          <li><a href="?menu=Jadwal">Jadwal</a></li>
          <li><a href="?menu=Galeri">Galeri</a></li>
          <li><a href="?menu=Kontak">Kontak</a></li>
        </ul>
      </div>
    </div>
    <div class="content">
      <?php
      if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        echo $menu;

        if ($menu == 'Home') {
          require_once 'pages/home.php';
        }
        if ($menu == 'Sejarah') {
          require_once 'pages/sejarah.php';
        }

        if ($menu == 'Kegiatan') {
          require_once 'pages/kegiatan.php';
        }

        if ($menu == 'Jadwal') {
          require_once 'pages/jadwal.php';
        }

        if ($menu == 'Galeri') {
          require_once 'pages/galeri.php';
        }

        if ($menu == 'Kontak') {
          require_once 'pages/kontak.php';
        }
      }   else {
        require_once 'pages/home.php';
      }
      ?>
    </div>
    <div class="footer">
      <p>Web ini dibuat oleh:Raafi</p>
    </div>
  </div>
</body>

</html>

<?php

?>