<?php


session_start();

if ( !isset($_SESSION['login']) )  {
 header('Location:../index.php');
 exit;
}

include 'header.php';
include 'function.php';
$id = $_GET['id'];

$data = query("SELECT * FROM warga WHERE id='$id' ");
// var_dump($data);

?>


<body>
  <div class="container mt-5 mb-5">
    <h1 class="fw-bold text-primary mt-5">Detail Data Warga</h1>
    <?php foreach($data as $warga) : ?>
    <a href="form/update_warga.php?id= <?= $warga['id'] ?> " class="btn btn-primary">Ubah </a>
    <a href="form/hapus_warga.php?id= <?= $warga['id'] ?> " class="btn btn-danger">Hapus Data</a>
    <div class="user" style=" margin-top:80px; width:200px; height: 300px; border:1px solid black; float:right">

      <img src="../admin/foto_warga/<?= $warga["foto"]; ?>" style="width:200px; height: 300px;">
      <p style="text-align: center; margin-top:5px; font-weight:bold;"><?= $warga['nama']; ?></p>

      <?php endforeach; ?>
    </div>

    <div class="col col-md-10 col-md-offset-1">

      <table class="table mt-4 ">
        <?php foreach ($data as $warga ) : ?>
        <tr>
          <th>Nama </th>
          <th>:</th>
          <td> <?= $warga["nama"]; ?></td>
        </tr>
        <tr>
          <th>Usia </th>
          <th>:</th>
          <td> <?= $warga["usia"]; ?> Tahun</td>
        </tr>
        <tr>
          <th>Nik </th>
          <th>:</th>
          <td><?= $warga['nik']; ?></td>
        </tr>
        <tr>
          <th>Jenis Kelamin </th>
          <th>:</th>
          <td><?= $warga['jenis_kelamin']; ?></td>
        </tr>
        <tr>
          <th>Tempat Lahir </th>
          <th>:</th>
          <td><?= $warga['tempat_lahir']; ?></td>
        </tr>
        <tr>
          <th>Alamat </th>
          <th>:</th>
          <td><?= $warga['alamat']; ?></td>
        </tr>
        <tr>
          <th>Agama </th>
          <th>:</th>
          <td><?= $warga['agama']; ?></td>
        </tr>
        <tr>
          <th>Kewarganegaraan </th>
          <th>:</th>
          <td><?= $warga['kwn']; ?></td>
        </tr>
        <tr>
          <th>No. Telpon </th>
          <th>:</th>
          <td><?= $warga['no_telp']; ?></td>
        </tr>
        <tr>
          <th>Pekerjaan </th>
          <th>:</th>
          <td><?= $warga['pekerjaan']; ?></td>
        </tr>
        <tr>
          <th>Pendidikan </th>
          <th>:</th>
          <td><?= $warga['pendidikan']; ?></td>
        </tr>
        <tr>
          <th>Email </th>
          <th>:</th>
          <td><?= $warga['email']; ?></td>
        </tr>
        <tr>
          <th>Status </th>
          <th>:</th>
          <td><?= $warga['status']; ?></td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</body>