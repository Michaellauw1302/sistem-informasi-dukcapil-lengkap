<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('Location:../index.php');
  exit;
}
include 'header.php';
include 'function.php';
$data = query("SELECT * FROM warga");



?>

<body>
  <div class="container">

  </div>
  <div class="container">
    <h1 class="mt-5 fw-bold text-primary">Data Warga Desa Bumigora</h1>
    <table class="table color-primary mt-5">
      <tr class="bg-white ">
        <th scope="col">No. </th>
        <th scope="col">Foto</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Jenis Kelamin </th>
        <th class="col">Data Lenagkap</th>

      </tr>

      <tbody>
        <?php $i = 1;
        foreach ($data as $warga) : ?>
          <tr>
            <th scope="row"> <?= $i++; ?> </th>
            <td><img style="width: 90px;" src="../admin/foto_warga/<?= $warga["foto"]; ?>" alt="" srcset=""></td>
            <td><?= strtoupper($warga['nama']); ?></td>
            <td><?= strtoupper($warga['jenis_kelamin']); ?></td>

            <td>
              <a class="btn btn-primary" href="detail_data.php?id=<?= $warga["id"];  ?> ">DETAIL</a>
              <!-- <a class="btn btn-primary" href="kartu_keluarga.php">kartu keluarga</a>
            <br>
            <a class="btn btn-warning mt-2" href="ktp.php">KTP</a>
            <br>
            <a class="btn btn-info mt-2" href="ktp.php">Akta Kelahiran</a> -->
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>