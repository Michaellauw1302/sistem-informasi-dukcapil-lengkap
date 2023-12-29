<?php

$url = file_get_contents('https://corona.ntbprov.go.id/api/data');
$data = json_decode($url, true);
$update_terakhir = $data['update_terakhir'];
$pelaku_perjalanan_karantina = $data['total']['pelaku_perjalanan']['masih_karantina'];
$pelaku_perjalanan_discarded = $data['total']['pelaku_perjalanan']['discarded'];
$total_perjalanan = $pelaku_perjalanan_discarded + $pelaku_perjalanan_karantina;

$kontak_erat_karantina = $data['total']['kontak_erat']['masih_karantina'];
$kontak_erat_discarded =  $data['total']['kontak_erat']['discarded'];
$total_kontak = $kontak_erat_karantina + $kontak_erat_discarded;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>halaman utama</title>

</head>

<body>
  <div class="navbar">
    <a href="login.php"><button style="float: right; margin-right:150px;">Login</button></a>
    <a href="register.php"><button style="float: right;">Register</button></a>
  </div>

  <div class="hero">
    <img class="image" src="hero.png" alt="" srcset="">
    <h1 style="float: left; margin-left:150px ">Selamat Datang di Website<br>Catatan sipil Desa Bumigora</h1>
  </div>

  <div class="containt">
    <h1 style="font-family: sans-serif; text-align:center; color:#C94FE8; margin-bottom:45px">Data COVID-19 NTB</h1>
    <h4 style="font-family: sans-serif; text-align:center; color:#C94FE8; margin-bottom:45px">Update Terakhir
      <?= $update_terakhir  ?>
    </h4>
    <div class="containt1">
      <h2>PELAKU PERJALANAN</h2>
      <h2><?= $total_perjalanan; ?></h2>
      <h3>JUMLAH</h3>
      <div class="sub1">
        <h2 style="text-align: center;"><?= $pelaku_perjalanan_karantina; ?></h2>
        <h3 style="text-align: center;">MASIH KARANTINA</h3>
      </div>
      <div class="sub2">
        <h2 style="text-align: center;"><?= $pelaku_perjalanan_discarded; ?></h2>
        <h3 style="text-align: center;">DISCARDED</h3>
      </div>
    </div>
    <div class="containt2">
      <h2>KONTAK ERAT</h2>
      <h2><?= $total_kontak; ?></h2>
      <h3>JUMLAH</h3>
      <div class="sub1">
        <h2 style="text-align: center;"><?= $kontak_erat_karantina; ?></h2>
        <h3 style="text-align: center;">MASIH KARANTINA</h3>
      </div>
      <div class="sub2">
        <h2 style="text-align: center;"><?= $kontak_erat_discarded; ?></h2>
        <h3 style="text-align: center;">DISCARDED</h3>
      </div>
    </div>

  </div>


</body>

</html>