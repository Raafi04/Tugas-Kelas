<?php 

    $identitas = ["Nama"=>"Aryanto Tri Nashrullah",
                  "Alamat"=>"Sidokare Asri",
                  "Telepon"=>"089523419590",
                  "Email"=>"aryantotrinasrullah@gmail.com",
                  "Fb"=>"rasyaganteng123",
                  "Ig"=>"Yantrizan",
                  "Tiktok"=>"Andre123"];

    $sekolah = ["Tk"=>"Darma wanita",
                "Sd"=>"Sdn pucang 3",
                "Smp"=>"Smpn 2 Sidoarjo",
                "Smk"=>"Smkn 2 buduran",
                "S1"=>"ITS",
                "S2"=>"Unesa",
                "S3"=>"Unair"];

    $hobi = ["Renang","Futsal","Silat","Gym","Game"];

    $skill = ["C++"=>"Expert",
            "Html"=>"Newbie",
            "Css"=>"Intermediete",
            "Php"=>"Newbie",
            "Js"=>"Expert"];

    $deskripsi = "saya adalah seorang programmer pemula yang giat bekerja <br>
                dan rajin belajar agar saya kaya raya dan masuk surga,<br>
                saya juga seorang pemancing ilmu hitam ambalabu,<br>
                saya suka berolahraga setelah pulang sekolah,<br>
                saya lebih suka belajar di malam hari";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar riwayat hidup</title>
    <style>.container{width: 800px; margin: auto;}</style>
</head>
<body>
    <div class="container">
        <h1>DAFTAR RIWAYAT HIDUP</h1>
        <h2>Data Diri</h2>
        <table border="1px">
            <thead>
             <tr>
                <th>Data</th>
                <th>Deskripsi</th>
             </tr>   
            </thead>
            <tbody>
                <?php 
                    foreach ($identitas as $key => $value) {
                        ?>
                        <tr>
                            <td><?= $key ?></td>
                            <td><?= $value ?></td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Riwayat Pendidikan</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>Pendidikan</th>
                    <th>Nama Sekolah</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($sekolah as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $key?></td>
                        <td><?= $value?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Skill Coding</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>SKill</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($skill as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $key?></td>
                        <td><?= $value?></td>
                    </tr>
                    <?php
                }
                ?> 
            </tbody>
        </table >
        <hr>
        <h2>Hobi</h2>
        <ul>
            <?php 
            foreach ($hobi as $key) {
                ?>
                <li><?= $key?></li>
                <?php
            }
            ?>
        </ul>
        <hr>
        <h2>Tentang Aku</h2>
        <p><?= $deskripsi?></p>
    </div>
</body>
</html>