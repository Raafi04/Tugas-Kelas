<form action="" method="post">
    <input type="number" name="angka1" placeholder="Masukkan Angka">
    <input type="number" name="angka2" placeholder="Masukkan Angka">
    <input type="submit" name="tambah" value="+">
    <input type="submit" name="min" value="-">
    <input type="submit" name="kali" value="*">
    <input type="submit" name="bagi" value="/">
</form>

<?php

  if (isset($_POST['tambah'])) {
    $hasil = $_POST['angka1'] + $_POST['angka2'];
    echo "Hasil :".$hasil;
  }
  if (isset($_POST['kurang'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $hasil = $angka1 - $angka2;
    echo "Hasil :".$hasil;
  }
  if (isset($_POST['kali'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $hasil = $angka1 * $angka2;
    echo "Hasil :".$hasil;
  }
  if (isset($_POST['bagi'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $hasil = $angka1 / $angka2;
    echo "Hasil :".$hasil;
  }

?>