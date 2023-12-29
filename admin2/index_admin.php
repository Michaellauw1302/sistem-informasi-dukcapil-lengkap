<?php 
    session_start();

    if ( !isset($_SESSION['login']) ) {
      header('Location:../index.php');
      exit;
    }
    include 'header.php';
    include 'function.php';

$laki_laki = mysqli_query($conn,"SELECT * FROM warga WHERE jenis_kelamin='laki-laki'");
$perempuan = mysqli_query($conn,"SELECT * FROM warga WHERE jenis_kelamin='perempuan'");
$bayi = mysqli_query($conn,"SELECT * FROM data_bayi");

$jml_laki = mysqli_num_rows($laki_laki);
$jml_perempuan = mysqli_num_rows($perempuan);
$jml_bayi = mysqli_num_rows($bayi);
$total = $jml_laki + $jml_perempuan + $jml_bayi;



?>


<body>
  <div class="container mt-5">
    <h1 class="text-primary">Desa BumiGora</h1>

    <div class="card-group text-white mt-5">
      <div class="card ">
        <div class="card-body bg-primary ">
          <h5 class="card-title fw-bold">JUMLAH PENDUDUK </h5>
          <img style="width: 90px; float:left; margin-top: 10px; " src="img/group.png" alt="" srcset="">
          <h1 class=" fw-bold"><?= $total  ?></h1>
        </div>
      </div>
      <div class="card">
        <div class="card-body bg-primary">
          <h5 class="card-title fw-bold">LAKI LAKI </h5>
          <img style="width: 90px; float:left; margin-top: 10px; " src="img/man.png" alt="" srcset="">
          <h1 class=" fw-bold"><?= $jml_laki ?></h1>
        </div>
      </div>
      <div class="card">
        <div class="card-body bg-primary">
          <h5 class="card-title fw-bold">PEREMPUAN</h5>
          <img style="width: 90px; float:left; margin-top: 10px; " src="img/woman.png" alt="" srcset="">
          <h1 class=" fw-bold"><?= $jml_perempuan ?></h1>
        </div>
      </div>
    </div>
    <div class="card-group text-white mt-5">
      <div class="card">
        <div class="card-body bg-primary">
          <h5 class="card-title fw-bold">BAYI</h5>
          <img style="width: 90px; float:left; margin-top: 10px; " src="img/bayi.png" alt="" srcset="">
          <h1 class=" fw-bold"><?= $jml_bayi ?></h1>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>