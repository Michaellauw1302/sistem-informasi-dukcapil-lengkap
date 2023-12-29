<?php 
session_start();

if ( !isset($_SESSION['login']) )  {
 header('Location:../index.php');
 exit;
}

include 'header.php';



?>

<body>
  <div class="container mt-5 ">
    <h1 class="fw-bolder text-primary">Daftar Nama Kartu Keluarga</h1>
    <table class="table mt-5">
      <tr class=" bg-primary text-white">
        <th scope="col">No</th>
        <th scope="col">Nama Kepala Keluarga</th>
        <th scope="col">Nik</th>
        <th scope="col">Detail</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Crhistopher</td>
        <td>312931281209</td>
        <td><a href="detailKartu_keluarga.php" class="btn btn-primary">Lihat Kartu keluarga</a></td>
      </tr>
    </table>
  </div>
</body>