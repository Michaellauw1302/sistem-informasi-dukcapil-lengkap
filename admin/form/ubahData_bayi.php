<?php

include 'header.php';
if ( !isset($_SESSION['login']) )  {
  header('Location:../index.php');
  exit;
 }

include 'function.php';
$id = $_GET['id'];
$data_bayi = query("SELECT * FROM data_bayi WHERE id='$id' ");

if ( isset($_POST['submit']) ) {
  // var_dump($_POST);
  // var_dump($_FILES);
  if ( updateBayi($_POST) > 0 ) {
    echo "<script>
            alert('data berhasil Diubah');
            document.location.href = '../data_bayi.php'
            </script>";
  }else{
    echo "<script>
    alert('data berhasil Diubah');
    document.location.href = '../data_bayi.php'
    </script>";
  }

}

?>

<body>
  <div class="container mt-5 fw-bold text-primary">
    <h1>Form Registrasi Data Kelahiran</h1>
    <form action="" method="POST" enctype="multipart/form-data">
      <?php foreach($data_bayi as $bayi ) : ?>
      <input type="hidden" name='id' value="<?= $bayi['id'] ?>">
      <input type="hidden" name="fotoLama" value="<?= $bayi['foto'] ?> ">
      <div class="row mb-3">
        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
            value="<?= $bayi['nama_lengkap'] ?>">
        </div>
      </div>
      <!-- jk -->
      <div class="row mb-3">
        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-8">

          <input type="text" id="jenis_kelamin" class="form-control" value="<?= $bayi['jenis_kelamin'] ?>"
            name="jenis_kelamin">

        </div>
      </div>
      <div class="row mb-3">
        <label for="tempat_tgl_lhr" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tempat_tgl_lhr" name="tempat_tgl_lhr"
            value="<?= $bayi['tempat_tgl_lahir'] ?>">
        </div>
      </div>
      <div class=" row mb-3">
        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
            value="<?= $bayi['tempat_dilahirkan'] ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label for="generasi" class="col-sm-2 col-form-label">Anak Ke - </label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="generasi" name="generasi" value="<?= $bayi['anak_keberapa'] ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label for="penolong_kelahiran" class="col-sm-2 col-form-label">Kelahiran Ditangani Oleh </label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="penolong_kelahiran" name="penolong_kelahiran"
            value="<?= $bayi['penolong_kelahiran'] ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label for="berat" class="col-sm-2 col-form-label">Berat </label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="berat" name="berat" value="<?= $bayi['berat'] ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label for="panjang" class="col-sm-2 col-form-label">Panjang </label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="panjang" name="panjang" value="<?= $bayi['panjang'] ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label for="foto" class="col-sm-2 col-form-label">Foto </label>
        <div class="col-sm-8">
          <input type="file" class="form-control" id="foto" name="foto" value="<?= $bayi['foto'] ?>">
          <img style=" margin-top:80px; width:200px; height: 300px; border:1px solid black;" name="foto"
            src=" ../foto_warga/<?= $bayi['foto']; ?>" alt="">
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary mt-2  mb-5" style="margin-left: 220px;">Simpan
      </button>
      <a href="../data_akta.php" class="btn btn-primary mt-2 mb-5">Cencel </a>
      <?php endforeach; ?>
    </form>
  </div>
</body>