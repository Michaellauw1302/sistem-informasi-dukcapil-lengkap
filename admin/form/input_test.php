<?php 
include 'header.php';
if (isset($_POST['submit'])) {
  var_dump($_POST);
  die;
}
?>

<form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="judul" class="form-label">Nama Tempat Wisata</label>
    <input type="text" class="form-control" name="judul" id="judul">
  </div>
  <div class="mb-3">
    <label for="lokasi" class="form-label">Lokasi</label>
    <input type="text" class="form-control" name="lokasi" id="lokasi">
  </div>

  <div class="mb-3">
    <label for="keterangan" class="form-label">Keterangan</label>
    <input type="text" class="form-control" name="keterangan" id="keterangan">
  </div>
  <div class="mb-3">
    <label for="ket_lengkap" class="form-label">Keterangan Lengkap</label>
    <textarea class="form-control" placeholder="Keterangan Lengkap" name="ket_lengkap" id="ket_lengkap"
      style="height: 200px"></textarea>
  </div>
  <label for="gambar" class="form-label">gambar</label>
  <div class="input-group mb-3">
    <input type="file" class="form-control" name="gambar" id="gambar">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">upload</button>
  <a href="index.php" class="btn btn-primary">kembali</a>
</form>