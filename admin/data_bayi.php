<?php 
session_start();

if ( !isset($_SESSION['login']) )  {
 header('Location:../index.php');
 exit;
}
include 'header.php';
include 'function.php';

$data_bayi = query("SELECT * FROM data_bayi");

?>

<body>
  <div class="container mt-5">
    <h1 class="fw-bold text-primary">Data Akta Bayi </h1>
    <table class="table mt-5">
      <tr class="bg-primary text-white">
        <th scope="col">No</th>
        <th scope="col">Foto </th>
        <th scope="col">Nama</th>
        <th scope="col">Tempat Tanggal Lahir</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Detail</th>
      </tr>
      <?php $i = 1; foreach($data_bayi as $bayi) : ?>
      <tr>
        <td scope="col"><?= $i++; ?></td>
        <td scope="col"><img style="width: 90px;" src="../admin/foto_warga/<?= $bayi['foto']; ?>" alt="" srcset="">
        </td>
        <td scope="col"><?= $bayi["nama_lengkap"]; ?></td>
        <td scope="col"><?= $bayi["tempat_tgl_lahir"]; ?></td>
        <td scope="col"><?= $bayi["tempat_dilahirkan"]; ?></td>
        <td><a href="detail_bayi.php?id=<?= $bayi['id'] ?>" class="btn btn-primary mt-2">Lihat Detail</a></td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>