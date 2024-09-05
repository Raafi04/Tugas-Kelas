<?php

  for ($i=1; $i <= 10; $i++) { 
    echo $i;
  }

  echo "<br>";

  for ($i=10; $i >= 0; $i--) { 
    echo $i;
    echo "<br>";
  }

  echo "<br>";

  for ($i=1; $i < 100; $i+=2) { 
    echo $i;
    // echo "<br>";
  }

  $ganjil = 7 % 2;
  echo $ganjil;

  echo "<br>";
  
  for ($i=1; $i < 100; $i++) { 
    
    $ganjil = $i % 2;
    // echo $ganjil;

    if ($ganjil == 0) {
      echo $i;
    }

  }

  echo "<br>";

  $kkm = 80;
  $nilai = 85;

  if ($nilai > $kkm) {
    echo "lulus";
  }
  else {
    echo "tidak lulus";
  }

  echo "<br>";

  $status = "tidak lulus";
  
  if ($nilai > $kkm) {
    $status = "lulus";
  }

  echo $status;

  echo "<br>";

  $raport = 0;
  $tugas = 1;

  if ($tugas == 1) {
    $raport = 80;
  }

  echo $raport;

  echo "<br>";

  $bulan = 1;
  $tanggal = 10;
  $keterangan = "salah";

  if ($bulan > 0 && $bulan < 13) {
    // $keterangan = "benar";

    if ($tanggal > 0 && $tanggal < 32) {
      // $keterangan = "benar";
      if ($bulan == 1 && $tanggal > 0 && $tanggal < 20) {
        $keterangan = "Aquarius";
      }
      if ($bulan == 1 && $tanggal > 20 && $tanggal < 32) {
        $keterangan = "Capricorn";
      }
      if ($bulan == 2 && $tanggal > 0 && $tanggal < 25) {
        $keterangan = "Sigit Remdang";
      }
      if ($bulan == 2 && $tanggal > 25 && $tanggal < 29) {
        $keterangan = "Raja Serigala";
      }
      if ($bulan == 3 && $tanggal > 0 && $tanggal < 10) {
        $keterangan = "Raja Serigala";
      }
      if ($bulan == 3 && $tanggal > 10 && $tanggal < 31) {
        $keterangan = "Fans MU";
      }
      if ($bulan == 4 && $tanggal > 0 && $tanggal < 15) {
        $keterangan = "Raja Sigma";
      }
      if ($bulan == 4 && $tanggal > 15 && $tanggal < 30) {
        $keterangan = "Skibidi Toilet";
      }
      if ($bulan == 5 && $tanggal > 0 && $tanggal < 23) {
        $keterangan = "King Rizz";
      }
      if ($bulan == 5 && $tanggal > 23 && $tanggal < 31) {
        $keterangan = "Mewingers";
      }
      if ($bulan == 6 && $tanggal > 0 && $tanggal < 13) {
        $keterangan = "Mewingers";
      }
      if ($bulan == 6 && $tanggal > 13 && $tanggal < 30) {
        $keterangan = "Kurang Beruntung";
      }
      if ($bulan == 7 && $tanggal > 0 && $tanggal < 20) {
        $keterangan = "NT";
      }
      if ($bulan == 7 && $tanggal > 20 && $tanggal < 31) {
        $keterangan = "Decul";
      }
      if ($bulan == 8 && $tanggal > 0 && $tanggal < 14) {
        $keterangan = "Decul Juga";
      }
      if ($bulan == 8 && $tanggal > 14 && $tanggal < 30) {
        $keterangan = "Raja Uno";
      }
      if ($bulan == 9 && $tanggal > 0 && $tanggal < 19) {
        $keterangan = "Morgott";
      }
      if ($bulan == 9 && $tanggal > 19 && $tanggal < 31) {
        $keterangan = "Maliketh";
      }
      if ($bulan == 10 && $tanggal > 0 && $tanggal < 24) {
        $keterangan = "riggeN";
      }
      if ($bulan == 10 && $tanggal > 24 && $tanggal < 30) {
        $keterangan = "aggiN";
      }
      if ($bulan == 11 && $tanggal > 0 && $tanggal < 9) {
        $keterangan = "aggiN";
      }
      if ($bulan == 11 && $tanggal > 9 && $tanggal < 31) {
        $keterangan = "Kosong";
      }
      if ($bulan == 12 && $tanggal > 0 && $tanggal < 17) {
        $keterangan = "Mbahmu a";
      }
      if ($bulan == 12 && $tanggal > 17 && $tanggal < 30) {
        $keterangan = "sugaB";
      }
    }
  }

  echo $keterangan;

?>