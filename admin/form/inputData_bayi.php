<?php
 include 'header.php';
 include 'function.php';
 if (isset($_POST['submit'])) {
  //  var_dump($_POST);
  //  var_dump($_FILES);
  //  die;
  if ( addBayi($_POST) > 0 ) {
        echo "<script>
        alert('Akta berhasil di Inputkan');
        document.location.href = 'input_akta.php';
        </script>";
      }else{
        echo "<script>
        alert('data gagal ditambahkan');
      </script>";
    }
 }
?>
<!--  
digunakan untuk penginputan data bayi pada form akta kelahiran

document.location.href = '../data_bayi.php'

-->

<body>
  <div class="container mt-5 fw-bold text-primary">
    <h1>Form Registrasi Data Kelahiran</h1>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="row mb-3">
        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
        </div>
      </div>
      <div class="row mb-3">
        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-8">
          <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
            <option selected>--Jenis Kelamin--</option>
            <option value="laki-laki">LAKI-LAKI</option>
            <option value="perempuan">PEREMPUAN</option>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label for="tempat_tgl_lhr" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tempat_tgl_lhr" name="tempat_tgl_lhr">
        </div>
      </div>
      <div class="row mb-3">
        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
        </div>
      </div>
      <div class="row mb-3">
        <label for="generasi" class="col-sm-2 col-form-label">Anak Ke - </label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="generasi" name="generasi">
        </div>
      </div>
      <div class="row mb-3">
        <label for="penolong_kelahiran" class="col-sm-2 col-form-label">Kelahiran Ditangani Oleh </label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="penolong_kelahiran" name="penolong_kelahiran">
        </div>
      </div>
      <div class="row mb-3">
        <label for="berat" class="col-sm-2 col-form-label">Berat </label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="berat" name="berat">
        </div>
      </div>
      <div class="row mb-3">
        <label for="panjang" class="col-sm-2 col-form-label">Panjang </label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="panjang" name="panjang">
        </div>
      </div>
      <div class="row mb-3">
        <label for="foto" class="col-sm-2 col-form-label">Foto </label>
        <div class="col-sm-8">
          <input type="file" class="form-control" id="foto" name="foto">

        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary mt-2" style="margin-left: 220px;">Simpan </button>
      <a href="../data_akta.php" class="btn btn-primary mt-2">Cencel </a>
    </form>
  </div>
</body>