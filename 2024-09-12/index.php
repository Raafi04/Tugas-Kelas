<form action="" method="post">
  <input type="number" name="bulan" placeholder="Masukkan Bulan">
  <input type="number" name="tanggal" placeholder="Masukkan Tanggal">
  <input type="submit" name="tombol" value="Kirim">
</form>

<?php

  if (isset($_POST['tombol'])) {
    $bulan = $_POST['bulan'];
    $tanggal = $_POST['tanggal'];

  //   echo $bulan;
  //   echo $tanggal;
    
    // $keterangan = 'salah';

    // if ($bulan > 0 && $bulan < 13 && $tanggal > 0 && $tanggal < 32) {
    //   $keterangan = 'benar';

    $keterangan1 = "Masukkan Tanggal yang benar";
    $keterangan2 = "Masukkan Bulan yang benar";

      if ($bulan > 0 && $bulan < 13) {    
        if ($tanggal > 0 && $tanggal < 32) {
          // $keterangan = "benar";
          if ($bulan == 1 && $tanggal > 0 && $tanggal < 20) {
            $keterangan = "Aquarius";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 1 && $tanggal > 20 && $tanggal < 32) {
            $keterangan = "Capricorn";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 2 && $tanggal > 0 && $tanggal < 25) {
            $keterangan = "Sigit Remdang";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 2 && $tanggal > 25 && $tanggal < 29) {
            $keterangan = "Raja Serigala";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 3 && $tanggal > 0 && $tanggal < 10) {
            $keterangan = "Raja Serigala";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 3 && $tanggal > 10 && $tanggal < 31) {
            $keterangan = "Fans MU";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 4 && $tanggal > 0 && $tanggal < 15) {
            $keterangan = "Raja Sigma";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 4 && $tanggal > 15 && $tanggal < 30) {
            $keterangan = "Skibidi Toilet";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 5 && $tanggal > 0 && $tanggal < 23) {
            $keterangan = "King Rizz";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 5 && $tanggal > 23 && $tanggal < 31) {
            $keterangan = "Mewingers";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 6 && $tanggal > 0 && $tanggal < 13) {
            $keterangan = "Mewingers";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 6 && $tanggal > 13 && $tanggal < 30) {
            $keterangan = "Kurang Beruntung";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 7 && $tanggal > 0 && $tanggal < 20) {
            $keterangan = "NT";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 7 && $tanggal > 20 && $tanggal < 31) {
            $keterangan = "Decul";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 8 && $tanggal > 0 && $tanggal < 14) {
            $keterangan = "Decul Juga";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 8 && $tanggal > 14 && $tanggal < 30) {
            $keterangan = "Raja Uno";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 9 && $tanggal > 0 && $tanggal < 19) {
            $keterangan = "Morgott";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 9 && $tanggal > 19 && $tanggal < 31) {
            $keterangan = "Maliketh";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 10 && $tanggal > 0 && $tanggal < 24) {
            $keterangan = "reggiN";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 10 && $tanggal > 24 && $tanggal < 30) {
            $keterangan = "aggiN";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 11 && $tanggal > 0 && $tanggal < 9) {
            $keterangan = "aggiN";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 11 && $tanggal > 9 && $tanggal < 31) {
            $keterangan = "Kosong";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 12 && $tanggal > 0 && $tanggal < 17) {
            $keterangan = "Mbahmu a";
            echo "Zodiak Anda :".$keterangan;
          }
          if ($bulan == 12 && $tanggal > 17 && $tanggal < 30) {
            $keterangan = "sugaB";
            echo "Zodiak Anda :".$keterangan;
          }
        } else {
          echo $keterangan1;
        }
      }
      else {
        echo $keterangan2;
      }
    }
    // echo $keterangan;
  // }

?>

<!-- <form action="" method="post">
  <input name="nama" type="text" placeholder="Masukkan Nama">
  <input name="alamat" type="text" placeholder="Masukkan Alamat">
  <input name="email" type="email" placeholder="Masukkan Email">
  <input type="password" name="password" placeholder="Masukkan Password">
  <input type="submit" name="tombol" value="Kirim">
</form>
<?php

  // // echo "Belajar PHP";
  // if (isset($_POST['tombol'])) {

  //   $nama = $_POST['nama'];
  //   $alamat = $_POST["alamat"];
  //   $email = $_POST["email"];
  //   $password = $_POST["password"];
    
  //   echo "<br>"."Nama :".$nama."<br>";
  //   echo "Alamat :".$alamat."<br>";
  //   echo "Email :".$email.'<br>';
  //   echo "Password :".$password.'<br>';
  // }

?> -->