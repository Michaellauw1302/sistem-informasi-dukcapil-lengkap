<?php 

include 'function.php';
$id = $_GET['id'];
$data = query("SELECT * FROM detail_akta WHERE id_bayi='$id' ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <?php foreach($data as $data_bayi) : ?>
    <div class="warga">

      <p><b><?= $data_bayi['warga_negara']; ?></b></p>
    </div>
    <div class="alamat1">
      <p><b><?= $data_bayi['no_akta']; ?></b></p>
    </div>
    <div class="alamat2">
      <p><b>1998 No.181 J0.8.191 No81</b></p>
    </div>
    <div class="tempat">
      <p><b><?= $data_bayi['tempat_lahir']; ?></b></p>
    </div>
    <div class="tanggal">
      <p><b><?= $data_bayi['tanggal_lahir']; ?></b></p>
    </div>
    <div class="tahun">
      <p><b><?= $data_bayi['tahun']; ?></b></p>
    </div>
    <div class="nama">
      <p><b><?= $data_bayi['nama']; ?></b></p>
    </div>
    <div class="anak">
      <p><b><?= $data_bayi['anak_ke']; ?></b></p>
    </div>
    <?php endforeach; ?>
  </div>
</body>

</html>