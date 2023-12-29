<?php 

include 'header.php'; 
include 'function.php';
$id = $_GET['id'];
$data_ktp = query("SELECT * FROM ktp WHERE NIK='$id'");


?>
<style>
.container {
  width: 400rem;
  height: 680px;
  border-radius: 25px;

}

h5 {
  text-align: center;
  padding-top: 15px;
}

img {
  width: 150px;
  margin-top: 50px;
  margin-right: 25px;
  float: right;

}
</style>

<body>

  <div class="container bg-info  mb-5 ">
    <h5 class="mt-5">NUSA TENGGARA BARAT <br> KOTA MATARAM </h5>
    <?php foreach($data_ktp as $ktp) ?>
    <img src="../foto_warga/<?= $ktp['foto'] ?>" alt="">
    <div class="col col-md-10 col-md-offset-1 mb-5 ">
      <table class=" table  mt-5">
        <tr>
          <th> NIK </th>
          <th>:</th>
          <td><?= $ktp['NIK']; ?></td>
        </tr>
        <tr>
          <th>Nama </th>
          <th>:</th>
          <td><?= ucwords($ktp['nama']); ?></td>
        </tr>
        <tr>
          <th>Tempat / Tgl Lahir </th>
          <th>:</th>
          <td><?= ucwords($ktp['tempat_lahir']); ?>, <?= ucwords($ktp['tanggal_lahir']); ?></td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <th>:</th>
          <td><?=ucwords( $ktp['jenis_kelamin']); ?></td>
        </tr>
        <tr>
          <th>Alamat </th>
          <th>:</th>
          <td><?= ucwords($ktp['alamat']); ?></td>
        </tr>
        <tr>
          <th>RT/RW </th>
          <th>:</th>
          <td><?= ucwords($ktp['rt']); ?> / <?= ucwords($ktp['rw']); ?></td>
        </tr>
        <tr>
          <th>Kel / Desa </th>
          <th>:</th>
          <td><?= ucwords($ktp['desa_kelurahan']); ?></td>
        </tr>
        <tr>
          <th>Kecamatan </th>
          <th>:</th>
          <td><?= ucwords($ktp['kecamatan']); ?></td>
        </tr>
        <tr>
          <th>Agama</th>
          <th>:</th>
          <td><?= ucwords($ktp['agama']); ?></td>
        </tr>
        <tr>
          <th>Status Perkawinan</th>
          <th>:</th>
          <td><?= ucwords($ktp['status']); ?></td>
        </tr>
        <tr>
          <th>Pekerjaan</th>
          <th>:</th>
          <td><?= ucwords($ktp['pekerjaan']); ?></td>
        </tr>
        <tr>
          <th>Kewarganegaraan</th>
          <th>:</th>
          <td><?= ucwords($ktp['kwn']); ?></td>
        </tr>
        <tr>
          <th>Berlaku Hingga</th>
          <th>:</th>
          <td>Seumur Hidup</td>
        </tr>
      </table>
      <div class="container"></div>
    </div>
  </div>
</body>