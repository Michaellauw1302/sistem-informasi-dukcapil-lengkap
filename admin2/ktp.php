<?php


session_start();

if ( !isset($_SESSION['login']) )  {
header('Location:../index.php');
exit;

}

include 'header.php';
include 'function.php';

$data_ktp = query("SELECT * FROM ktp");


?>

<body>
  <div class="container mt-5">
    <h1 class="fw-bolder text-primary">Data KTP</h1>
    <table action="" method="post" class="table">
      <tr class="bg-primary text-white">
        <th scope="col">No.</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Usia</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Detail</th>
      </tr>
      <?php
          $i=1;
          foreach($data_ktp as $ktp) :
         ?>
      <tr>

        <td><?= $i++; ?></td>
        <td><?= strtoupper($ktp['nama']); ?></td>
        <td><?= strtoupper($ktp['alamat']); ?></td>
        <td><?= strtoupper( $ktp['usia']); ?> tahun</td>
        <td> <?= strtoupper($ktp['jenis_kelamin']); ?></td>
        <td><a href="../admin/form/view_ktp.php?id=<?= $ktp['NIK'] ?>" class="btn btn-primary mt-2">Lihat Detail</a>
        </td>

      </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>