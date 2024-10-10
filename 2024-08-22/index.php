<?php
  require_once("content.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Sekolah</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
    <h1>Ini adalah header</h1>
    <li><a href="?page">Home</a></li>
    <?php
    foreach ($pages as $key => $value) {
    ?>
      <li><a href="?page=<?= $value ?>"><?=$key?></a></li>
    <?php
      }
    ?>
  </div>
  <div class="content">
    <h1>Ini adalah content</h1>
    <?php
      // echo $page;
      if (isset($_GET["page"])) {
        $siti = $_GET["page"];
        if ($siti == "contact") {
          require_once("pages/contact.php");
        }
        if ($siti == "jurusan") {
          require_once("pages/jurusan.php");
        }
        if ($siti == "sejarah") {
          require_once("pages/sejarah.php");
        }
        if ($siti == "prestasi") {
          require_once("pages/prestasi.php");
        }
      }
      else {
          echo "Variable page belum ada isinya";
      }
    ?>  
  </div>
  <div class="footer">
    <h1>Ini adalah footer</h1>
  </div>


  <!-- <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="pages/jurusan.php">Jurusan</a></li>
    <li><a href="pages/sejarah.php">Sejarah</a></li>
    <li><a href="pages/contact.php">Contact</a></li>
  </ul> -->

  <?php
    foreach ($gambars as $key) {
  ?>
    <img src="images/<?=$key?>" alt="">
  <?php
    }
  ?>
</body>
</html>