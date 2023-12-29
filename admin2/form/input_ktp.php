<?php

include 'header.php';
include 'function.php';

$data_warga = query("SELECT * FROM warga");
if (isset($_POST['submit'])) {
  // var_dump($_POST);
  // var_dump($_FILES);
  // die;
  if (inputKtp($_POST) > 0) {
    echo "
          <script>
              alert('ktp berhasil di tambahkan');
          </script>
      ";
  } else {
    echo "
      <script>
          alert('ktp gagal di tambahkan');
      </script>
  ";
  }
}


?>

<body>
  <div class="container mt-5 fw-bold text-primary">
    <h1>Form Registrasi Kartu Tanda Penduduk (KTP) </h1>
    <form action="" method="post" enctype="multipart/form-data" class="mt-5">
      <div class="row mb-3">
        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="nik" name="nik">
        </div>
      </div>
      <div class="row mb-3">
        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-8">
          <input type="file" class="form-control" id="foto" name="foto">
        </div>
      </div>
      <div class="row mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama </label>
        <div class="col-sm-8">
          <select class="form-select" aria-label="Default select example" name="nama">
            <option selected>--Nama--</option>
            <?php foreach ($data_warga as $warga) : ?>
              <option value="<?= $warga['id']; ?>"><?= $warga['nama']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="row mb-3">

        <label for="conf_nama" class="col-sm-2 col-form-label">Konfirmasi Nama</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="conf_nama" name="conf_nama">
        </div>
      </div>
      <div class="row mb-3">
        <label for="usia" class="col-sm-2 col-form-label">Usia</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="usia" name="usia">
        </div>
      </div>
      <div class="row mb-3">
        <p><b>Note :</b> Format tanggal harus YYYY-DD-MM</p>
        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
        </div>
      </div>
      <div class="row mb-3">
        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
        </div>
      </div>
      <div class="row mb-3">
        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-8">
          <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
            <option selected>--jenis kelamin--</option>
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
      </div>
      <div class="row mb-3">
        <label for="rt" class="col-sm-2 col-form-label">RT</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="rt" name="rt">
        </div>
      </div>
      <div class="row mb-3">
        <label for="rw" class="col-sm-2 col-form-label">RW</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="rw" name="rw">
        </div>
      </div>
      <div class="row mb-3">
        <label for="desa_kelurahan" class="col-sm-2 col-form-label">Desa Kelurahan</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="desa_kelurahan" name="desa_kelurahan">
        </div>
      </div>
      <div class="row mb-3">
        <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="kecamatan" name="kecamatan">
        </div>
      </div>
      <div class="row mb-3 mt-5 ">
        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
        <select name="agama" style="width: 200px; margin-left:10px;" class="form-select" aria-label="Default select example">
          <option selected>Tidak Diketahui</option>
          <option value="katolik">katolik</option>
          <option value="kristen">kristen</option>
          <option value="hindu">hindu</option>
          <option value="budha">budha</option>
          <option value="islam">islam</option>
          <option value="konghucu">konghucu</option>
        </select>
      </div>
      <div class="row mb-3">
        <label for="status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="status" name="status">
        </div>
      </div>
      <div class="row mb-3">
        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
        </div>
      </div>
      <div class="row mb-5  ">
        <label for="kwn" class="col-sm-2 col-form-label">Kewarganegaraan</label>
        <select name="kwn" style="width: 200px; margin-left:10px;" class="form-select" aria-label="Default select example">
          <option selected>Tidak Diketahui</option>
          <option value="wni">WNI</option>
          <option value="wna">WNA</option>
        </select>
      </div>
      <button type="submit" name="submit" class="btn btn-primary mt-2 mb-5" style="margin-left: 220px;">Simpan </button>
      <a href="../ktp.php" class="btn btn-primary mt-2 mb-5">Cencel</a>
    </form>

  </div>
</body>