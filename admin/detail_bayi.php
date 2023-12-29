<?php 
session_start();

if ( !isset($_SESSION['login']) )  {
 header('Location:../index.php');
 exit;
}
include 'header.php';
include 'function.php';
$id = $_GET['id'];

$data_bayi = query("SELECT * FROM data_bayi WHERE id = $id ");

$id_bayi = query("SELECT * FROM detail_akta WHERE id_bayi='$id'");
?>
<img src="" alt="">

<body>
  <div class="container mt-5">
    <h1 class="fw-bold text-primary">Profile Bayi</h1>
    <div class="container mt-5">
      <?php foreach($data_bayi as $bayi) : ?>
      <a href="../admin/form/ubahData_bayi.php?id=<?= $bayi['id'];  ?>" class="btn btn-primary">Ubah </a>
      <a href="../admin/form/hapusData_bayi.php?id=<?= $bayi['id'];  ?>" class="btn btn-danger">Hapus Data </a>
      <?php endforeach; ?>
      <div class="user" style=" margin-top:80px; width:200px; height: 300px; border:1px solid black; float:right">
        <?php foreach($data_bayi as $bayi) : ?>
        <img src="../admin/foto_warga/<?= $bayi['foto']; ?>" style="width:200px; height: 300px;">
        <p style="text-align: center; margin-top:5px; font-weight:bold;"><?= $bayi['nama_lengkap']; ?></p>
        <?php endforeach; ?>
        <?php foreach($id_bayi as $id) : ?>
        <a href="../admin/form/view_akta.php?id=<?= $id['id_bayi'] ?>" class="btn btn-primary">Akta Kelahiran</a>
        <?php endforeach; ?>
      </div>

    </div>
    <div class="col col-md-10 col-md-offset-1">

      <table class="table mt-4">
        <?php foreach($data_bayi as $bayi) : ?>
        <tr>
          <th>Nama </th>
          <th>:</th>
          <td> <?= $bayi["nama_lengkap"]; ?></td>
        </tr>
        <tr>
          <th>Jenis Kelamin </th>
          <th>:</th>
          <td> <?= $bayi["jenis_kelamin"]; ?></td>
        </tr>
        <tr>
          <th>Tempat Tanggal Lahir </th>
          <th>:</th>
          <td> <?= $bayi["tempat_tgl_lahir"]; ?></td>
        </tr>
        <tr>
          <th>Tempat Dilahirkan </th>
          <th>:</th>
          <td> <?= $bayi["tempat_dilahirkan"]; ?></td>
        </tr>
        <tr>
          <th>Anak Ke - </th>
          <th>:</th>
          <td> <?= $bayi["anak_keberapa"]; ?></td>
        </tr>
        <tr>
          <th>Penolong </th>
          <th>:</th>
          <td> <?= $bayi["penolong_kelahiran"]; ?></td>
        </tr>
        <tr>
          <th>berat </th>
          <th>:</th>
          <td> <?= $bayi["berat"]; ?> .Kg</td>
        </tr>
        <tr>
          <th>Panjang </th>
          <th>:</th>
          <td> <?= $bayi["panjang"]; ?> .Cm</td>
        </tr>

        <?php endforeach; ?>
      </table>
    </div>

</body>