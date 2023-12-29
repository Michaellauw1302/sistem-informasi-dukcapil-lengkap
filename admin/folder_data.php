<?php 
  session_start();

  if ( !isset($_SESSION['login']) )  {
  header('Location:../index.php');
  exit;
  }
  include 'header.php'; 
  

?>

<body>
  <div class="container mt-5" style="margin-left:400px ">
    <h1 class="mb-5 fw-bolder text-primary" style="margin-left:220px; ">Folder Data</h1>
    <div class="row">
      <div class="col-sm-6">
        <a href="data_warga.php" style="text-decoration: none; ">
          <div class="card border-white">
            <div class="card-body bg-warning mt-5 mb-5" style="border-radius: 20px;">
              <h1 class="card-title fw-bolder text-white mb-5" style="text-align: center;">Data Penduduk</h1>
              <img src="img/people.png" style="margin-left:150px; width:300px" alt="">
            </div>
        </a>
        <a href="data_bayi.php" style="text-decoration: none;">
          <div class="card border-white">
            <div class=" card-body bg-primary" style="border-radius: 20px;">
              <h1 class=" card-title fw-bold text-white mb-5" style="text-align: center;">Data Bayi dan Akta Kelahiran
              </h1>
              <img src="img/birth.png" style="margin-left:100px; width:400px" alt="">
            </div>
        </a>
        <a href="daftarNama_kk.php" style="text-decoration: none;">
          <div class="card border-white">
            <div class="card-body bg-info mt-5 mb-5" style="border-radius: 20px;">
              <h1 class="card-title fw-bold text-white mb-5" style="text-align: center;">Kartu Keluarga</h1>
              <img src="img/kk.png" style="margin-left:150px; width:300px" alt="">
            </div>
        </a>
        <a href="ktp.php" style="text-decoration: none;">
          <div class="card border-white">
            <div class="card-body bg-warning mt-5 mb-5" style="border-radius: 20px;">
              <h1 class="card-title fw-bolder text-white mb-5" style="text-align: center;">KTP</h1>
              <img src="img/user.png" style="margin-left:150px; width:300px" alt="">
            </div>
        </a>

      </div>

    </div>


  </div>

  </div>
</body>